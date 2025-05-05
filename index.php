<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">Sistem Manajemen Data Mahasiswa</div>
            <div class="nav-links">
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            </div>
        </div>
        
        <h2>Selamat Datang di Aplikasi Manajemen Data Mahasiswa</h2>
        <p>Silahkan login untuk mengakses sistem manajemen data mahasiswa atau register jika belum memiliki akun.</p>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn" style="margin-left: 20px;">Register</a>
        </div>
    </div>
</body>
</html>