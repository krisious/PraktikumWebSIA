<html>
    <body>
        <?php 
           $jumlahUang = 1575250;
           
           //    pecahan uang
           $p1 = 100000;
           $p2 = 50000;
           $p3 = 20000;
           $p4 = 5000;
           $p5 = 100;
           $p6 = 50;

           // a
           $p1_sisa = $jumlahUang % $p1;
           $a = ($jumlahUang - $p1_sisa) / $p1;
           // b
           $p2_sisa = $p1_sisa % $p2;
           $b = ($p1_sisa - $p2_sisa) / $p2;
           // c
           $p3_sisa = $p2_sisa % $p3;
           $c = ($p2_sisa - $p3_sisa) / $p3;
           // d
           $p4_sisa = $p3_sisa % $p4;
           $d = ($p3_sisa - $p4_sisa) / $p4;
           // e
           $p5_sisa = $p4_sisa % $p5;
           $e = ($p4_sisa - $p5_sisa) / $p5;
           // f
           $p6_sisa = $p5_sisa % $p6;
           $f = ($p5_sisa - $p6_sisa) / $p6;

           echo "Jumlah Rp. 100.000 : ".$a. "<br />";
           echo "Jumlah Rp. 50.000 : ".$b. "<br />";
           echo "Jumlah Rp. 20.000 : ".$c. "<br />";
           echo "Jumlah Rp. 5.000 : ".$d. "<br />";
           echo "Jumlah Rp. 100 : ".$e. "<br />";
           echo "Jumlah Rp. 50 : ".$f. "<br />";      
        ?>
    </body>
</html>

<!-- 
    Nama : Dwi Krisdiyanto
    NIM : 2110512018
    Mata Kuliah/Kelas : Praktikum Pemrograman Web/A
 -->