<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblDetailPeminjaman extends Migration
{
    public function up()
    {
        if (! $this->db->tableExists('tbl_detail_peminjaman')) {
            $this->forge->addField([
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
                'status_pinjam' => [
                    'type'       => 'ENUM',
                    'constraint' => ['Sedang Dipinjam', 'Sudah Dikembalikan'],
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'perpanjangan' => [
                    'type'       => 'INT',
                    'constraint' => 1,
                    'null'       => false,
                ],
                'tgl_kembali' => [
                    'type' => 'DATE',
                    'null' => false,
                ],
            ]);

            // Jika perlu, Anda bisa set primary key di sini:
            // $this->forge->addKey(['no_peminjaman', 'id_buku'], true); // jika kombinasi
            $this->forge->createTable('tbl_detail_peminjaman');
        }
    }

    public function down()
    {
        $this->forge->dropTable('tbl_detail_peminjaman');
    }
}
