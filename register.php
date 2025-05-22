<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash password untuk keamanan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO users (fullname, email, password) VALUES (:fullname, :email, :password)";
    $stmt = $pdo->prepare($query);

    // Bind data ke query
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);

    // Eksekusi query dan redirect ke halaman login jika berhasil
    if ($stmt->execute()) {
        header('Location: login.html'); // Arahkan pengguna ke halaman login
    } else {
        echo 'Something went wrong. Please try again.';
    }
}
?>