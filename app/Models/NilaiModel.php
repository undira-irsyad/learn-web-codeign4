<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    protected $table = 'nilai_siswa';
    protected $primaryKey = 'no_id';
    protected $allowedFields = ['nis', 'nm_siswa', 'absen', 'uts', 'tugas', 'uas', 'nilai_akhir', 'grade', 'status'];
}
