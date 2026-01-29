<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
echo "Welcome to My Website<br>";
echo "FASILKOM<br>";
echo "Nama : Ryan Ferry Ramadhan<br>";
echo "NPM : D1A251001<br>";
echo "Kelas : 1C Karyawan <br>";
echo $_SESSION['session_username'];

?>
