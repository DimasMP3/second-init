<?php
namespace App\Controllers;
use App\Models\M_Rak;

class Rak extends BaseController
{
    public function master_data_rak()
    {
        $model = new M_Rak;
        $data['data_rak'] = $model->getDataRak(['is_delete_rak' => '0'])->getResultArray();
        $data['web_title'] = "Master Data Rak";

        echo view('Backend/Template/header', $data);
        echo view('Backend/Template/sidebar', $data);
        echo view('Backend/MasterRak/master-data-rak', $data);
        echo view('Backend/Template/footer', $data);
    }

    public function input_data_rak()
    {
        $data['web_title'] = "Input Data Rak";
        return view('Backend/MasterRak/input-rak', $data);
    }

    public function simpan_data_rak()
    {
        $model = new M_Rak;
        $data = [
            'nama_rak' => $this->request->getPost('nama'),
            'lokasi_rak' => $this->request->getPost('lokasi'),
            'is_delete_rak' => '0',
            'created_at' => date("Y-m-d H:i:s")
        ];
        $model->insert($data);
        session()->setFlashdata('success', 'Data Rak Berhasil Ditambahkan!');
        return redirect()->to(base_url('admin/master-data-rak'));
    }

    public function edit_data_rak($id)
    {
        $model = new M_Rak;
        $data['data_rak'] = $model->find($id);
        $data['web_title'] = "Edit Data Rak";
        return view('Backend/MasterRak/edit-rak', $data);
    }

    public function update_rak()
    {
        $model = new M_Rak;
        $id = $this->request->getPost('id');
        $data = [
            'nama_rak' => $this->request->getPost('nama'),
            'lokasi_rak' => $this->request->getPost('lokasi'),
            'updated_at' => date("Y-m-d H:i:s")
        ];
        $model->update($id, $data);
        session()->setFlashdata('success', 'Data Rak Berhasil Diperbaharui!');
        return redirect()->to(base_url('admin/master-data-rak'));
    }

    public function hapus_data_rak($id)
    {
        $model = new M_Rak;
        $data = [
            'is_delete_rak' => '1',
            'updated_at' => date("Y-m-d H:i:s")
        ];
        $model->update($id, $data);
        session()->setFlashdata('success', 'Data Rak Berhasil Dihapus!');
        return redirect()->to(base_url('admin/master-data-rak'));
    }
}