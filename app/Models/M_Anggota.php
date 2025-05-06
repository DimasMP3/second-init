<?php
namespace App\Models;
use CodeIgniter\Model;

class M_Anggota extends Model
{
    protected $table = 'tbl_anggota';
    protected $primaryKey = 'id_anggota';
    protected $allowedFields = ['nama_anggota', 'alamat_anggota', 'no_hp_anggota', 'is_delete_anggota', 'created_at', 'updated_at'];

    public function getDataAnggota($where = false)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        if ($where !== false) $builder->where($where);
        $builder->orderBy('nama_anggota', 'ASC');
        return $builder->get();
    }
}