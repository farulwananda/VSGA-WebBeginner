<?php
// Database config
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_laporin";

$conn = mysqli_connect($hostname, $username, $password, $database);

// Cek koneksi
if (!$conn) {
  die("Database Tidak Terhubung : " . mysqli_connect_error());
}
