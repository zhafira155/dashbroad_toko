<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "zhafi";

$dbconnect = mysqli_connect($host, $user, $pass, $db);

if (!$dbconnect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
