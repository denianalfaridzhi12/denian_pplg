<?php
include 'config.php';
session_start();

$error = "";

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']); // Menggunakan MD5 sesuai permintaan

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Blue System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Warna biru keputihan (Alice Blue) */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border: none;
            border-radius: 1rem;
            background: #ffffff;
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 0.6rem;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-control {
            border-radius: 0.5rem;
            border: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-4">
        <h3 class="text-primary fw-bold">Selamat Datang</h3>
        <p class="text-muted small">Silakan login ke akun Anda</p>
    </div>

    <?php if($error): ?>
        <div class="alert alert-danger py-2 text-center" style="font-size: 14px;">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="mb-3">
            <label class="form-label small fw-bold text-secondary">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
        </div>
        <div class="mb-3">
            <label class="form-label small fw-bold text-secondary">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>
        <div class="d-grid gap-2 mt-4">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </form>
    
    <div class="text-center mt-3">
        <small class="text-muted">Lupa password? Hubungi Admin</small>
    </div>
</div>

</body>
</html>