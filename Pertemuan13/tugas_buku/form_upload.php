<?php
include('config.php');
$sql_publisher = 'SELECT * FROM publisher ORDER BY nama_publisher ASC';
$result_publisher = mysqli_query($conn, $sql_publisher);

$sql_penulis = 'SELECT * FROM penulis ORDER BY nama_penulis ASC';
$result_penulis = mysqli_query($conn, $sql_penulis);

if (!$result_publisher) {
    die('Could not get data: ' . mysqli_error($conn));
}
if (!$result_penulis) {
    die('Could not get data: ' . mysqli_error($conn));
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md form-buku">
                <h2 class="text-center pt-3 mb-4">Form Upload Buku</h2>

                <form class="form-layout border rounded-4 bg-primary-subtle" method="POST" action="proses_upload.php" enctype="multipart/form-data" class="pt-4">
                    <div class="mb-3">
                        <label for="judul" class="form-label fw-semibold">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" aria-describedby="judulHelp">
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label fw-semibold">Foto</label>
                        <input type="file" class="form-control" name="foto" id="foto" aria-describedby="fotoHelp">
                    </div>

                    <div class="mb-3">
                        <label for="isbn" class="form-label fw-semibold">ISBN</label>
                        <input type="text" class="form-control" name="isbn" id="isbn" aria-describedby="isbnHelp">
                    </div>

                    <div class="mb-3">
                        <label for="thn_terbit" class="form-label fw-semibold">Tahun Terbit</label>
                        <input type="text" class="form-control" name="thn_terbit" id="thn_terbit" aria-describedby="thn_terbitHelp">
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga" aria-describedby="hargaHelp">
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control" name="stok" id="stok" aria-describedby="judulHelp">
                    </div>

                    <div class="mb-3">
                        <label for="publisher" class="form-label fw-semibold">Publisher</label>
                        <select name="publisher" id="publisher" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Publisher</option>
                            <?php
                            while ($row = mysqli_fetch_array($result_publisher)) {
                                echo '<option value="' . $row['id_publisher'] . '">' . $row['nama_publisher'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="penulis" class="form-label fw-semibold">Penulis</label>
                        <select name="penulis" id="penulis" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Penulis</option>
                            <?php
                            while ($row = mysqli_fetch_array($result_penulis)) {
                                echo '<option value="' . $row['id_penulis'] . '">' . $row['nama_penulis'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <?php
                    mysqli_close($conn);
                    ?>
                    <div class="buttons-home">
                        <input class="btn btn-primary btn-home" name="upload" type="submit" value="Upload">
                        <input class="btn btn-warning btn-home" name="cancel" type="reset" value="Reset">
                        <a href='home.php'>
                            <button type='button' class='btn btn-danger btn-home'>Batal</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>