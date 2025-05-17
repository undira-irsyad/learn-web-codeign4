<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5" style="max-width: 600px;">
  <h3 class="text-center mb-4">Profile</h3>

  <table class="table table-bordered">
    <tr>
      <th>Title</th>
      <td><?= esc($user['title']) ?></td>
    </tr>
    <tr>
      <th>Content</th>
      <td><?= esc($user['content']) ?></td>
    </tr>
    <tr>
      <th>Publisher</th>
      <td><?= esc($user['publisher']) ?></td>
    </tr>
  </table>

  <a href="<?= base_url('post/logout') ?>" class="btn btn-danger w-100">Logout</a>
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
