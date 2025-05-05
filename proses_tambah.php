<?php
require 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];

$query = "INSERT INTO mahasiswa (nama, nim, jurusan, angkatan) VALUES ('$nama', '$nim', '$jurusan', '$angkatan')";
mysqli_query($conn, $query);
header("Location: dashboard.php");
?>
