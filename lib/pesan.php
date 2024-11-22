<?php
session_start(); // Mulai session

// Ambil data dari session
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
// Ambil data dari session
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

// Variabel untuk menampung pesan
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pesan'])) {
    $pesan = $_POST['pesan'];

    // Insert pesan ke database
    $sql_insert = "INSERT INTO pesan (username, email, pesan) VALUES (?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("sss", $username, $email, $pesan);

    if ($stmt_insert->execute()) {
        $message = "Pesan berhasil dikirim!";
    } else {
        $message = "Gagal mengirim pesan. Silakan coba lagi.";
    }

    $stmt_insert->close();
}
?>