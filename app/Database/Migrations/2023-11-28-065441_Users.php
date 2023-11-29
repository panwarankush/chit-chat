<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Users extends Migration
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
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP', 
                'default' => new RawSql('current_timestamp() on update current_timestamp()')
            ],
            
        ]);
        $this->forge->addKey('uid', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
