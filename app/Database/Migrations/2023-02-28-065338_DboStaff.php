<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DboStaff extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'staff_id' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_staff' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'jabatan_staff' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'alamat_staff' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'no_telp_staff' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
         
            'user_time timestamp default now()'
        ]);
        $this->forge->addPrimaryKey('staff_id');
        $this->forge->createTable('dbo_staff');
    }

    public function down()
    {
        $this->forge->dropTable('dbo_staff');
    }
}
