<?php
namespace App\Models;

use CodeIgniter\Model;

class M_Admin extends Model
{
    protected $table = 'tbl_admin'; // Pastikan nama tabel sesuai dengan database

    public function getDataAdmin($where = false)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        if ($where !== false) {
            $builder->where($where);
        }
        $builder->orderBy('nama_admin', 'ASC');
        return $builder->get();
    }

    public function saveDataAdmin($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataAdmin($data, $where)
    {
        return $this->db->table($this->table)->update($data, $where);
    }

    public function autoNumber()
    {
        $builder = $this->db->table($this->table);
        $builder->select("id_admin");
        $builder->orderBy("id_admin", "DESC");
        $builder->limit(1);
        return $builder->get();
    }
}