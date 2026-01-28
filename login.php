<?php
session_start();
// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
// Data login contoh (nanti bisa dari database)
$user_benar = "admin";
$pass_benar = "12345";
// Validasi
if (($username == "admin" && $password == "12345")) {
    $_SESSION['login'] = true;
    $_SESSION['session_username'] = $username;
    header("Location:dashboard.php");
    exit;
} else {
    echo "<script>
            alert('salah!');
            window.location='index.php';
          </script>";
}