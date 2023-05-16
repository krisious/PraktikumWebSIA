<?php
$nama = "";
$username = "";
$password = "";

$ErrorNama = "";
$ErrorUser = "";
$ErrorPass = "";

$notifBerhasil = "";

if (isset($_POST['submit'])) {
    $nama = trim($_POST['nama']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // echo "Nama : " . $nama . "<br>";
    // echo "Username : " . $username . "<br>";
    // echo "Password : " . $password . "<br>";

    if (empty($nama)) {
        $ErrorNama = "<font color='red'>Nama belum diisi!!</font>";
    }
    if (empty($username)) {
        $ErrorUser = "<font color='red'>Username belum diisi!!</font>";
    }
    if (empty($password)) {
        $ErrorPass = "<font color='red'>Password belum diisi!!</font>";
    }

    if (!empty($nama) and !empty($username) and !empty($password)) {
        $notifBerhasil = "<font color='green'>Data telah teregistrasi </font>";
    }
}
?>

<html>

<head>
    <title>Validasi Kosong</title>
</head>

<body>
    <h3>Form Registrasi</h3>
    <form action="validasi_kosong.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
                <td><?= $ErrorNama; ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
                <td><?= $ErrorUser; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
                <td><?= $ErrorPass; ?></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
        <?= $notifBerhasil; ?>
    </form>
</body>

</html>