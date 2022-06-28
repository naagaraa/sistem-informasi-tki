<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Perusahaan extends Migration
{
    public function up()
    {
        //code here
        $this->forge->addField([
            'id_perusahaan' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'uniqid_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'nama_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'alamat_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'negara_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'deskripsi_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'foto_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'uniqid_keuangan_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
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
        $this->forge->addKey('id_perusahaan', true);
        $this->forge->createTable('tb_perusahaan');

    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_perusahaan');

    }
}
