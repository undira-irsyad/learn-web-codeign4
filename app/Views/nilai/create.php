<!DOCTYPE html>
<html>
<head>
    <title>Tambah Nilai Siswa</title>
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
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0069d9;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Nilai</h1>
    <form action="/nilai/store" method="post">
        <input type="text" name="nis" placeholder="NIS"><br>
        <input type="text" name="nm_siswa" placeholder="Nama Siswa"><br>
        <input type="number" name="absen" placeholder="Absen"><br>
        <input type="number" name="uts" placeholder="UTS"><br>
        <input type="number" name="tugas" placeholder="Tugas"><br>
        <input type="number" name="uas" placeholder="UAS"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
