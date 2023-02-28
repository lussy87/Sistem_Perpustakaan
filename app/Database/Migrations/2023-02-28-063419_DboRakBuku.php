<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DboRakBuku extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_rak' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_rak' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'lokasi_rak' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'id_buku' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            
            'user_time timestamp default now()'
        ]);
        $this->forge->addPrimaryKey('id_rak');
        $this->forge->addForeignKey('id_buku', 'dbo_buku', 'id_buku');
        $this->forge->createTable('dbo_rak_buku');
    }

    public function down()
    {
        $this->forge->dropTable('dbo_rak_sbuku');
    }
}
