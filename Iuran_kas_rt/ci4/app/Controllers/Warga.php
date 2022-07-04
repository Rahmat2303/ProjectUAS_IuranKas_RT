<?php

namespace App\Controllers;

use App\Models\WargaModel;

class Warga extends BaseController
{
    public function index()
    {
        $title = 'Data Warga';
        $q = $this->request->getVar('q') ?? '';
        $model = new WargaModel();
        $data = [
            'title' => $title,
            'q' => $q,
            'warga' => $model->like('nama', $q)->paginate(2),
            'pager' => $model->pager,
        ];

        return view('warga/index', $data);
    }
    public function admin_index()
    {
        $title = 'Data Warga';
        $q = $this->request->getVar('q') ?? '';
        $model = new WargaModel();
        $data = [
            'title' => $title,
            'q' => $q,
            'warga' => $model->like('nama', $q)->paginate(2),
            'pager' => $model->pager,
        ];

        return view('warga/admin_index', $data);
    }
    public function add()
    {
        // validasi data
        $validation = \Config\Services::validation();
        $validation->setRules(['nik' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid)
        {
            $warga = new WargaModel();
            $warga->insert([
                'nik' => $this->request->getPost('nik'),
                'nama' => $this->request->getPost('nama'),
                'kelamin' => $this->request->getPost('kelamin'),
                'alamat' => $this->request->getPost('alamat'),
                'no_rumah' => $this->request->getPost('no_rumah'),
                'status' => $this->request->getPost('status'),
            ]);
            return redirect('admin/warga');
        }
        $title = 'Tambah Data Warga';
        return view('warga/form_add', compact('title'));
    }
    public function edit($warga_id)
    {
        $warga = new WargaModel();

        // validasi data
        $validation = \Config\Services::validation();
        $validation->setRules(['nik' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid)
        {
            $warga->update($warga_id, [
                'nik' => $this->request->getPost('nik'),
                'nama' => $this->request->getPost('nama'),
                'kelamin' => $this->request->getPost('kelamin'),
                'alamat' => $this->request->getPost('alamat'),
                'no_rumah' => $this->request->getPost('no_rumah'),
                'status' => $this->request->getPost('status'),
            ]);
            return redirect('admin/warga');
        }
        // ambil data lama
        $data = $warga->where('warga_id', $warga_id)->first();
        $title = "Ubah Data Warga";
        return view('warga/form_edit', compact('title', 'data'));
    }
    public function delete($warga_id)
    {
        $warga = new WargaModel();
        $warga->delete($warga_id);

        return redirect('admin/warga');
    }
}