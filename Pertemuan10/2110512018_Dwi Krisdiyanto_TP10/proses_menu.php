<?php
$name = $_POST['name'];
$menu = $_POST['menu'];

$purchased = 0;
foreach ($_POST['menu'] as $key => $value) {
    $purchased += $value;
}

$discount = 0.10;
if ($purchased == 13000) {
    $discount_price = $purchased * $discount;
    $final_price = $purchased - $discount_price;
}
?>

<html>

<head>
    <title>Print Pesanan</title>
</head>

<body>
    <?php
    echo "<h1>Total Harga: $purchased</h1>";

    if (!empty($menu)) {
        echo "<h2>Pesanan Anda : </h2>";
        echo "<ul>";
        foreach ($_POST['menu'] as $key => $value) {
            echo "<li>$key : $value</li>";
        }

        echo "</ul>";
    }

    if ($purchased < 7000) {
        echo "<h2>Selamat Makan $name, by Mamah Dedeh</h2>";
    } elseif ($purchased >= 7000 && $purchased < 13000) {
        echo "<h2>Hi, $name</h2>";
        echo "<h1>Bonus : </h1>";
        echo "<ul>";
        echo "<li>Minuman Gratis: Teh Manis Dingin</li>";
        echo "<ul>";
    } elseif ($purchased == 13000) {
        echo "<h2>Hi, $name</h2>";
        echo "<h1>Bonus : </h1>";
        echo "<ul>";
        echo "<li>Minuman Gratis: Teh Manis Dingin</li>";
        echo "<li>Diskon : $discount_price</li>";
        echo "<li>Harga Sekarang : $final_price</li>";
        echo "<ul>";
    }
    ?>

</body>

</html>