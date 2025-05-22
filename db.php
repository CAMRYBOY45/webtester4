<?php
$host = 'localhost'; // alamat server
$dbname = 'work_life_balance'; // nama database
$username = 'root'; // username MySQL
$password = ''; // password MySQL (default kosong untuk XAMPP)

try {
    // Membuat koneksi ke database MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Menangani error
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage()); // Menampilkan pesan error jika gagal koneksi
}
?>