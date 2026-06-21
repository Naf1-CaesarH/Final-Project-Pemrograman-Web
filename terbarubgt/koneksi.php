<?php
// koneksi.php

$host = "localhost";
$username = "root"; // Default username bawaan XAMPP
$password = ""; // Default password bawaan XAMPP biasanya kosong
$database = "portal_desa_digital"; // Sesuaikan dengan nama database di phpMyAdmin

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Mengecek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
