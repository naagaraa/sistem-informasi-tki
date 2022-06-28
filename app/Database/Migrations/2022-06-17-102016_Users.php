<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'uniqid_user' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'nama_user' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'email_user' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'unique' => true,
                'null' => true,
            ],
            'handphone_user' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => true,
            ],
            'alamat_user' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'role_user' => [
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => 2,
            ],
            'status_user' => [
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
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('tb_user');

    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_user');

    }
}
