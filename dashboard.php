<?php
session_start();
include 'config.php';

// Proteksi Halaman: Jika belum login, dialihkan ke login.php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Blue System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --bg-alice: #f0f8ff;
            --white: #ffffff;
            --blue-primary: #007bff;
            --text-gray: #6c757d;
        }

        body {
            background-color: var(--bg-alice);
            font-family: 'Segoe UI', Roboto, sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background: var(--white);
            border-right: 1px solid rgba(0, 123, 255, 0.1);
        }

        .nav-link {
            color: var(--text-gray);
            padding: 12px 20px;
            display: block;
            text-decoration: none;
            transition: 0.3s;
            font-weight: 500;
        }

        .nav-link:hover, .nav-link.active {
            background: var(--bg-alice);
            color: var(--blue-primary);
            border-left: 4px solid var(--blue-primary);
        }

        /* Content */
        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        .top-navbar {
            background: var(--white);
            padding: 15px 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            margin-bottom: 30px;
        }

        .card-stat {
            border: none;
            border-radius: 15px;
            background: var(--white);
            padding: 20px;
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.05);
            transition: 0.3s;
        }

        .card-stat:hover {
            transform: translateY(-5px);
        }

        .icon-box {
            width: 45px;
            height: 45px;
            background: var(--bg-alice);
            color: var(--blue-primary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="sidebar d-none d-lg-block">
    <div class="p-4 text-center">
        <h4 class="text-primary fw-bold">BLUE<span class="text-dark opacity-50">CORE</span></h4>
    </div>
    <nav class="mt-3">
        <a href="#" class="nav-link active"><i class="bi bi-house-door me-2"></i> Home</a>
        <a href="#" class="nav-link"><i class="bi bi-people me-2"></i> Pengguna</a>
        <a href="#" class="nav-link"><i class="bi bi-bar-chart me-2"></i> Laporan</a>
        <a href="#" class="nav-link"><i class="bi bi-gear me-2"></i> Pengaturan</a>
        <hr class="mx-3">
        <a href="logout.php" class="nav-link text-danger"><i class="bi bi-box-arrow-left me-2"></i> Logout</a>
    </nav>
</div>

<div class="main-content">
    <div class="top-navbar d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold text-secondary">Dashboard Overview</h5>
        <div class="d-flex align-items-center">
            <span class="me-3 text-muted">Halo, <strong><?php echo $_SESSION['username']; ?></strong></span>
            <img src="https://ui-avatars.com/api/?name=<?php echo $_SESSION['username']; ?>&background=0d6efd&color=fff" class="rounded-circle shadow-sm" width="40">
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card-stat d-flex align-items-center justify-content-between">
                <div>
                    <p class="text-muted small mb-1">Total Users</p>
                    <h3 class="fw-bold mb-0">1,250</h3>
                </div>
                <div class="icon-box"><i class="bi bi-people-fill"></i></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-stat d-flex align-items-center justify-content-between">
                <div>
                    <p class="text-muted small mb-1">Data Input</p>
                    <h3 class="fw-bold mb-0">456</h3>
                </div>
                <div class="icon-box"><i class="bi bi-journal-text"></i></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-stat d-flex align-items-center justify-content-between">
                <div>
                    <p class="text-muted small mb-1">Pesan Masuk</p>
                    <h3 class="fw-bold mb-0">12</h3>
                </div>
                <div class="icon-box"><i class="bi bi-envelope-open"></i></div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
        <h5 class="fw-bold mb-4">Aktivitas Terakhir</h5>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Waktu</th>
                        <th>Aktivitas</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td>07 April 2026</td>
                        <td>Login ke sistem</td>
                        <td><span class="badge bg-success rounded-pill">Success</span></td>
                    </tr>
                    <tr>
                        <td>#002</td>
                        <td>07 April 2026</td>
                        <td>Update profil</td>
                        <td><span class="badge bg-primary rounded-pill">Updated</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>