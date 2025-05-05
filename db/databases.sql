-- Membuat database
CREATE DATABASE IF NOT EXISTS db_mahasiswa;
USE db_mahasiswa;

-- Tabel users (untuk login)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel mahasiswa
CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE,
    jurusan VARCHAR(50),
    angkatan YEAR,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Data contoh (opsional)
-- INSERT INTO users (username, password) VALUES ('admin', '$2y$10$cFV6lSBn/wLF9L8F1Kw2nOiXcV0QwEfVLGXJmLKP6Wne4t/FYsWMK'); -- Password: admin123
-- INSERT INTO mahasiswa (nama, nim, jurusan, angkatan) VALUES ('John Doe', '12345678', 'Teknik Informatika', 2020);
-- INSERT INTO mahasiswa (nama, nim, jurusan, angkatan) VALUES ('Jane Smith', '87654321', 'Sistem Informasi', 2021);