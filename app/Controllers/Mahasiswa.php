<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Mahasiswa extends Controller
{
    public function index()
    {
        // Data Hardcoded
        $data = [
            'nim' => '411222059',
            'nama' => 'IRSYAD',
            'alamat' => 'Limus Nunggal, Cileungsi',
            'bahasa' => 'TS, Java, & Ruby',
            'database' => 'MySQL & PostgreSQL',
        ];

        return view('data_mahasiswa', $data);
    }
}
