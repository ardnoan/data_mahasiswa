CREATE DATABASE db_mahasiswa;
USE db_mahasiswa;

-- Tabel user (untuk login)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Tabel mahasiswa
CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE,
    jurusan VARCHAR(50),
    angkatan YEAR
);
