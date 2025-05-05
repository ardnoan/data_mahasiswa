<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mahasiswa";

// Koneksi ke MySQL
$conn = mysqli_connect($host, $user, $pass);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Cek apakah database sudah ada
$db_check = mysqli_query($conn, "SHOW DATABASES LIKE '$db'");
if (mysqli_num_rows($db_check) == 0) {
    // Buat database jika belum ada
    mysqli_query($conn, "CREATE DATABASE $db");
}

// Pilih database
mysqli_select_db($conn, $db);

// Cek apakah tabel users sudah ada
$tabel_users = mysqli_query($conn, "SHOW TABLES LIKE 'users'");
if (mysqli_num_rows($tabel_users) == 0) {
    // Buat tabel users jika belum ada
    $query_users = "CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($conn, $query_users);
}

// Cek apakah tabel mahasiswa sudah ada
$tabel_mahasiswa = mysqli_query($conn, "SHOW TABLES LIKE 'mahasiswa'");
if (mysqli_num_rows($tabel_mahasiswa) == 0) {
    // Buat tabel mahasiswa jika belum ada
    $query_mahasiswa = "CREATE TABLE mahasiswa (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(100) NOT NULL,
        nim VARCHAR(20) NOT NULL UNIQUE,
        jurusan VARCHAR(50),
        angkatan YEAR,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($conn, $query_mahasiswa);
}