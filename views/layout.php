<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Linda Salon Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/AdminLTE-master/src/html/public/css/adminlte.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { background: #f4f6f9; }
    .main-header, .main-sidebar, .content-wrapper, .main-footer { font-family: 'Roboto', sans-serif; }
    .brand-link { font-size: 1.2rem; font-weight: 700; letter-spacing: 1px; }
    .sidebar { min-height: 100vh; }
    .content-wrapper { padding: 24px 16px; }
    .content-header { margin-bottom: 16px; }
    .card { box-shadow: 0 2px 8px rgba(0,0,0,0.04); border-radius: 12px; }
    .main-footer { background: #fff; border-top: 1px solid #e0e0e0; }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php if (!empty($_SESSION['user_id']) && $_SESSION['role'] == 1): ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?page=dashboard" class="nav-link">Dashboard</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="?page=logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>
  </nav>
  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="?page=dashboard" class="brand-link">
      <span class="brand-text font-weight-light">LINDA SALON</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item"><a href="?page=dashboard" class="nav-link"><i class="nav-icon fas fa-home"></i> <p>Dashboard</p></a></li>
          <li class="nav-item"><a href="?page=user" class="nav-link"><i class="nav-icon fas fa-users"></i> <p>Data User</p></a></li>
          <li class="nav-item"><a href="?page=product" class="nav-link"><i class="nav-icon fas fa-box"></i> <p>Data Produk</p></a></li>
          <li class="nav-item"><a href="?page=wedding" class="nav-link"><i class="nav-icon fas fa-gift"></i> <p>Data Paket Wedding</p></a></li>
          <li class="nav-item"><a href="?page=booking" class="nav-link"><i class="nav-icon fas fa-calendar"></i> <p>Data Booking</p></a></li>
        </ul>
      </nav>
    </div>
  </aside>
<?php endif; ?>
  <!-- Content -->
  <div class="content-wrapper">
    <section class="content pt-3">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="card">
              <div class="card-body">
                <?php include $content; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Footer -->
  <footer class="main-footer text-center">
    <strong>Linda Salon &copy; <?=date('Y')?>.</strong>
    All rights reserved.
  </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
<script src="/AdminLTE-master/src/html/public/js/adminlte.min.js"></script>
</body>
</html> 