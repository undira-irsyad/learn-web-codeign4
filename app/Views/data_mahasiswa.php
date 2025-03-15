<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #ddd;
            padding: 20px;
            border-radius: 8px;
            width: 500px;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: white;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #bbb;
        }
    </style>
</head>
<body>

<div class="container">
    <h2><strong>Data Mahasiswa</strong></h2>
    <table>
        <tr>
            <th>NIM</th>
            <td><?= esc($nim); ?></td>
        </tr>
        <tr>
            <th>Nama</th>
            <td><?= esc($nama); ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?= esc($alamat); ?></td>
        </tr>
        <tr>
            <th>Bahasa Pemrograman</th>
            <td><?= esc($bahasa); ?></td>
        </tr>
        <tr>
            <th>Database</th>
            <td><?= esc($database); ?></td>
        </tr>
    </table>
</div>

</body>
</html>
