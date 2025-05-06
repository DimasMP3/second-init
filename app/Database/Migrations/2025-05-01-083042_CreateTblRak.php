<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblRak extends Migration
{
    public function up()
    {
        if (! $this->db->tableExists('tbl_rak')) {
            $this->forge->addField([
                'id_rak' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 6,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'nama_rak' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 50,
                    'null'       => false,
                    'collation'  => 'latin1_swedish_ci',
                ],
                'is_delete_rak' => [
                    'type'       => 'ENUM',
                    'constraint' => ['0', '1'],
                    'default'    => '0',
                    'null'       => false,
                    'collation'  => 'utf8mb4_general_ci',
                ],
                'created_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
            ]);

            $this->forge->addKey('id_rak', true); // Primary key
            $this->forge->createTable('tbl_rak');
        }
    }

    public function down()
    {
        $this->forge->dropTable('tbl_rak');
    }
}
