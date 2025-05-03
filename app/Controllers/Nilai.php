<?php

namespace App\Controllers;
use App\Models\NilaiModel;

class Nilai extends BaseController
{
    public function index()
    {
        $model = new NilaiModel();
        $data['nilai'] = $model->findAll();
        return view('nilai/index', $data);
    }

    public function create()
    {
        return view('nilai/create');
    }

    public function store()
    {
        $model = new NilaiModel();
        $absen = $this->request->getPost('absen');
        $uts = $this->request->getPost('uts');
        $tugas = $this->request->getPost('tugas');
        $uas = $this->request->getPost('uas');

        $nilai_akhir = ($absen + $uts + $tugas + $uas) / 4;
        $grade = $this->hitungGrade($nilai_akhir);
        $status = ($grade == 'D' || $grade == 'E') ? 'Mengulang' : 'Lulus';

        $model->save([
            'nis' => $this->request->getPost('nis'),
            'nm_siswa' => $this->request->getPost('nm_siswa'),
            'absen' => $absen,
            'uts' => $uts,
            'tugas' => $tugas,
            'uas' => $uas,
            'nilai_akhir' => $nilai_akhir,
            'grade' => $grade,
            'status' => $status
        ]);

        return redirect()->to('/nilai');
    }

    public function edit($id)
    {
        $model = new NilaiModel();
        $data['nilai'] = $model->find($id);
        return view('nilai/edit', $data);
    }

    public function update($id)
    {
        $model = new NilaiModel();
        $absen = $this->request->getPost('absen');
        $uts = $this->request->getPost('uts');
        $tugas = $this->request->getPost('tugas');
        $uas = $this->request->getPost('uas');

        $nilai_akhir = ($absen + $uts + $tugas + $uas) / 4;
        $grade = $this->hitungGrade($nilai_akhir);
        $status = ($grade == 'D' || $grade == 'E') ? 'Mengulang' : 'Lulus';

        $model->update($id, [
            'nis' => $this->request->getPost('nis'),
            'nm_siswa' => $this->request->getPost('nm_siswa'),
            'absen' => $absen,
            'uts' => $uts,
            'tugas' => $tugas,
            'uas' => $uas,
            'nilai_akhir' => $nilai_akhir,
            'grade' => $grade,
            'status' => $status
        ]);

        return redirect()->to('/nilai');
    }

    public function delete($id)
    {
        $model = new NilaiModel();
        $model->delete($id);
        return redirect()->to('/nilai');
    }

    private function hitungGrade($nilai)
    {
        if ($nilai >= 80) return 'A';
        if ($nilai >= 60) return 'B';
        if ($nilai >= 50) return 'C';
        if ($nilai >= 30) return 'D';
        return 'E';
    }
}
