<?php
$username = "root";
$host = "localhost";
$password = "";
$database = "penjualan";
$koneksi = mysqli_connect($host, $username, $password, $database);
mysqli_select_db($koneksi, $database) or die("Koneksi tidak ditemukan");
?>