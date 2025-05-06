<?php
namespace App\Models;
use CodeIgniter\Model;

class M_Rak extends Model
{
    protected $table = 'tbl_rak';
    protected $primaryKey = 'id_rak';
    protected $allowedFields = ['nama_rak', 'lokasi_rak', 'is_delete_rak', 'created_at', 'updated_at'];

    public function getDataRak($where = false)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        if ($where !== false) $builder->where($where);
        $builder->orderBy('nama_rak', 'ASC');
        return $builder->get();
    }
}