<?php
require 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];

$query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', angkatan='$angkatan' WHERE id=$id";
mysqli_query($conn, $query);
header("Location: dashboard.php");
?>
