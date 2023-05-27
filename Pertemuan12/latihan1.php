<?php
$cookie_name = "user";
$cookie_value = "Dwi";
// 86400 = 1 hari
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>

<body>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' belum dibuat!";
    } else {
        echo "Cookie '" . $cookie_name . "' sudah dibuat!<br>";
        echo "Value adalah: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>

</html>