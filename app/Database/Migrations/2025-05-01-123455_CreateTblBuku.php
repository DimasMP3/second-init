<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblBuku extends Migration
{
    public function up()
    {
        if (! $this->db->tableExists('tbl_buku')) {
            $this->forge->addField([
                'id_buku' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'judul_buku' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 200,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'pengarang' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 50,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'penerbit' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 50,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'tahun' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 4,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'jumlah_eksemplar' => [
                    'type'       => 'INT',
                    'constraint' => 3,
                    'null'       => false,
                ],
                'id_kategori' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'keterangan' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 500,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'id_rak' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'cover_buku' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 30,
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'e_book' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 30,
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'is_delete_buku' => [
                    'type'       => 'ENUM',
                    'constraint' => ['0', '1'],
                    'default'    => '0',
                    'null'       => false,
                ],
                'created_at' => [
                    'type'       => 'DATETIME',
                    'null'       => false,
                ],
                'updated_at' => [
                    'type'       => 'DATETIME',
                    'null'       => false,
                ],
            ]);

            $this->forge->addKey('id_buku', true); // Primary key
            $this->forge->createTable('tbl_buku');
        }
    }

    public function down()
    {
        $this->forge->dropTable('tbl_buku');
    }
}
