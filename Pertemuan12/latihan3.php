<?php
$_SESSION["username"] = "admin";
$_SESSION["password"] = "admin";

echo "Session berhasil dibuat" . '<br>';

echo 'username = ' . $_SESSION["username"] . '<br>'; 
echo 'password = ' . $_SESSION["password"] . '<br>'; 

print_r($_SESSION);

?>