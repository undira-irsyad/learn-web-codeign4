<?= $this->extend('layout/sidebar') ?>
<?= $this->section('content') ?>
<title>Home</title>
<div class="container mt-5 p-4 bg-light rounded shadow-sm" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <div class="text-center">
    <h2 class="fw-semibold mb-3 text-primary">Welcome, <?= esc($user['title']) ?>!</h2>
    <p class="lead text-secondary">
      Website untuk belajar
    </p>
    <hr class="my-1">
  </div>
</div>
<?= $this->endSection() ?>
