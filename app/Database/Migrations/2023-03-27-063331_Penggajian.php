<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penggajian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_penggajian' => [
                'type'  => 'INT',
                'constraint'    => 11,
                'auto_increment'    => true
            ],
            'tgl'  => [
                'type'  => 'datetime',
            ],
            'gaji'  => [
                'type'  => 'INT',
            ],
            'id_user'  => [
                'type'  => 'INT',
            ],
            'pencatat'  => [
                'type'  => 'INT',
            ],
        ]);
        $this->forge->addKey('no_penggajian', true);
        $this->forge->createTable('penggajian', true);
    }

    public function down()
    {
        $this->forge->dropTable('penggajian', true);
    }
}