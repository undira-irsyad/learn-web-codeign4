<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Nilai Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
        }
        form {
            background: white;
            display: inline-block;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input {
            margin: 8px 0;
            padding: 8px;
            width: 250px;
        }
        button {
            padding: 8px 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        .back-link {
            display: inline-block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .error {
            color: red;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Edit Data Nilai</h1>

    <?php if ($session->getFlashdata('error')): ?>
        <div class="error"><?= $session->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="/nilai/update/<?= $nilai['no_id'] ?>" method="post">
        <input type="text" name="nis" value="<?= old('nis', $nilai['nis']) ?>" placeholder="NIS"><br>
        <input type="text" name="nm_siswa" value="<?= old('nm_siswa', $nilai['nm_siswa']) ?>" placeholder="Nama Siswa"><br>
        <input type="number" name="absen" value="<?= old('absen', $nilai['absen']) ?>" placeholder="Absen"><br>
        <input type="number" name="uts" value="<?= old('uts', $nilai['uts']) ?>" placeholder="UTS"><br>
        <input type="number" name="tugas" value="<?= old('tugas', $nilai['tugas']) ?>" placeholder="Tugas"><br>
        <input type="number" name="uas" value="<?= old('uas', $nilai['uas']) ?>" placeholder="UAS"><br>
        <button type="submit">Perbarui</button>
    </form>
    <br>
    <a class="back-link" href="/nilai">← Kembali ke Daftar Nilai</a>
</body>
</html>
