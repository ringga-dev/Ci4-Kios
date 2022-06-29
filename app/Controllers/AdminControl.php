<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;


class AdminControl extends BaseController
{
    //menjalakan fungsi otomatis code
    public function __construct()
    {
        // memangil class model 
        $this->adminModel = new AdminModel();
    }

    //fungsi dasar
    public function index()
    {
        //mengisi array yang di butuhkan view
        $data = [
            'title' => "home"
        ];
        //mengirim data dan memangil view
        return view('admin/home', $data);
    }

    //tampilan admin control
    public function admin_control()
    {
        // menyiapkan data yang akan di tampilkan
        $data = [
            'title' => "admin control",
            'user' =>  $this->adminModel->getAdmin(),
        ];

        return view('admin/admin_control', $data);
    }

    public function aksiAdmin()
    {
        //mengambil inputan dari user
        $stts = $this->request->getVar('action');

        //logic percabangan berdasarkan permintaan user
        switch ($stts) {
                //kondisi kalau di delet
            case "delete":
                $id = $this->request->getVar('id');
                $data = $this->adminModel->deleteAdmin($id);
                session()->setFlashdata('pesan',  $data);
                return redirect()->to('AdminControl/admin_control');

                break;
                //kondisi add
            case "add":
                $datar = [
                    'fullname' => $this->request->getVar('fullname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'no_phone' => $this->request->getVar('no_phone'),
                    'role' => $this->request->getVar('role'),
                ];
                $data = $this->adminModel->addAdmin($datar);
                session()->setFlashdata('pesan',  $data);
                return redirect()->to('AdminControl/admin_control');

                break;
                //kondisi update
            case "update":
                $id = $this->request->getVar('id');
                $data = $this->adminModel->updateAdmin($id);
                session()->setFlashdata('pesan',  $data);
                return redirect()->to('AdminControl/admin_control');
                break;

            default:
        }
    }

    public function produc()
    {
        $di = $this->request->getVar('kategori');

        $data = [
            'title' => "Produc",
            'barang' => $this->adminModel->getProduc($di),
            'kategori' => $this->adminModel->getKategori(),
        ];
        return view('admin/produc', $data);
    }

    public function aksiBarang()
    {

        $action = $this->request->getVar('action');

        if ($action == "add") {
            // mendapatkan file yang di input
            $image1 = $this->request->getFile('image1');
            $image2 = $this->request->getFile('image2');
            $image3 = $this->request->getFile('image3');
            $image4 = $this->request->getFile('image4');
            //menyiapkan tempat simpan gambar
            $path = './assets/barang/';
            //memanggil fungsi image ci4 dari library
            $gambar = service('image');


            //mengubah nama dari file
            $nameFile1 = $image1->getRandomName();
            $nameFile2 = $image2->getRandomName();
            $nameFile3 = $image3->getRandomName();
            $nameFile4 = $image4->getRandomName();

            //megirimkan file ke penyimpanan
            $image1->move($path, $nameFile1);
            $image2->move($path, $nameFile2);
            $image3->move($path, $nameFile3);
            $image4->move($path, $nameFile4);

            //memotong gambar
            $gambar->withFile($path . '/' . $nameFile1)
                ->fit(400, 400, "center")
                ->save($path . "/" . $nameFile1);
            $gambar->withFile($path . '/' . $nameFile2)
                ->fit(400, 400, "center")
                ->save($path . "/" . $nameFile2);
            $gambar->withFile($path . '/' . $nameFile3)
                ->fit(400, 400, "center")
                ->save($path . "/" . $nameFile3);
            $gambar->withFile($path . '/' . $nameFile4)
                ->fit(400, 400, "center")
                ->save($path . "/" . $nameFile4);
            //menyiapkan data untuk ke database
            $data = [
                'nama_barang' => $this->request->getVar('nama_barang'),
                'harga' => $this->request->getVar('harga'),
                'jumlah' => $this->request->getVar('jumlah'),
                'kategori_id' => $this->request->getVar('kategori_id'),
                'image_b1' => $nameFile1,
                'image_b2' => $nameFile2,
                'image_b3' => $nameFile3,
                'image_b4' => $nameFile4,
                'deskripsi' => $this->request->getVar('deskripsi'),
            ];

            //mengirim data ke model untuk di simpan
            $datar = $this->adminModel->addProduc($data);
            session()->setFlashdata('pesan',  $datar);
            return redirect()->to('AdminControl/produc');
        } elseif ($action == "update") {
            $id = $this->request->getVar('id');
            $data = [
                'nama_barang' => $this->request->getVar('nama_barang'),
                'harga' => $this->request->getVar('harga'),
                'jumlah' => $this->request->getVar('jumlah'),
                'promo' => $this->request->getVar('promo'),
                'deskripsi' => $this->request->getVar('deskripsi'),
            ];

            //mengirim data ke model untuk di update
            $datar = $this->adminModel->updateProduc($id, $data);
            session()->setFlashdata('pesan',  $datar);
            return redirect()->to('AdminControl/produc');
        } elseif ($action == "delete") {
            $id = $this->request->getVar('id');

            //mengirim data ke model untuk di delete
            $datar = $this->adminModel->deleteProduc($id);
            session()->setFlashdata('pesan',  $datar);
            return redirect()->to('AdminControl/produc');
        }
    }

    public function kategori()
    {
        $data = [
            'title' => "Kategori",
            'kategori' => $this->adminModel->getKategori(),
        ];

        return view('admin/kategori', $data);
    }


    public function aksiKategori()
    {
        $action = $this->request->getVar('action');
        $id = $this->request->getVar('id');

        if ($action == "add") {
            $data = [
                'kategory' => $this->request->getVar('kategori'),
            ];

            $datar = $this->adminModel->addKategori($data);
            session()->setFlashdata('pesan',  $datar);
            return redirect()->to('AdminControl/kategori');
        } elseif ($action == "delete") {
            $datar = $this->adminModel->deleteKategori($id);
            session()->setFlashdata('pesan',  $datar);
            return redirect()->to('AdminControl/kategori');
        }
    }


    public function transaksi()
    {
        $id = $this->request->getVar('id');
        $idUser = $this->request->getVar('idUser');
        $stts = $this->request->getVar('stts');
        $data = [
            'title' => "Trasaksi",
            'trasaksi' => $this->adminModel->getTrasaksi($id, $idUser, $stts),
            'user' => $this->adminModel->getUser(),
            'stts' => ['DI TERIMA', 'DI PESAN', 'DI BATALKAN', 'DI PESAN'],
        ];
        // dd($data);
        return view('admin/trasaksi', $data);
    }

    public function aksiTransaksi()
    {
        $action = $this->request->getVar('action');
        $id = $this->request->getVar('id');
        if ($action == "delete") {
            $datar = $this->adminModel->updateSttsDelete($id);
            session()->setFlashdata('pesan',  $datar);
            return redirect()->to('AdminControl/transaksi');
        } elseif ($action == "kirim") {
            $data = ['stts' => 'DI KIRIM'];
            $datar = $this->adminModel->updateSttsTrasaksi($id, $data);
            session()->setFlashdata('pesan',  $datar);
            return redirect()->to('AdminControl/transaksi');
        }
    }


    public function send_message()
    {
        $fcm_token = $this->adminModel->getToken($this->request->getVar('id'));
        $title = $this->request->getVar('title');
        $message = $this->request->getVar('pesan');
        $id = $this->request->getVar('id');
        $action = $this->request->getVar('action');

        $url = "https://fcm.googleapis.com/fcm/send";
        $header = [
            'authorization: key=AAAAuVQgqQM:APA91bHBD72rO6HPTcS95lDkk7QkesGWGxD3wzLEeGalzJa9Bw4gC6cdBVbxEcuAqCq9jWTHT4z4xlB6pFLcF4EQI3DuQ3-Y90UTZgnnvFju_4ghiugvHFTCL6WW7r8XLRVC1KkOCQMw',
            'content-type: application/json'
        ];

        $notification = [
            'title' => $title,
            'body' => $message
        ];
        $extraNotificationData = ["message" => $notification, "id" => $id, 'action' => $action];

        $fcmNotification = [
            'to'        => $fcm_token,
            'notification' => $notification,
            'data' => $extraNotificationData
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        $result = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($result, true);
        if ($data['success'] == 1) {
            session()->setFlashdata('pesan',  ['stts' => true, 'msg' => 'berhasil mengirim notifikasi...!']);
            return redirect()->to('AdminControl/notifikasi');
        } else {
            session()->setFlashdata('pesan',  ['stts' => false, 'msg' => 'gagal mengirim notifikasi...!']);
            return redirect()->to('AdminControl/notifikasi');
        }
    }


    public function notifikasi()
    {
        $data = [
            'title' => "Trasaksi",
            'user' => $this->adminModel->getUser(),
        ];
        // dd($data);
        return view('admin/notifikasi', $data);
    }
}
//231af0b6d96361cea4bf6e12dbce8425-1a3ab600-8930-45ed-896a-c467208775c8

// , 