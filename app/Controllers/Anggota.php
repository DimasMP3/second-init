<?php
namespace App\Controllers;
use App\Models\M_Anggota;

class Anggota extends BaseController
{
    public function master_data_anggota()
    {
        $model = new M_Anggota;
        $data['data_anggota'] = $model->getDataAnggota(['is_delete_anggota' => '0'])->getResultArray();
        $data['web_title'] = "Master Data Anggota";

        echo view('Backend/Template/header', $data);
        echo view('Backend/Template/sidebar', $data);
        echo view('Backend/MasterAnggota/master-data-anggota', $data);
        echo view('Backend/Template/footer', $data);
    }

    public function input_data_anggota()
    {
        $data['web_title'] = "Input Data Anggota";
        return view('Backend/MasterAnggota/input-anggota', $data);
    }

    public function simpan_data_anggota()
    {
        $model = new M_Anggota;
        $data = [
            'nama_anggota' => $this->request->getPost('nama'),
            'alamat_anggota' => $this->request->getPost('alamat'),
            'no_hp_anggota' => $this->request->getPost('no_hp'),
            'is_delete_anggota' => '0',
            'created_at' => date("Y-m-d H:i:s")
        ];
        $model->insert($data);
        session()->setFlashdata('success', 'Data Anggota Berhasil Ditambahkan!');
        return redirect()->to(base_url('admin/master-data-anggota'));
    }

    public function edit_data_anggota($id)
    {
        $model = new M_Anggota;
        $data['data_anggota'] = $model->find($id);
        $data['web_title'] = "Edit Data Anggota";
        return view('Backend/MasterAnggota/edit-anggota', $data);
    }

    public function update_anggota()
    {
        $model = new M_Anggota;
        $id = $this->request->getPost('id');
        $data = [
            'nama_anggota' => $this->request->getPost('nama'),
            'alamat_anggota' => $this->request->getPost('alamat'),
            'no_hp_anggota' => $this->request->getPost('no_hp'),
            'updated_at' => date("Y-m-d H:i:s")
        ];
        $model->update($id, $data);
        session()->setFlashdata('success', 'Data Anggota Berhasil Diperbaharui!');
        return redirect()->to(base_url('admin/master-data-anggota'));
    }

    public function hapus_data_anggota($id)
    {
        $model = new M_Anggota;
        $data = [
            'is_delete_anggota' => '1',
            'updated_at' => date("Y-m-d H:i:s")
        ];
        $model->update($id, $data);
        session()->setFlashdata('success', 'Data Anggota Berhasil Dihapus!');
        return redirect()->to(base_url('admin/master-data-anggota'));
    }
}