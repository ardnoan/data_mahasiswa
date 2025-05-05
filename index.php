<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: views/dashboard.php");
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
                <a href="views/login.php">Login</a>
                <a href="views/register.php">Register</a>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px; text-transform: none; font-size: 12px;">
            <h2>Silahkan login untuk mengakses sistem manajemen data mahasiswa atau register jika belum memiliki akun.</h2>
        </div>
    </div>
</body>
</html>