<?php
require 'koneksi.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
mysqli_query($conn, $query);
header("Location: login.php");
?>
