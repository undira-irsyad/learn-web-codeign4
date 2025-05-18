<!-- app/Views/profile.php -->
<?= $this->extend('layout/sidebar') ?>
<?= $this->section('content') ?>
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
</div>
<?= $this->endSection() ?>
