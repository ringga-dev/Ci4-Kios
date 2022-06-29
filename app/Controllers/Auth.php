<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class Auth extends BaseController
{

    public function __construct()
    {
        $this->authModel = new AuthModel();
    }

    //memangil tampilan
    public function login()
    {
        return view('user/login');
    }

    public function register()
    {
        return view('user/register');
    }

    //logic berdasarka inputan user
    public function auth_now()
    {
        $stts = $this->request->getVar('stts');
        //kondisi jika login
        if ($stts == "login") {
            $username = $this->request->getVar('email');
            $password = $this->request->getVar('pass');
            $data = $this->authModel->getUser($username, $password);

            if ($data['stts'] == false) {
                session()->setFlashdata('pesan', $data);
                return redirect()->to('/auth/login');
            } else {
                $data_session = [
                    'data'  => $data['data'],
                    'role'     => $data['data']['role'],
                    'logged_in' => TRUE
                ];
                //menyimpan data ke session
                session()->set($data_session);
                session()->setFlashdata('pesan', $data);
                //mengirim user ke tampilan 
                if ($data['data']['role'] = 1) {
                    return redirect()->to('/admin');
                } elseif ($data['data']['role'] = 2) {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/admin');
                }
            }
            //kondisi jika register
        } elseif ($stts == "register") {
            $data = [
                'fullname' => $this->request->getVar('fullname'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
                'no_phone' => $this->request->getVar('no_phone'),
                'image' => 'Admin.jpg',
                'stts' => 'blog',
                'role' => '1'
            ];

            $data = $this->authModel->add_user($data);


            session()->setFlashdata('pesan', $data);
            return redirect()->to('/auth/register');
        }
    }

    public function logout()
    {
        //fungsi logout
        //delete semua data pada sesion
        $data['loding_text'] = 'silahkan tunggu';

        session()->remove('data');
        session()->remove('role');
        session()->remove('logged_in');
        $data = ['stts' => true, 'msg' => 'Proses logout berhasil...!'];
        session()->setFlashdata('pesan', $data);
        return redirect()->to('/auth/login');
    }
}
