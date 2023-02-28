<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DboPengembalian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kembali' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tgl_kembali' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'denda' => [ 
                'type' => 'INT',
                'constraint' => 100,
                'null' => false,
            ],
            'id_buku' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            'staff_id' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            'murid_id' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            'user_time timestamp default now()'
        ]);
        $this->forge->addPrimaryKey('id_kembali');
        $this->forge->addForeignKey('id_buku', 'dbo_buku', 'id_buku');
        $this->forge->addForeignKey('staff_id', 'dbo_staff', 'staff_id');
        $this->forge->addForeignKey('murid_id', 'dbo_murid', 'murid_id');
        $this->forge->createTable('dbo_pengembalian');
    }

    public function down()
    {
        $this->forge->dropTable('dbo_pengembalian');
    }
}
