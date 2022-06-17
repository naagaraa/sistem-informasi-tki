<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class SaldoTenagaKerja extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'keuangan_tki_id' => [
                'type' => 'INT',
                'constraint' => 100,
            ],
            'keuangan_tki_uniqid' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_tki' => [
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
        $this->forge->createTable('tb_saldo_tki');

    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_saldo_tki');

    }
}
