<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Loker extends Migration
{
    public function up()
    {
        //code here
        $this->forge->addField([
            'id_loker' => [
                'type' => 'INT',
                'constraint' => 100,
            ],
            'uniqid_loker' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'uniqid_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'status_loker' => [
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => true,
            ],
            'nama_posisi' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'default' => 0,
            ],
            'nama_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'default' => 0,
            ],
            'negara_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'default' => 0,
            ],
            'jobdesk_deskription' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'default' => 0,
            ],
            'kualifikasi_deskription' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'default' => 0,
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
        $this->forge->addKey('id_loker', true);
        $this->forge->createTable('tb_loker');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_loker');
    }
}
