<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'db_login';

// Create Connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check Connection
if (!$conn) {
    die('Koneksi Gagal : ' . mysqli_connect_error());
}
// echo 'Koneksi Berhasil';    
?>