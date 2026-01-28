<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
echo "Selamat Anda Berhasil Login<br>";
echo "Welcome to My Website<br>";
echo $_SESSION['session_username'];
?>