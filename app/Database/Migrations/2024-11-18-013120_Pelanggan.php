<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Pelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField ([
            'id_pelanggan' => [
                'type' => 'int',
                'constraint' => 11,
                'null' => false,
                'auto increment' => true,
            ],
            'nama_pelanggan' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'alamat_pelanggan' => [
                'type' => 'text'
            ],
            'no_telp' => [
                'type' => 'varchar',
                'constraint' => 15,
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'update_at' => [
                'type' => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id_pelanggan',true);
        $this->forge->createTable('id_pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('id_pelanggan');
    }
}
