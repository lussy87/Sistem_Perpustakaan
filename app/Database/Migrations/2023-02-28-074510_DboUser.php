<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DboUser extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'user_id' => [ 
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true
            ],
            'user_password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
                'unique' => true
            ],
            'level_id' => [
                'type' => 'INT',
                'constraint' => '100',
                'null' => false
            ],
           
            'user_time timestamp default now()'
        ]);
        $this->forge->addPrimaryKey('user_id');
        $this->forge->createTable('dbo_user');
    }

    public function down()
    {
        $this->forge->dropTable('dbo_user');
    }
}