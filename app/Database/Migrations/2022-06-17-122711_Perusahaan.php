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
            'perusahaan_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'perusahaan_uniqid' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'nama_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'negara_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
            ],
            'deskripsi_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'keuangan_perusahaan_uniqid' => [
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
        $this->forge->addKey('perusahaan_id', true);
        $this->forge->createTable('tb_perusahaan');

    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_perusahaan');

    }
}
