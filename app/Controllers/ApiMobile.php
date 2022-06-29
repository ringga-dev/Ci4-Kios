<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\AdminModel;
use CodeIgniter\API\ResponseTrait;
use Faker\Provider\Lorem;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ApiMobile extends ResourceController
{
    use ResponseTrait;
    public function __construct()
    {
        $this->model = new AdminModel();
        helper(['api', 'form', 'security']);
    }
    public function index()
    {
        //
    }

    public function register()
    {
        // echo rand(100000, 999999);


        $dataRegister = [
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
            'password' => md5($this->request->getPost('password')),
            'image' => 'user.id',
            'alamat' => $this->request->getPost('alamat'),
            'no_phone' => $this->request->getPost('no_phone'),
            'stts' => "not verification",
        ];


        $data = $this->model->addUser($dataRegister);
        if ($data['stts'] == false) {
            return $this->respond($dataRegister, 200);
        } else {
            return $this->respond($data, 200);
        }
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');


        $data = $this->model->loginUser($password, $email);
        if ($data['stts'] == false) {
            return $this->respond($data, 200);
        } else {
            return $this->respond($data, 200);
        }
    }

    public function pesan()
    {
        $data = [
            'id_barang' => $this->request->getPost('id_barang'),
            'id_pengguna' => $this->request->getPost('id_pengguna'),
            'qty' => $this->request->getPost('qty'),
            'stts' => "DI PESAN",
            'alamat' => $this->request->getPost('alamat'),
            'lat' => $this->request->getPost('lat'),
            'long' => $this->request->getPost('long'),
            'message' => $this->request->getPost('message'),
            'date' => date('d-m-Y H:i:s'),
            'send' => '',
        ];
        $data = $this->model->addTrasaksi($data);
        if ($data['stts'] == false) {
            return $this->respond($data, 200);
        } else {
            return $this->respond($data, 200);
        }
    }

  

    public function get_keranjang()
    {
        #code
    }

    public function pembatalan()
    {
        $data = [
            'stts' => "DI BATALKAN",
            'message' => $this->request->getPost('message'),
            'send' => date('d-m-Y H:i:s'),
        ];

        $data1 = $this->model->getTrasaksi($this->request->getPost('id'));
        if ($data1['stts'] != 'DI KIRIM') {
            $data = $this->model->updateSttsTrasaksi($this->request->getPost('id'), $data);
            if ($data['stts'] == false) {
                return $this->respond($data, 200);
            } else {
                return $this->respond($data, 200);
            }
        } else {
            return $this->respond(['stts' => true, 'msg' => 'Trasaksi tidak dapat di batalkan...!'], 200);
        }
    }

    public function diterima()
    {
        $data = [
            'stts' => "DI TERIMA",
            'message' => $this->request->getPost('message'),
            'send' => date('d-m-Y H:i:s'),
        ];

        $data1 = $this->model->getTrasaksi($this->request->getPost('id'));
        if ($data1['stts'] != 'DI BATALKAN') {
            $data = $this->model->updateSttsTrasaksi($this->request->getPost('id'), $data);
            if ($data['stts'] == false) {
                return $this->respond($data, 200);
            } else {
                return $this->respond($data, 200);
            }
        } else {
            return $this->respond(['stts' => false, 'msg' => 'Trasaksi tidak dapat di batalkan...!'], 200);
        }
    }

    public function get_transaksi()
    {
        $data = $this->model->getTransaksiUser($this->request->getPost('id_user'), $this->request->getPost('stts'));
        return $this->respond($data, 200);
    }

    public function get_stts()
    {
        $data = ['DI TERIMA', 'DI PESAN', 'DI BATALKAN', 'DI PESAN'];

        return $this->respond($data, 200);
    }


    public function get_kategori()
    {
        $data = $this->model->getKategori();
        return $this->respond($data, 200);
    }

    public function save_token()
    {
        $user_id = $this->request->getPost('id');
        $token = $this->request->getPost('token');

        $data = $this->model->saveToken($user_id, $token);

        return $this->respond($data, 200);
    }

    public function getProduc()
    {
        $di = $this->request->getVar('kategori');
        $barang = $this->model->getProduc($di);
        return $this->respond($barang, 200);
    }


    public function sendMail()
    {

        $to                 = 'ringgadev@gmail.com';
        $subject            = "may name";
        $pesan = "<html><body>";
        $pesan .= "<h2>Request Penambahan Kategori</h2>";
        $pesan .= "<img src='https://www.saidalfaruq.net/project/z/techno_job3.png' style='height:66px; margin-bottom:10px;'>";
        $pesan .= "<table>";
        $pesan .= "<tr><th style='margin:5px; padding:5px; border:solid 1px #E59966; background:#E59966; width:180px;'>Kategori</th> <th style='margin:5px; padding:5px; border:solid 1px #E59966; background:#E59966; width:180px;'>Item</th></tr>";
        $pesan .= "<tr><td style='border:solid 1px #E59966; text-align:center;'>Elektronik</td> <td style='border:solid 1px #E59966; text-align:center;'>Kamera<br>Televisi<br>Komputer</td></tr>";
        $pesan .= "<tr><td style='border:solid 1px #E59966; text-align:center;'>Fashion</td> <td style='border:solid 1px #E59966; text-align:center;'>Pakain Pria<br>Pakaian Wanita<br>Pakaian Anak<br></td></tr>";
        $pesan .= "</table>";
        $pesan .= "</body></html>";
        $message = wordwrap($pesan, 70);

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.googlemail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ringgamungo97@gmail.com'; // silahkan ganti dengan alamat email Anda
            $mail->Password   = 'RinggaSeptiaPribadi1997'; // silahkan ganti dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            $mail->setFrom('ringgamungo97@gmail.com', 'ringga'); // silahkan ganti dengan alamat email Anda
            $mail->addAddress($to);
            $mail->addReplyTo('ringgamungo97@gmail.com', 'ringga'); // silahkan ganti dengan alamat email Anda
            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
            dd("berhasil");
        } catch (Exception $e) {
            dd($mail->ErrorInfo);
        }
    }
}
