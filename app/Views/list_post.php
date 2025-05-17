<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Daftar Post</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <style>
      body {
          background-color: #ffffff;
          margin: 0;
          padding: 0;
      }
      h2 {
          text-align: center;
          margin: 30px 0;
          font-weight: bold;
      }
      .table-container {
          padding: 0 30px 50px;
      }
      .table th, .table td {
          vertical-align: middle;
          text-align: center;
      }
      .table {
          border-collapse: separate;
          border-spacing: 0 0.5rem;
      }
      .table thead th {
          background-color: #0d6efd;
          color: #fff;
          border: none;
      }
      .table tbody tr {
          background: #ffffff;
          box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      }
      .table tbody tr:hover {
          background-color: #f1f1f1;
      }
      .btn-primary {
          border-radius: 8px;
      }
      .action-bar {
          display: flex;
          justify-content: flex-end;
          padding: 0 30px 20px;
      }
  </style>
</head>
<body>

<h2>Daftar Data Post</h2>

<div class="action-bar">
  <a href="<?= base_url('post/create') ?>" class="btn btn-primary">Tambah Data Baru</a>
</div>

<div class="table-container">
  <table class="table table-borderless align-middle">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Content</th>
        <th>Publisher</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
      <?php if(!empty($posts)) : ?>
        <?php $no=1; foreach($posts as $post) : ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($post['title']) ?></td>
            <td><?= esc($post['content']) ?></td>
            <td><?= esc($post['publisher']) ?></td>
            <td><?= esc($post['created_at']) ?></td>
          </tr>
        <?php endforeach ?>
      <?php else : ?>
        <tr>
          <td colspan="5">Belum ada data.</td>
        </tr>
      <?php endif ?>
    </tbody>
  </table>
</div>
<footer class="footer mt-auto py-2 border-top" style="background-color: #f8f9fa; position: fixed; bottom: 0; width: 100%;">
  <div class="container text-center">
    <small>
      Created By: 
      <a href="http://localhost:8080/mahasiswa" class="text-decoration-none">Irsyad</a>
    </small>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
