<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblAdmin extends Migration
{
    public function up()
    {
        // Cegah error jika tabel sudah ada
        if (! $this->db->tableExists('tbl_admin')) {
            $this->forge->addField([
                'id_admin' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'nama_admin' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 50,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'username_admin' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 20,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'password_admin' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 255,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'akses_level' => [
                    'type'       => 'ENUM',
                    'constraint' => ['1', '2', '3'],
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'is_delete_admin' => [
                    'type'       => 'ENUM',
                    'constraint' => ['0', '1'],
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'created_at' => [
                    'type' => 'DATETIME',
                    'null' => false,
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => false,
                ],
            ]);

            $this->forge->addKey('id_admin', true);
            $this->forge->createTable('tbl_admin');
        }
    }

    public function down()
    {
        $this->forge->dropTable('tbl_admin');
    }
}
