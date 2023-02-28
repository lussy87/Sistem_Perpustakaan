<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DboBuku extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_buku' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'judul_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'penulis_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'penerbit_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => false,
            ],
            'tahun_penerbit' => [
                'type' => 'INT',
                'constraint' => '100',
                'null' => false,
            ],
            'stok_buku' => [
                'type' => 'INT',
                'constraint' => '100',
                'null' => false,
            ],
            
            'user_time timestamp default now()'
        ]);
        $this->forge->addPrimaryKey('id_buku');
        // $this->forge->addForeignKey('level_id', 'dbo_level', 'level_id');
        $this->forge->createTable('dbo_buku');
    }

    public function down()
    {
        $this->forge->dropTable('dbo_buku');
    }
}
