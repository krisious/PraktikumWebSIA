<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'rental_kansaja';

// Create Connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check Connection
if (!$conn) {
    die('Koneksi Gagal : ' . mysqli_connect_error());
}
// echo 'Koneksi Berhasil';    
?>
