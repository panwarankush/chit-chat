<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'uid' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'null' => true,
                'constraint' => '100',
            ],
            'gender' => [
                'type' => 'ENUM("Male","Female")',
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'null' => false,
                'constraint' => '100',
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'null' => true,
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'status' => [
                'type' => 'ENUM("Active","NotActive")',
                'default' => 'Active',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('uid', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
