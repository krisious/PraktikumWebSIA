<?php
include("config.php");

// fungsi PHP untuk menghapus file
$path = "file/";
$id = $_GET['id'];

// hapus data dari table
$query = "DELETE from upload WHERE id=$id";
$result = mysqli_query($conn, $query);
if ($result) {
    // hapus data dari direktori
    unlink($path . $_GET['filename']);
    header("Location: download.php");
} else {
    die("Gagal Menghapus Data");
}
?>