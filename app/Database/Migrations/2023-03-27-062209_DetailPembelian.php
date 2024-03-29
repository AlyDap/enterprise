<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailPembelian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_pembelian' => [
                'type'  => 'INT',
            ],
            'id_bahan' => [
                'type'  => 'INT',
            ],
            'harga' => [
                'type'  => 'INT',
            ],
            'jumlah' => [
                'type'  => 'INT',
            ],
            'total' => [
                'type'  => 'INT',
            ],

        ]);
        $this->forge->createTable('detail_pembelian');
    }

    public function down()
    {
        $this->forge->dropTable('detail_pembelian', true);
    }
}