<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        a {
            margin-bottom: 15px;
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #218838;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 10px 15px;
            border: 1px solid #ccc;
        }
        th {
            background: #007bff;
            color: white;
        }
        td a {
            color: #007bff;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Daftar Nilai Siswa</h1>
    <a href="/nilai/create">+ Tambah Data</a>
    <table>
        <tr>
            <th>NIS</th><th>Nama</th><th>Absen</th><th>UTS</th><th>Tugas</th><th>UAS</th>
            <th>Nilai Akhir</th><th>Grade</th><th>Status</th><th>Aksi</th>
        </tr>
        <?php foreach($nilai as $row): ?>
        <tr>
            <td><?= $row['nis'] ?></td>
            <td><?= $row['nm_siswa'] ?></td>
            <td><?= $row['absen'] ?></td>
            <td><?= $row['uts'] ?></td>
            <td><?= $row['tugas'] ?></td>
            <td><?= $row['uas'] ?></td>
            <td><?= $row['nilai_akhir'] ?></td>
            <td><?= $row['grade'] ?></td>
            <td><?= $row['status'] ?></td>
            <td>
                <a href="/nilai/edit/<?= $row['no_id'] ?>">Edit</a> |
                <a href="/nilai/delete/<?= $row['no_id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
