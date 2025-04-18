<?php

namespace App\Controllers;

use App\Models\DataDiriModel;
use CodeIgniter\Controller;

class Mahasiswa extends Controller
{
    public function index()
    {
        $model = new DataDiriModel();
        $data['mahasiswa'] = $model->first();

        return view('data_mahasiswa', $data);
    }
}
