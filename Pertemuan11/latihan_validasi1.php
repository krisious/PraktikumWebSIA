<html>

<head>
    <link rel="stylesheet" href="./style.css">
    <title>Form Registrasi</title>
</head>

<body>
    <h3>Form Registrasi</h3>
    <form action="latihan_validasi2.php?mode=validasi" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
                <td><?= isset($_GET['ErrorNama']) ? $_GET['ErrorNama'] : '' ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
                <td><?= isset($_GET['ErrorUser']) ? $_GET['ErrorUser'] : '' ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
                <td><?= isset($_GET['ErrorPass']) ? $_GET['ErrorPass'] : '' ?></td>
            </tr>
            <tr>
                <td colspan="4"><input type="submit" name="submit"></td>
            </tr>
        </table>
        <?= isset($_GET['notifBerhasil']) ? $_GET['notifBerhasil'] : '' ?>
    </form>
</body>

</html>