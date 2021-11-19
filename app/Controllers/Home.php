<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('/template/header.php');
        echo view('/template/body.php');
        echo view('/template/footer.php');
    }
}
