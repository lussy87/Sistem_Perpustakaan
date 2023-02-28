<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DboMurid extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'murid_id' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_murid' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'jk_murid' => [
                'type' => 'VARCHAR',
                'constraint' => '1',
                'null' => false,
            ],
            'alamat_murid' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'no_telp_murid' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
         
            'user_time timestamp default now()'
        ]);
        $this->forge->addPrimaryKey('murid_id');
        $this->forge->createTable('dbo_murid');
    }

    public function down()
    {
        $this->forge->dropTable('dbo_murid');
    }
}
