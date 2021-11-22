<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'barang_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'barang_title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'barang_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'barang_harga'          => [
                'type'           => 'INT',
                'constraint'     => 32,
                'null' => true,
            ],
            'barang_img'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'  => true,
            ],
        ]);
        $this->forge->addKey('barang_id', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
