<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'iuran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['keterangan', 'tanggal', 'bulan', 'tahun', 'jumlah', 'warga_id'];
    
    public function view_by_month($month, $year){
        return $this->db->table('iuran');
        $this->db->where('MONTH(bulan)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tahun)', $year); // Tambahkan where tahun
            
        return $this->db->get('iuran')->result(); // Tampilkan data iuran sesuai bulan dan tahun yang diinput oleh user pada filter
    }
        
    public function view_by_year($year){
        return $this->db->table('iuran');
        $this->db->where('YEAR(tahun)', $year); // Tambahkan where tahun
            
        return $this->db->get('iuran')->result(); // Tampilkan data iuran sesuai tahun yang diinput oleh user pada filter
    }
}