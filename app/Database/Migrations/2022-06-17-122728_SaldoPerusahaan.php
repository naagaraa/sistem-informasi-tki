<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class SaldoPerusahaan extends Migration
{
    public function up()
    {
        //code here
        $this->forge->addField([
            'keuangan_perusahaan_id' => [
                'type' => 'INT',
                'constraint' => 100,
            ],
            'keuangan_perusahaan_uniqid' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'debit_saldo' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'default' => 0,
            ],
            'kredit_saldo' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'default' => 0,
            ],
            'update_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],

        ]);
        $this->forge->createTable('tb_saldo_perusahaan');

    }

    public function down()
    {
        //code here
        $this->forge->dropTable('tb_saldo_perusahaan');
    }
}
