<?php
include("config.php");

// fungsi PHP untuk menghapus file
$path = "file/";
$id_buku = $_GET['id_buku'];
// hapus data dari table
$query = "DELETE from buku WHERE id_buku=$id_buku";
$result = mysqli_query($conn, $query);
if ($query) {
    // hapus data dari direktori
    unlink($path . $_GET['filename']);
    header("Location: home.php");
} else {
    die("Gagal Menghapus Data");
}
