<html>
    <body>
        <?php 
            $saldoAwal = 1000000;
            $bunga = 0.03;
            $bulan = 11;
            $saldoAkhir =  $saldoAwal + ($saldoAwal * $bunga * $bulan);
            echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir. ",-";
        ?>
    </body>
</html>

<!-- 
    Nama : Dwi Krisdiyanto
    NIM : 2110512018
    Mata Kuliah/Kelas : Praktikum Pemrograman Web/A
 -->