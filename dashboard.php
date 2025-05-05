<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<a href="tambah.php">Tambah Mahasiswa</a> | <a href="logout.php">Logout</a>
<table border="1">
<tr><th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Angkatan</th><th>Aksi</th></tr>
<?php $no=1; while($row = mysqli_fetch_assoc($data)): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['nim'] ?></td>
    <td><?= $row['jurusan'] ?></td>
    <td><?= $row['angkatan'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
