<?php
session_start();
require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    echo "Login gagal!";
}
?>
