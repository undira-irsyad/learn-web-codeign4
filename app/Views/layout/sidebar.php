<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: "Lato", sans-serif;
      margin: 0;
      padding-bottom: 70px; /* reserve space for fixed footer */
    }

    .sidenav {
      height: 100vh;
      width: 220px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #111;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      color: #fff;
    }

    .sidenav .header-title {
      background-color: #6c757d;
      padding: 15px;
      text-align: center;
      font-weight: bold;
      font-size: 20px;
    }

    .sidenav .nav-links {
      padding-top: 20px;
      flex-grow: 1;
    }

    .sidenav a {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #d1d1d1;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      background-color: #343a40;
      color: #ffffff;
    }

    .sidenav .logout {
      padding: 50px 20px;
    }

    .main {
      margin-left: 220px;
      padding: 20px;
      display: flex;
      justify-content: center;
      min-height: 100vh;
      box-sizing: border-box;
    }

    footer.footer {
      background-color: #f8f9fa;
      position: fixed;
      bottom: 0;
      width: 100%;
      padding: 10px 0;
      border-top: 1px solid #dee2e6;
      z-index: 999;
    }

    @media screen and (max-width: 768px) {
      .sidenav {
        width: 100%;
        height: auto;
        position: relative;
      }

      .main {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidenav">
  <div>
    <div class="header-title d-flex align-items-center justify-content-center gap-2">
      <img src="<?= base_url('images/logoundira.png') ?>" alt="Logo" style="height: 55px;">
    </div>
    <div class="nav-links">
      <a href="<?= base_url('/post/home') ?>">Home</a>
      <a href="<?= base_url('/post/profile') ?>">Profile</a>
    </div>
  </div>
  <div class="logout">
    <a href="<?= base_url('post/logout') ?>" class="btn btn-danger w-100">Logout</a>
  </div>
</div>

<!-- Main Content -->
<div class="main">
  <?= $this->renderSection('content') ?>
</div>

<!-- Footer Include -->
<?= $this->include('layout/footer') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
