<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<h2>Selamat Datang di Aplikasi Manajemen Mahasiswa</h2>
<p><a href="login.php">Login</a> | <a href="register.php">Register</a></p>
