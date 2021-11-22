<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataBarang extends Seeder
{
    public function run()
    {
        $data = [
            'barang_title'    => 'Tas Kecil Imut',
            'barang_description' => 'Barang Kualitas Bagus Dan Istimewa',
            'barang_harga' => '30000',
            'barang_img' => '01_tas_kecil.jpg'
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('barang')->insert($data);
    }
}
