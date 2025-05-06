<?php
namespace App\Controllers;
use App\Models\M_Kategori;

class Kategori extends BaseController
{
    public function master_data_kategori()
    {
        $model = new M_Kategori;
        $data['data_kategori'] = $model->getDataKategori(['is_delete_kategori' => '0'])->getResultArray();
        $data['web_title'] = "Master Data Kategori";

        echo view('Backend/Template/header', $data);
        echo view('Backend/Template/sidebar', $data);
        echo view('Backend/MasterKategori/master-data-kategori', $data);
        echo view('Backend/Template/footer', $data);
    }

    public function input_data_kategori()
    {
        $data['web_title'] = "Input Data Kategori";
        return view('Backend/MasterKategori/input-kategori', $data);
    }

    public function simpan_data_kategori()
    {
        $model = new M_Kategori;
        $data = [
            'nama_kategori' => $this->request->getPost('nama'),
            'deskripsi_kategori' => $this->request->getPost('deskripsi'),
            'is_delete_kategori' => '0',
            'created_at' => date("Y-m-d H:i:s")
        ];
        $model->insert($data);
        session()->setFlashdata('success', 'Data Kategori Berhasil Ditambahkan!');
        return redirect()->to(base_url('admin/master-data-kategori'));
    }

    public function edit_data_kategori($id)
    {
        $model = new M_Kategori;
        $data['data_kategori'] = $model->find($id);
        $data['web_title'] = "Edit Data Kategori";
        return view('Backend/MasterKategori/edit-kategori', $data);
    }

    public function update_kategori()
    {
        $model = new M_Kategori;
        $id = $this->request->getPost('id');
        $data = [
            'nama_kategori' => $this->request->getPost('nama'),
            'deskripsi_kategori' => $this->request->getPost('deskripsi'),
            'updated_at' => date("Y-m-d H:i:s")
        ];
        $model->update($id, $data);
        session()->setFlashdata('success', 'Data Kategori Berhasil Diperbaharui!');
        return redirect()->to(base_url('admin/master-data-kategori'));
    }

    public function hapus_data_kategori($id)
    {
        $model = new M_Kategori;
        $data = [
            'is_delete_kategori' => '1',
            'updated_at' => date("Y-m-d H:i:s")
        ];
        $model->update($id, $data);
        session()->setFlashdata('success', 'Data Kategori Berhasil Dihapus!');
        return redirect()->to(base_url('admin/master-data-kategori'));
    }
}