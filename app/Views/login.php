<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5" style="max-width: 400px;">
  <h3 class="text-center mb-4">Login</h3>

  <?php if(session()->getFlashdata('error')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>

  <form action="<?= base_url('post/loginAuth') ?>" method="post">
      <div class="mb-3">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
      </div>
      <div class="mb-3">
          <label>Password</label>
          <input type="password" name="password" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
      <a href="<?= base_url('post/create') ?>" class="btn btn-success w-100 mt-2">Tambah Data Baru</a>
  </form>
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
