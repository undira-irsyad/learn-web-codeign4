<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <style>
      body {
          background-color: #f8f9fa;
      }
      .form-container {
          background: #fff;
          padding: 30px;
          border-radius: 15px;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
          max-width: 600px;
          margin: 50px auto;
      }
      .form-title {
          margin-bottom: 30px;
          text-align: center;
      }
      .form-text {
          font-size: 0.9rem;
          color: #6c757d;
      }
      .text-danger {
          font-size: 0.85rem;
          margin-top: 5px;
      }
      .btn-block {
          width: 100%;
      }
      .btn-space {
          margin-top: 10px;
      }
    
      .custom-green {
          color: #198754; /* Bootstrap's green (same as btn-success) */
      }

      .btn-outline-custom-green {
          border: 1px solid #198754;
          color: #198754;
          background-color: transparent;
      }

      .btn-outline-custom-green:hover {
          background-color: #198754;
          color: #fff;
      }
</style>
  </style>
</head>
<body>

<div class="container">
  <div class="form-container">
    <h2 class="form-title">Tambah Data</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('post/save') ?>" method="post">
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="<?= set_value('title') ?>">
            <?php if(isset($validation) && $validation->hasError('title')): ?>
                <div class="text-danger"><?= $validation->getError('title') ?></div>
            <?php endif; ?>
            <div class="form-text">Max 128 karakter, jika lebih akan muncul pesan.</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="4"><?= set_value('content') ?></textarea>
            <?php if(isset($validation) && $validation->hasError('content')): ?>
                <div class="text-danger"><?= $validation->getError('content') ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Email Publisher</label>
            <input type="text" name="publisher" class="form-control" value="<?= set_value('publisher') ?>">
            <?php if(isset($validation) && $validation->hasError('publisher')): ?>
                <div class="text-danger"><?= $validation->getError('publisher') ?></div>
            <?php endif; ?>
            <div class="form-text">Harus menggunakan format email.</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
            <?php if(isset($validation) && $validation->hasError('password')): ?>
                <div class="text-danger"><?= $validation->getError('password') ?></div>
            <?php endif; ?>
            <div class="form-text">Minimal 6 karakter, mengandung huruf besar & simbol.</div>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-3">Simpan</button>
        <div class="form-text custom-green">Sudah memiliki akun?</div>
        <a href="<?= base_url('post/login') ?>" class="btn btn-outline-custom-green btn-block">Login</a>
    </form>
  </div>
</div>

<!-- footer -->
<?= $this->include('layout/footer') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
