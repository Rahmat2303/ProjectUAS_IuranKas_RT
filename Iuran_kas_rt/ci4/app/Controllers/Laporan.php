<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaporanModel;

class Laporan extends BaseController
{
    public function index(){
        $title = 'Laporan Kas Warga';
        $model = new LaporanModel();
        $laporan = $model->getLaporan();
        $result = $model->select('SUM(jumlah) AS total')->first();
        $total_laporan = $result['total'];

        return view('laporan/laporan.php', compact('total_laporan', 'laporan', 'title'));
}   
    
    
    public function admin_index()
    {
        $title = 'Laporan Kas Warga';
        $model = new LaporanModel();
        $laporan = $model->getLaporan();
        $result = $model->select('SUM(jumlah) AS total')->first();
        $total_laporan = $result['total'];

        return view('laporan/admin_laporan', compact('total_laporan', 'laporan', 'title'));
    }
}