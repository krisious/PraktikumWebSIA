<?php
setcookie($cookie_name, $cookie_value, time() - 3600);
?>

<html>

<body>
    <?php
    echo "Cookie sudah kadaluarsa";
    ?>
</body>

</html>