<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailJahit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_penjahitan' => [
                'type'  => 'INT',
            ],
            'id_produk' => [
                'type'  => 'INT',
            ],
            'ukuran'  => [
                'type'  => 'CHAR',
                'constraint'    => 5
            ],
            'jumlah' => [
                'type'  => 'INT',
            ],
            'biaya_produksi' => [
                'type'  => 'INT',
            ],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('detail_jahit', true);
    }

    public function down()
    {
        $this->forge->dropTable('detail_jahit', true);
    }
}