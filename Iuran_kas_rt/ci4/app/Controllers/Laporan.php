<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaporanModel;

class Laporan extends BaseController
{
    public function index(){
    

    if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
        $filter = $_GET['filter']; // Ambil data filder yang dipilih user
        if($filter == '1'){ // Jika filter nya 1 (per bulan)
            $model = new LaporanModel();
            $bulan = $_GET['bulan_input'];
            $tahun = $_GET['tahun_input'];
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
            $label = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
            $laporan = $model->view_by_month($bulan, $tahun);
            dd($laporan);
        } else{ // Jika filter nya 2 (per tahun)
            $model = new LaporanModel();
            $tahun = $_GET['tahun_input'];
            $label = 'Data laporan Tahun '.$tahun;
            $laporan = $model->view_by_year($tahun);
            dd($laporan);
        }
    }else{ // Jika user tidak mengklik tombol tampilkan
        $label = 'Semua Data Transaksi';
        $model = new LaporanModel();
        $laporan = $model->findAll(); 
        $result = $model->select('SUM(jumlah) AS total')->first();
        $total_laporan = $result['total'];
    }
    $data = [
        'laporan' => $laporan,
        'title' => 'Laporan Kas Warga',
        'label' => $label,
    ];

    return view('laporan/laporan.php', $data);
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