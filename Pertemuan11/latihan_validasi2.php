<?php
$nama = "";
$username = "";
$password = "";

$ErrorNama = "";
$ErrorUser = "";
$ErrorPass = "";

$notifBerhasil = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($nama)) {
        $ErrorNama = "<p>Nama belum diisi!!</p>";
    }
    if (empty($username)) {
        $ErrorUser = "<p>Username belum diisi!!</p>";
    }
    if (empty($password)) {
        $ErrorPass = "<p>Password belum diisi!!</p>";
    }

    if (!empty($nama) and !empty($username) and !empty($password)) {
        $notifBerhasil = "<p>Data telah teregistrasi </p>";
    }
} 
?>

<html>

<head>
    <title>Hasil Input</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h3>Hasil</h3>
    <?php if (!empty($notifBerhasil)) : ?>
        <?= $notifBerhasil ?>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><?= $username ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><?= $password ?></td>
            </tr>
        </table>
    <?php else : ?>
        <form action="latihan_validasi2.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $nama ?>"></td>
                    <td><?= $ErrorNama; ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" value="<?= $username ?>"></td>
                    <td><?= $ErrorUser; ?></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" value="<?= $password ?>"></td>
                    <td><?= $ErrorPass; ?></td>
                </tr>
                <tr>
                    <td colspan="4"><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    <?php endif; ?>
</body>

</html>