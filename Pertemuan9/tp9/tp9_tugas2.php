<html>
    <body>
        <?php 
          $bilangan = 100;
          $pembagi = 3;
          $hasilBagi = number_format($bilangan / $pembagi, 2, '.', '');   
          $sisaBagi = $bilangan % $pembagi;
          echo $bilangan." "."dibagi dengan ".$pembagi." "."adalah"." ".$hasilBagi." "."sisa"." ".$sisaBagi;
        ?>
    </body>
</html>

<!-- 
    Nama : Dwi Krisdiyanto
    NIM : 2110512018
    Mata Kuliah/Kelas : Praktikum Pemrograman Web/A
 -->