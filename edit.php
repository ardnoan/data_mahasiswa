<?php
require 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<form action="proses_edit.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    Nama: <input type="text" name="nama" value="<?= $row['nama'] ?>"><br>
    NIM: <input type="text" name="nim" value="<?= $row['nim'] ?>"><br>
    Jurusan: <input type="text" name="jurusan" value="<?= $row['jurusan'] ?>"><br>
    Angkatan: <input type="number" name="angkatan" value="<?= $row['angkatan'] ?>"><br>
    <button type="submit">Update</button>
</form>
