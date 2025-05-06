<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblAnggota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_anggota' => [
                'type'       => 'VARCHAR',
                'constraint' => 6,
                'null'       => false,
                'collation'  => 'latin1_swedish_ci',
            ],
            'nama_anggota' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => false,
                'collation'  => 'latin1_swedish_ci',
            ],
            'jenis_kelamin' => [
                'type'       => 'ENUM',
                'constraint' => ['L', 'P'],
                'null'       => false,
                'collation'  => 'latin1_swedish_ci',
            ],
            'no_tlp' => [
                'type'       => 'VARCHAR',
                'constraint' => 13,
                'null'       => false,
                'collation'  => 'latin1_swedish_ci',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
                'collation'  => 'latin1_swedish_ci',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
                'null'       => false,
                'collation'  => 'latin1_swedish_ci',
            ],
            'password_anggota' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
                'collation'  => 'latin1_swedish_ci',
            ],
            'is_delete_anggota' => [
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

        $this->forge->addKey('id_anggota', true);
        $this->forge->createTable('tbl_anggota');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_anggota');
    }
}
