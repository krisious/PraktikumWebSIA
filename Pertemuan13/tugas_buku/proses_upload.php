<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="text-center">
    <?php
    include("config.php");

    if (isset($_POST['upload'])) {
        date_default_timezone_set("Asia/Jakarta");
        $tgl = date("Ymd");
        // ambil informasi dari file yang diupload
        $tmp_file = $_FILES['foto']['tmp_name'];
        $nm_file = $_FILES['foto']['name'];
        $ukuran_file = $_FILES['foto']['size'];
        $judul = $_POST['judul'];

        $fotoData = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $fotoProp = getimagesize($_FILES['foto']['tmp_name']);

        $isbn = $_POST['isbn'];
        $tahun_terbit = $_POST['thn_terbit'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $penerbit = $_POST['publisher'];
        $penulis = $_POST['penulis'];
        $size = 10000000; // limit 10 MB

        if ($ukuran_file > $size) {
            echo "<strong>Gagal upload! <br>Ukuran Maksimal 10MB, saat ini ukuran file " . $ukuran_file . "</strong>";
            echo "<a href='form_upload.php'>Upload ulang</a>";
            exit();
        } else {
            if ($nm_file) {
                $dir = "file/$nm_file";
                move_uploaded_file($tmp_file, $dir);

                $sql = "INSERT INTO buku(judul, foto, nama_file, isbn, thn_terbit, harga, stok, publisher, penulis) VALUES ('$judul', '$fotoData', '$nm_file', '$isbn', '$tahun_terbit', '$harga', '$stok', '$penerbit', '$penulis')";
                $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                echo "<h4 class='text-center'>$judul</h4> <h4 class='text-center'>berhasil di upload!</h4>
                <br>";
                echo "<a href='home.php' class='btn btn-success text-center'>Lihat Data</a>";
            } else {
                echo "<h4 class='text-center'>Gagal upload!</h4><br>";
                echo "<a class='btn btn-danger m-auto' href='form_upload.php'>Upload ulang</a>";
            }
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>