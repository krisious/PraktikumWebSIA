<html>
    <body>
        <?php 
            for($i = 1; $i <= 10; $i++) {
                for($j = 0; $j < $i; $j++) {
                    echo "_";
                }
                for($bintang = 10; $bintang >= $i; $bintang--) {
                    if($bintang % 2) {
                        echo "<font color='red'>*</font>";
                    } else {
                        echo "*";
                    }
                }
                echo "<br>";
            }
        ?>  
    </body>
</html>