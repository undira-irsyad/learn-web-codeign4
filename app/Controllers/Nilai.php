<?php

namespace App\Controllers;
use App\Models\NilaiModel;
use Dompdf\Dompdf;

class Nilai extends BaseController
{
    protected $nilaiModel;

    public function __construct()
    {
        $this->nilaiModel = new NilaiModel();
    }

    public function index()
    {
        $data['nilai'] = $this->nilaiModel->findAll();
        return view('nilai/index', $data);
    }


    public function create()
    {
        return view('nilai/create');
    }

    public function store()
    {
        $model = new NilaiModel();
        $session = session(); // get session instance

        $nis = $this->request->getPost('nis');
        $absen = $this->request->getPost('absen');
        $uts = $this->request->getPost('uts');
        $tugas = $this->request->getPost('tugas');
        $uas = $this->request->getPost('uas');

        // Check for existing NIS
        $existing = $model->where('nis', $nis)->first();
        if ($existing) {
            $session->setFlashdata('error', 'NIS dengan nomor tersebut sudah terdaftar');
            return redirect()->to('/nilai/create')->withInput();
        }

        $nilai_akhir = ($absen + $uts + $tugas + $uas) / 4;
        $grade = $this->hitungGrade($nilai_akhir);
        $status = ($grade == 'D' || $grade == 'E') ? 'Mengulang' : 'Lulus';

        $model->save([
            'nis' => $nis,
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
        $session = session();

        $nis = $this->request->getPost('nis');
        $absen = $this->request->getPost('absen');
        $uts = $this->request->getPost('uts');
        $tugas = $this->request->getPost('tugas');
        $uas = $this->request->getPost('uas');

        // Check if the new NIS is already used by another record
        $existing = $model->where('nis', $nis)->where('no_id !=', $id)->first();
        if ($existing) {
            $session->setFlashdata('error', 'NIS dengan nomor tersebut sudah terdaftar');
            return redirect()->to('/nilai/edit/' . $id)->withInput();
        }

        $nilai_akhir = ($absen + $uts + $tugas + $uas) / 4;
        $grade = $this->hitungGrade($nilai_akhir);
        $status = ($grade == 'D' || $grade == 'E') ? 'Mengulang' : 'Lulus';

        $model->update($id, [
            'nis' => $nis,
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

    public function exportPdf()
    {
        $data['nilai'] = $this->nilaiModel->findAll();

        // Render HTML ke dalam view
        $html = view('nilai/nilai_pdf', $data);

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Atur ukuran dan orientasi halaman
        $dompdf->setPaper('A4', 'landscape');

        // Render PDF
        $dompdf->render();

        // Outputkan PDF ke browser
        $dompdf->stream('laporan_nilai_siswa.pdf', [
            "Attachment" => false // false = tampilkan di browser
        ]);
    }
}
