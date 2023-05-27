<html>

<head>
    <link rel="stylesheet" href="./styles.css">
    <title>Kantin Mamah Dedeh</title>
</head>

<body>
    <h3 class="title">Daftar Menu di Kantin Mamah Dedeh</h3>
    <form action="proses_menu.php" name="KantinMamahDedeh" method="POST" onsubmit="return validateOrder()">
        <table>
            <tr>
                <th>Makanan</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td><input type="checkbox" name="menu[Nasi]" value="2000">Nasi</td>
                <td class="price">Rp. 2000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="menu[Ikan Bakar]" value="3000">Ikan Bakar</td>
                <td class="price">Rp. 3000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="menu[Ayam Bakar]" value="4000">Ayam Bakar</td>
                <td class="price">Rp. 4000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="menu[Sayur Lodeh]" value="2000">Sayur Lodeh</td>
                <td class="price">Rp. 2000</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="menu[Tumis Kangkung]" value="2000">Tumis Kangkung</td>
                <td class="price">Rp. 2000</td>
            </tr>
            <tr>
                <td class="text_input" colspan="2">Nama Anda: <input type="text" name="name"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="button" type="submit" value="Bayar Sekarang"></td>
            </tr>
            <!-- <tr>
                <td colspan="2"><input class="button reset" type="reset" value="Reset"></td>
            </tr> -->
        </table>    
    </form>
    <script>
        function validateOrder() {
            var name = document.forms["KantinMamahDedeh"]["name"].value;
            var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');

            var validateString = /^[a-zA-Z]+$/;

            if (name == "" && !name.match(validateString)) {
                alert("Nama tidak boleh kosong dan hanya boleh huruf");
                return false;
            } else if (checkboxes.length == 0) {
                alert("Menu tidak boleh kosong");
                return false;
            }
        }
    </script>
</body>

</html>