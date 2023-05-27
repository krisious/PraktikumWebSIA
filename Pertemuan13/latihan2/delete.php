<?php
include("config.php");

// fungsi PHP untuk menghapus file
$path = "file/";
$id_file = $_GET['id_file'];
// hapus data dari table
$query = "DELETE from upload WHERE id=$id_file";
$result = mysqli_query($conn, $query);
if ($query) {
    // hapus data dari direktori
    unlink($path . $_GET['filename']);
    header("Location: download.php");
} else {
    die("Gagal Menghapus Data");
}
?>