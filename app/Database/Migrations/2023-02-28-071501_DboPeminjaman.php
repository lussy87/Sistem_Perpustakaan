<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DboPeminjaman extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_peminjam' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tgl_pinjam' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'tgl_kembali' => [
                'type' => 'DATE',
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
        $this->forge->addPrimaryKey('id_peminjam');
        $this->forge->addForeignKey('id_buku', 'dbo_buku', 'id_buku');
        $this->forge->addForeignKey('staff_id', 'dbo_staff', 'staff_id');
        $this->forge->addForeignKey('murid_id', 'dbo_murid', 'murid_id');
        $this->forge->createTable('dbo_peminjaman');
    }

    public function down()
    {
        $this->forge->dropTable('dbo_peminjaman');
    }
}
