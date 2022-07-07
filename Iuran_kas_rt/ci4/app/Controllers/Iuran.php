<?php

namespace App\Controllers;

use App\Models\IuranModel;

class Iuran extends BaseController
{
    public function index()
    {   
        $title = 'Iuran Kas Warga';
        $q = $this->request->getVar('q') ?? '';
        $model = new IuranModel();
        $data = [
            'title' => $title,
            'q' => $q,
            'iuran' => $model->join('warga', 'warga.warga_id=iuran.warga_id')->like('nama', $q)->paginate(4),
            'pager' => $model->pager,
        ];        

        return view('iuran/index', $data);
    }
    public function admin_index()
    {
        $title = 'Iuran Kas Warga';
        $q = $this->request->getVar('q') ?? '';
        $model = new IuranModel;
        $data = [
            'title' => $title,
            'q' => $q,
            'iuran' => $model->join('warga', 'warga.warga_id=iuran.warga_id')->like('nama', $q)->paginate(4),
            'pager' => $model->pager,
        ];

        return view('iuran/admin_index', $data);
    }
    public function add()
    {
         // validasi data
         $validation = \Config\Services::validation();
         $validation->setRules(['warga_id' => 'required']);
         $isDataValid = $validation->withRequest($this->request)->run();
 
         if($isDataValid)
         {
             $iuran = new IuranModel();
             $iuran->insert([
                 'keterangan' => $this->request->getPost('keterangan'),
                 'tanggal' => $this->request->getPost('tanggal'),
                 'bulan' => $this->request->getPost('bulan'),
                 'tahun' => $this->request->getPost('tahun'),
                 'jumlah' => $this->request->getPost('jumlah'),
                 'warga_id' => $this->request->getPost('warga_id'),
             ]);
             return redirect('admin/iuran');
         }
         $title = 'Tambah Iuran Kas Warga';
         return view('iuran/form_add', compact('title'));
    }
    public function edit($id)
    {
        $iuran = new IuranModel();

        // validasi data
        $validation = \Config\Services::validation();
        $validation->setRules(['warga_id' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid)
        {
            $iuran->update($id, [
                'keterangan' => $this->request->getPost('keterangan'),
                'tanggal' => $this->request->getPost('tanggal'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'jumlah' => $this->request->getPost('jumlah'),
                'warga_id' => $this->request->getPost('warga_id'),
            ]);
            return redirect('admin/iuran');
        }
        // ambil data lama
        $data = $iuran->where('id', $id)->first();
        $title = "Ubah Iuran Kas Warga";
        return view('iuran/form_edit', compact('title', 'data'));
    }
    public function delete($id)
    {
        $iuran = new IuranModel();
        $iuran->delete($id);

        return redirect('admin/iuran');
    }
}