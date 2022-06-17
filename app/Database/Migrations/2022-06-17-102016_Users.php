<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_uniqid' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'unique' => true,
                'null' => true,
            ],
            'handphone' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => true,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => 2,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => 1,
            ],
            'update_by' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'create_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'update_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('tb_user');

    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_user');

    }
}
