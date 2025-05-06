<?php
namespace App\Models;
use CodeIgniter\Model;

class M_Kategori extends Model
{
    protected $table = 'tbl_kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['nama_kategori', 'deskripsi_kategori', 'is_delete_kategori', 'created_at', 'updated_at'];

    public function getDataKategori($where = false)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        if ($where !== false) $builder->where($where);
        $builder->orderBy('nama_kategori', 'ASC');
        return $builder->get();
    }
}