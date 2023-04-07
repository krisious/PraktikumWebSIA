<html>
    <body>
        <?php
            // $produk = array("Sabun", "Detergen", "Pewangi");
            $produk = array("Sabun", "Detergen", "Pewangi");

            $sabun = 10000;
            $detergen = 9000;
            $pewangi = 5000;

            $jmlsabun = 3;
            $jmldetergen = 1;
            $jmlpewangi = 2;

            $hitungsabun = $sabun * 3;
            $hitungdetergen = $detergen * 1;
            $hitungpewangi = $pewangi * 2;

            $total = $hitungsabun + $hitungdetergen + $hitungpewangi;
        ?>

        <table align="center" border="1px" cellspacing="0" cellpadding="5px" width="60%">
            <tr> 
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <tr>
                <td><?= $produk[0] ?></td>
                <td align="center"><?= $sabun ?></td>
                <td align="center"><?= $jmlsabun ?></td>
                <td align="center"><?= $hitungsabun ?></td>
            </tr>
            <tr>
                <td><?= $produk[1] ?></td>
                <td align="center"><?= $detergen ?></td>
                <td align="center"><?= $jmldetergen ?></td>
                <td align="center"><?= $hitungdetergen ?></td>
            </tr>
            <tr>
                <td><?= $produk[2] ?></td>
                <td align="center"><?= $pewangi ?></td>
                <td align="center"><?= $jmlpewangi ?></td>
                <td align="center"><?= $hitungpewangi ?></td>
            </tr>
            <tr>
                <th align="center" colspan="3">Jumlah</th>
                <td align="center"><?= $total ?></td>
            </tr>
        </table>
    </body>
</html>