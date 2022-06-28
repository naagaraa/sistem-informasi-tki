<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class DataTerbang extends Migration
{
    public function up()
    {
        //code here
        $this->forge->addField([
            'data_terbang_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'data_terbang_uniqid' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'user_uniqid' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_user' => [
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => true,
            ],
            'tujuan_negara' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'default' => 0,
            ],
            'tgl_masuk' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'tgl_terbang' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
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
        $this->forge->addKey('data_terbang_id', true);
        $this->forge->createTable('tb_data_terbang');

    }

    public function down()
    {
        //code here
        $this->forge->dropTable('tb_data_terbang');

    }
}
