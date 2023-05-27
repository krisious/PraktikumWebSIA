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
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
  <div class="container text-center">
    <div class="row home-container">
      <div class="col-md welcome-text">
        <h4>Selamat datang <?php echo $_SESSION['nama']; ?></h4>
      </div>
      <div class="col-md logout-container">
        <a href="logout.php">
          <button type="button" class="btn btn-outline-dark">Logout</button>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col tabel-buku">
        <?php
        include('config.php');
        $sql = 'SELECT buku.id_buku, buku.judul, buku.foto, buku.nama_file, buku.isbn, buku.thn_terbit, buku.harga, buku.stok, publisher.id_publisher, publisher.nama_publisher, penulis.id_penulis, penulis.nama_penulis
        FROM ((buku
        INNER JOIN publisher ON buku.publisher = publisher.id_publisher)
        INNER JOIN penulis ON buku.penulis = penulis.id_penulis)
        ORDER BY buku.id_buku DESC';
        $result = mysqli_query($conn, $sql);

        if (!$result) {
          die('Could not get data: ' . mysqli_error($conn));
        }

        echo "<a href='form_upload.php'><button type='button' class='btn btn-outline-primary tambah-button'>+ Tambah Data</button></a>";
        echo "<br><br>";

        echo "<table class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>Nomor</th>";
        echo "<th scope='col'>Judul</th>";
        echo "<th scope='col'>Foto</th>";
        echo "<th scope='col'>ISBN</th>";
        echo "<th scope='col'>Tahun Terbit</th>";
        echo "<th scope='col'>Harga</th>";
        echo "<th scope='col'>Stok</th>";
        echo "<th scope='col'>Publisher</th>";
        echo "<th scope='col'>Penulis</th>";
        echo "<th scope='col' colspan='2'>Aksi</th>";
        echo "</tr>";
        echo "</thead>";

        $i = 1;
        echo "<tbody class='table-group-divider'>";
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $i . "</td>";
          echo "<td>" . $row['judul'] . "</td>";
          echo '<td>
            <img width="100px" src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '"/>
          </td>';
          echo "<td>" . $row['isbn'] . "</td>";
          echo "<td>" . $row['thn_terbit'] . "</td>";
          echo "<td>" . $row['harga'] . "</td>";
          echo "<td>" . $row['stok'] . "</td>";
          echo "<td>" . $row['nama_publisher'] . "</td>";
          echo "<td>" . $row['nama_penulis'] . "</td>";
          echo "<td> 
            <a href='download.php?file_name={$row['nama_file']}'>
              <button type='button' class='btn btn-success'>Download</button>
            </a>
          </td>";
          echo "<td>
            <a href='delete.php?judul_buku={$row['judul']}&id_buku={$row['id_buku']}'>
              <button type='button' class='btn btn-danger'>Delete</button>
            </a>
          </td>";
          echo "</tr>";
          $i++;
        }
        echo "</tbody>";

        echo "</table>";
        mysqli_close($conn);
        ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>


</html>