<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
            width: 600px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f9f9f9;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #eee;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Profil Mahasiswa</h2>
    <table>
        <tr><th>NIM</th><td><?= esc($mahasiswa['nim']) ?></td></tr>
        <tr><th>Nama</th><td><?= esc($mahasiswa['nama']) ?></td></tr>
        <tr><th>Alamat</th><td><?= esc($mahasiswa['alamat']) ?></td></tr>
        <tr><th>Bahasa Pemrograman</th><td><?= esc($mahasiswa['bahasa']) ?></td></tr>
        <tr><th>Database</th><td><?= esc($mahasiswa['database_penguasaan']) ?></td></tr>
        <tr><th>Konsep Project</th><td><?= esc($mahasiswa['project_konsep']) ?></td></tr>
    </table>
</div>

</body>
</html>
