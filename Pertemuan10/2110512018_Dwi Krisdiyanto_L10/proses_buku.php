<?php
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$hobi = $_POST['hobi'];
$pesan = $_POST['pesan'];
?>

<html>

<head>
    <link rel="stylesheet" href="./styles/style.css">
    <title>TAMPILAN BUKU TAMU</title>
</head>

<body>
    <marquee>2110512018 - Dwi Krisdiyanto</marquee>
    <h3 class="title">ISI BUKU TAMU :</h3>
    <table class="result">
        <tr>
            <td class="attribute">Nama</td>
            <td class="splitter">:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td class="attribute">Jenis Kelamin</td>
            <td class="splitter">:</td>
            <td><?php echo $jk; ?></td>
        </tr>
        <tr>
            <td class="attribute">Program Studi</td>
            <td class="splitter">:</td>
            <td><?php echo $prodi; ?></td>
        </tr>
        <tr>
            <td class="attribute" valign="top">Hobi</td>
            <td class="splitter" valign="top">:</td>
            <td>
                <?php
                if (!empty($hobi)) {
                    echo "<ul>";

                    foreach ($hobi as $value) {
                        echo "<li class='list'>$value</li>";
                    }
                    echo "</ul>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="attribute">Pesan</td>
            <td class="splitter">:</td>
            <td><?php echo $pesan; ?></td>
        </tr>
    </table>
</body>

</html>