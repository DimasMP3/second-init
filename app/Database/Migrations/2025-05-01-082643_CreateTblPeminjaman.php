<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblPeminjaman extends Migration
{
    public function up()
    {
        if (! $this->db->tableExists('tbl_peminjaman')) {
            $this->forge->addField([
                'no_peminjaman' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 12,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'id_anggota' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'tgl_pinjam' => [
                    'type' => 'DATE',
                    'null' => false,
                ],
                'total_pinjam' => [
                    'type' => 'INT',
                    'constraint' => 3,
                    'null' => false,
                ],
                'id_admin' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'status_transaksi' => [
                    'type'       => 'ENUM',
                    'constraint' => ['Selesai', 'Berjalan'],
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'status_ambil_buku' => [
                    'type'       => 'ENUM',
                    'constraint' => ['Belum Diambil', 'Sudah Diambil'],
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'qr_code' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 30,
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
            ]);

            $this->forge->addKey('no_peminjaman', true); // Primary key
            $this->forge->createTable('tbl_peminjaman');
        }
    }

    public function down()
    {
        $this->forge->dropTable('tbl_peminjaman');
    }
}
