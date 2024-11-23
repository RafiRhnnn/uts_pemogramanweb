<?php
session_start(); // Mulai session

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
        $_SESSION['message'] = "Pesan berhasil dikirim!";
    } else {
        $_SESSION['message'] = "Gagal mengirim pesan. Silakan coba lagi.";
    }

    $stmt_insert->close();

    // Redirect untuk mencegah pengiriman ulang pesan saat refresh
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

// Menampilkan pesan setelah redirect
if (isset($_SESSION['message'])) {
    echo "<script>alert('" . $_SESSION['message'] . "');</script>";
    unset($_SESSION['message']); 
}
?>
