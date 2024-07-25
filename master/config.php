<?php
// Konfigurasi koneksi database MySQL
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'Healify';

// Buat koneksi ke database
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
