<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    //produc logic
    public function getProduc($kategori = null, $id = null)
    {
        if ($kategori) {
            $data = $this->db->table('mas_barang')->select('mas_barang.*,mas_kategori.kategory')->join('mas_kategori', 'mas_barang.kategori_id = mas_kategori.id')->where(['kategori_id' => $kategori])->get()->getResultArray();
        } elseif ($id) {
            $data = $this->db->table('mas_barang')->select('mas_barang.*,mas_kategori.kategory')->join('mas_kategori', 'mas_barang.kategori_id = mas_kategori.id')->where(['id' => $id])->get()->getRowArray();
        } else {
            $data = $this->db->table('mas_barang')->select('mas_barang.*,mas_kategori.kategory')->join('mas_kategori', 'mas_barang.kategori_id = mas_kategori.id')->get()->getResultArray();
        }
        return $data;
    }

    public function addProduc($data)
    {
        $this->db->table('mas_barang')->insert($data);
        return ['stts' => true, 'msg' => 'produk telah di tambahkan...!'];
    }

    public function deleteProduc($id)
    {
        $this->db->table('mas_barang')->where(['id' => $id])->delete();
        return ['stts' => true, 'msg' => 'produk telah di hapus...!'];
    }

    public function updateProduc($id, $data)
    {
        $this->db->table('mas_barang')->where(['id' => $id])->update($data);
        return ['stts' => true, 'msg' => 'produk telah di update...!'];
    }



    //kategori logic
    public function getKategori($id = null)
    {
        if ($id) {
            $data = $this->db->table('mas_kategori')->where(['id' => $id])->get()->getRowArray();
        } else {
            $data = $this->db->table('mas_kategori')->get()->getResultArray();
        }
        return $data;
    }

    public function addKategori($data)
    {
        $this->db->table('mas_kategori')->insert($data);
        return ['stts' => true, 'msg' => 'produk telah di tambahkan...!'];
    }

    public function deleteKategori($id)
    {
        $this->db->table('mas_kategori')->where(['id' => $id])->delete();
        return ['stts' => true, 'msg' => 'produk telah di hapus...!'];
    }

    public function updateKategori($id, $data)
    {
        $this->db->table('mas_kategori')->where(['id' => $id])->update($data);
        return ['stts' => true, 'msg' => 'produk telah di update...!'];
    }



    //user logic
    public function getUser($id = null)
    {
        if ($id) {
            $data = $this->db->table('mas_pengguna')->where(['id' => $id])->get()->getRowArray();
        } else {
            $data = $this->db->table('mas_pengguna')->get()->getResultArray();
        }
        return $data;
    }
    // add user api
    public function addUser($data)
    {
        $this->db->table('mas_pengguna')->insert($data);
        return ['stts' => true, 'msg' => 'user telah di tambahkan...!'];
    }
    //fungsi login api
    public function loginUser($password, $email)
    {
        $query = $this->db->table('mas_pengguna')->where(['email' => $email])->get()->getRowArray();

        if ($query != null) {
            if (md5($password) == $query['password']) {

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
        return $data;
    }

    // update user
    public function updateUser($id, $data)
    {
        $this->db->table('mas_pengguna')->where(['id' => $id])->update($data);
        return ['stts' => true, 'msg' => 'User telah di update...!'];
    }

    //delete user
    public function deleteUser($id)
    {
        $this->db->table('mas_pengguna')->where(['id' => $id])->delete();
        return ['stts' => true, 'msg' => 'User telah di hapus...!'];
    }


    //trassaksi logic
    public function getTrasaksi($id = null, $idUser = null, $stts = null)
    {
        if ($idUser && $stts) {
            $data = $this->db->table('mas_transaksi')
                ->select('mas_transaksi.*, mas_pengguna.fullname, mas_pengguna.email, mas_pengguna.no_phone, mas_barang.nama_barang, mas_barang.harga,mas_barang.promo')
                ->join("mas_pengguna", 'mas_pengguna.id = mas_transaksi.id_pengguna')
                ->join("mas_barang", 'mas_barang.id = mas_transaksi.id_barang')
                ->where(['mas_transaksi.id_pengguna' => $idUser, 'mas_transaksi.stts' => $stts])
                ->orderBy("mas_transaksi.date", "ASC")->get()->getResultArray();
        } elseif ($idUser) {
            $data = $this->db->table('mas_transaksi')
                ->select('mas_transaksi.*, mas_pengguna.fullname, mas_pengguna.email, mas_pengguna.no_phone, mas_barang.nama_barang, mas_barang.harga,mas_barang.promo')
                ->join("mas_pengguna", 'mas_pengguna.id = mas_transaksi.id_pengguna')
                ->join("mas_barang", 'mas_barang.id = mas_transaksi.id_barang')
                ->where(['mas_transaksi.id_pengguna' => $idUser])
                ->orderBy("mas_transaksi.date", "ASC")
                ->get()->getResultArray();
        } elseif ($id) {
            $data = $this->db->table('mas_transaksi')
                ->select('mas_transaksi.*, mas_pengguna.fullname, mas_pengguna.email, mas_pengguna.no_phone, mas_barang.nama_barang, mas_barang.harga,mas_barang.promo')
                ->join("mas_pengguna", 'mas_pengguna.id = mas_transaksi.id_pengguna')
                ->join("mas_barang", 'mas_barang.id = mas_transaksi.id_barang')
                ->where(['mas_transaksi.id' => $id])
                ->orderBy("mas_transaksi.date", "ASC")
                ->get()->getRowArray();
        } elseif ($stts) {
            $data = $this->db->table('mas_transaksi')
                ->select('mas_transaksi.*, mas_pengguna.fullname, mas_pengguna.email, mas_pengguna.no_phone, mas_barang.nama_barang, mas_barang.harga,mas_barang.promo')
                ->join("mas_pengguna", 'mas_pengguna.id = mas_transaksi.id_pengguna')
                ->join("mas_barang", 'mas_barang.id = mas_transaksi.id_barang')
                ->where(['mas_transaksi.stts' => $stts])
                ->orderBy("mas_transaksi.date", "ASC")
                ->get()->getResultArray();
        } else {
            $data = $this->db->table('mas_transaksi')
                ->select('mas_transaksi.*, mas_pengguna.fullname, mas_pengguna.email, mas_pengguna.no_phone, mas_barang.nama_barang, mas_barang.harga,mas_barang.promo')
                ->join("mas_pengguna", 'mas_pengguna.id = mas_transaksi.id_pengguna')
                ->join("mas_barang", 'mas_barang.id = mas_transaksi.id_barang')
                ->orderBy("mas_transaksi.date", "ASC")
                ->get()->getResultArray();
        }

        return $data;
    }

    //menampilkan data berdasarkan 2 kondisi
    public function getTransaksiUser($idUser, $stts)
    {
        if ($stts == "ALL") {
            $data = $this->db->table('mas_transaksi')
                ->select('mas_transaksi.*, mas_pengguna.fullname, mas_pengguna.email, mas_pengguna.no_phone, mas_barang.nama_barang, mas_barang.harga,mas_barang.image_b1, mas_barang.promo')
                ->join("mas_pengguna", 'mas_pengguna.id = mas_transaksi.id_pengguna')
                ->join("mas_barang", 'mas_barang.id = mas_transaksi.id_barang')
                ->where(['mas_transaksi.id_pengguna' => $idUser])
                ->orderBy("mas_transaksi.date", "ASC")->get()->getResultArray();
        } else {
            $data = $this->db->table('mas_transaksi')
                ->select('mas_transaksi.*, mas_pengguna.fullname, mas_pengguna.email, mas_pengguna.no_phone, mas_barang.nama_barang, mas_barang.harga,mas_barang.image_b1,mas_barang.promo')
                ->join("mas_pengguna", 'mas_pengguna.id = mas_transaksi.id_pengguna')
                ->join("mas_barang", 'mas_barang.id = mas_transaksi.id_barang')
                ->where(['mas_transaksi.id_pengguna' => $idUser, 'mas_transaksi.stts' => $stts])
                ->orderBy("mas_transaksi.date", "ASC")->get()->getResultArray();
        }
        return $data;
    }

    // menambah transaksi
    public function addTrasaksi($data)
    {
        $this->db->table('mas_transaksi')->insert($data);
        return ['stts' => true, 'msg' => 'Trasaksi telah di proses...!'];
    }

    //update transaksi
    public function updateSttsTrasaksi($id, $data)
    {
        $this->db->table('mas_transaksi')->where(['id' => $id])->update($data);
        return ['stts' => true, 'msg' => 'trasaksi telah di ...!' . $data['stts']];
    }

    //memperbarui status 
    public function updateSttsDelete($id)
    {
        $data = $this->db->table('mas_transaksi')->where(['id' => $id])->get()->getRowArray();
        if ($data['stts'] != "DI KIRIM") {
            $this->db->table('mas_transaksi')->where(['id' => $id])->delete();
            return ['stts' => true, 'msg' => 'trasaksi telah di hapus...!'];
        } else {
            return ['stts' => false, 'msg' => 'barang telah dikirim, anda tidak dapat menghapusnya...!'];
        }
    }
    //mendapatkan toke 
    public function getToken($id)
    {
        $data = $this->db->table('user_key')->where(['id_pengguna' => $id])->get()->getRowArray();
        return $data['key'];
    }
    //menyimpan token
    public function saveToken($user_id, $token)
    {
        $data = $this->db->table('user_key')->where(['id_pengguna' => $user_id])->get()->getRowArray();
        if ($data) {
            $this->db->table('user_key')->where(['id_pengguna' => $user_id])->update(['key' => $token]);
            return ['stts' => true, 'msg' => 'Token di perbarui...!'];
        } else {
            $this->db->table('user_key')->insert(['id_pengguna' => $user_id, 'key' => $token]);
            return ['stts' => true, 'msg' => 'barang telah dikirim, anda tidak dapat menghapusnya...!'];
        }
    }

    //user Admin
    public function getAdmin($id = null)
    {
        if ($id) {
            $data = $this->db->table('admin_web')->where(['id' => $id])->get()->getRowArray();
        } else {
            $data = $this->db->table('admin_web')->get()->getResultArray();
        }
        return $data;
    }

    //delete admin 

    public function deleteAdmin($id)
    {
        $this->db->table('admin_web')->where(['id' => $id])->delete();
        return ['stts' => true, 'msg' => 'admin telah di hapus...!'];
    }

    //add admin
    public function addAdmin($data)
    {
        $this->db->table('admin_web')->insert($data);
        return ['stts' => true, 'msg' => 'data telah di tambahkan...!'];
    }
    //update akses
    public function updateAdmin($id)
    {
        $data = $this->db->table('admin_web')->where(['id' => $id])->get()->getRowArray();
        if ($data['stts'] == 1) {
            $this->db->table('admin_web')->where(['id' => $id])->update(['stts' => 2]);
            return ['stts' => true, 'msg' => 'Token di perbarui...!'];
        } else {
            $this->db->table('admin_web')->where(['id' => $id])->update(['stts' => 1]);
            return ['stts' => true, 'msg' => 'Token di perbarui...!'];
        }
    }
}
