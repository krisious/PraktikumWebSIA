<html>
    <body>
        <?php
            echo "Selamat";

            $nama = "Dwi";
            
            echo "<br/>";
            echo "Nama saya <b>" . $nama . "</b>";

            $barang = "televisi";


        ?>

        <p>
            <?php
                echo $barang;
            ?>
        </p>
        <p><?= $barang; ?></p>
    </body>
</html>