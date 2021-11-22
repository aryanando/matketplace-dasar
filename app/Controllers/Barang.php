<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Barang extends BaseController
{
    public function index()
    {
        
    }

    public function add()
    {
        $request = \Config\Services::request();
        if ($request->getVar('submit')=='submit') {
            $files = $request->getFile('barang_img')->store('../../public/assets/img');
            $data = $request->getVar();
            $data['barang_img'] = $request->getFile('barang_img')->getName();
            $barangModel = model('App\Models\BarangModel', false);
            $barangModel->insert($data);
        }
        echo view('/template/header.php');
        echo view('/template/addBarang.php'); // variabel data kita kirimkan ke view body
        echo view('/template/footer.php');
    }
}
