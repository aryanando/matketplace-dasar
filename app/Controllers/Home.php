<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $barangModel = model('App\Models\BarangModel', false);

        $data['barang'] = $barangModel->findAll();
        echo view('/template/header.php');
        echo view('/template/body.php', $data); // variabel data kita kirimkan ke view body
        echo view('/template/footer.php');
    }
}
