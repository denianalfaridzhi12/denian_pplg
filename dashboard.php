<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5 text-center">
    <div class="container bg-white p-5 rounded shadow-sm">
        <h1>Halo, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Anda berhasil login ke sistem bertema biru-putih.</p>
        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
</body>
</html>