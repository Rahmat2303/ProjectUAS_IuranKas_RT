<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'iuran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['keterangan', 'tanggal', 'bulan', 'tahun', 'jumlah', 'warga_id'];

    public function getLaporan()
    {
        return $this->db->table('iuran')
        ->join('warga', 'warga.warga_id=iuran.warga_id')
        ->get()->getResultArray();
    }
}