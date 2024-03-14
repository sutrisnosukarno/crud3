<?php
// Konfigurasi koneksi ke database
$host = "localhost"; // Ganti sesuai dengan host Anda
$username = "root"; // Ganti sesuai dengan username Anda
$password = ""; // Ganti sesuai dengan password Anda
$database = "crud3"; // Ganti sesuai dengan nama database Anda

// Buat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
