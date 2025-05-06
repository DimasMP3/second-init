<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblTempPeminjaman extends Migration
{
    public function up()
    {
        if (! $this->db->tableExists('tbl_temp_peminjaman')) {
            $this->forge->addField([
                'id_anggota' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'id_buku' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'jumlah_temp' => [
                    'type'       => 'INT',
                    'constraint' => 3,
                    'null'       => false,
                ],
            ]);

            // Jika mau pakai composite primary key:
            // $this->forge->addKey(['id_anggota', 'id_buku'], true);
            $this->forge->createTable('tbl_temp_peminjaman');
        }
    }

    public function down()
    {
        $this->forge->dropTable('tbl_temp_peminjaman');
    }
}
