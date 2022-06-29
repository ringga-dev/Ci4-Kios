<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{ //fungsi login dan logic coding
    public function getUser($username, $password)
    {
        $query = $this->db->table('admin_web')->where(['email' => $username])->get()->getRowArray();

        if ($query != null) {
            if (password_verify($password, $query['password'])) {

                if ($query['stts'] == 1) {
                    $data = ['stts' => true, 'msg' => 'Login berhasill...!', 'data' => $query];
                } else {
                    $data = ['stts' => false, 'msg' => 'user belum di aktifasi...!'];
                }
            } else {
                $data = ['stts' => false, 'msg' => 'password yang anda masukkan salah...!'];
            }
        } else {
            $data = ['stts' => false, 'msg' => 'user tidak di temukan...!'];
        }
        return $data;
    }

    //fungsi refister user
    public function add_user($data)
    {
        $query = $this->db->table('admin_web')
            ->where(['email' => $data['email']])
            ->orWhere('no_phone =', $data['no_phone'])
            ->get()->getRowArray();

        if (!$query) {
            $this->db->table('admin_web')->insert($data);
            $data = ['stts' => true, 'msg' => 'Kamu sudah terdaftar mohon verifikasi terlebih dahulu...!'];
        } else {
            $data = ['stts' => false, 'msg' => 'munggkin email atau nomor telfon sudah terdaftar...!'];
        }
        return $data;
    }
}
