<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblPengembalian extends Migration
{
    public function up()
    {
        if (! $this->db->tableExists('tbl_pengembalian')) {
            $this->forge->addField([
                'no_pengembalian' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 12,
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'no_peminjaman' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 12,
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'id_buku' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'denda' => [
                    'type'       => 'DOUBLE',
                    'null'       => false,
                ],
                'tgl_pengembalian' => [
                    'type' => 'DATE',
                    'null' => false,
                ],
                'id_admin' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
            ]);

            $this->forge->addKey('no_pengembalian', true); // Primary key
            $this->forge->createTable('tbl_pengembalian');
        }
    }

    public function down()
    {
        $this->forge->dropTable('tbl_pengembalian');
    }
}
