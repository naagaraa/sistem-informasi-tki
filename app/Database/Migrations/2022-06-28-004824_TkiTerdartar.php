<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class TkiTerdartar extends Migration
{
    public function up()
    {
        // code column
         $this->forge->addField([
            'id_tki_terdaftar' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'uniqid_tki_terdaftar' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'uniqid_loker' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'uniqid_user' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_user' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'default' => 0,
            ],
            'status_user' => [
                'type' => 'VARCHAR',
                'constraint' => 1,
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
        $this->forge->addKey('id_tki_terdaftar', true);
        $this->forge->createTable('tb_tki_terdaftar');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_tki_terdaftar');
    }
}
