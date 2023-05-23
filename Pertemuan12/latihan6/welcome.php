<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <h1 class="text-white text-center fw-bold">Selamat datang <?php echo $_SESSION['nama']; ?></h1>
        <h4 class="text-white text-center fw-semibold">Anda berhasil login ke dalam aplikasi.</h4>
        <div class="d-flex justify-content-center mt-4">
            <a href="logout.php">
                <button type="button" class="btn btn-danger btn-lg">Logout</button>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>


</html>