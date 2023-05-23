<?php
session_start();

$_SESSION["username"] = "admin";
$_SESSION["password"] = "admin123";

echo 'username = ' . $_SESSION["username"] . '<br>';
echo 'password = ' . $_SESSION["password"] . '<br>';

echo '<br>';

$_SESSION["username"] = "admin";
$_SESSION["password"] = "admin456";

echo 'username = ' . $_SESSION["username"] . '<br>';
echo 'password = ' . $_SESSION["password"] . '<br>';

session_unset();
session_destroy();
?>
