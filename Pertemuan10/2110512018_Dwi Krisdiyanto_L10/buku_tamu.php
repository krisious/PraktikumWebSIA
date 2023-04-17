<html>

<head>
    <link rel="stylesheet" href="./styles/style.css">
    <title>Buku Tamu</title>
</head>

<body>
    <marquee>2110512018 - Dwi Krisdiyanto</marquee>
    <h3 class="title">ISI BUKU TAMU</h3>
    <div class="container">
        <form action="proses_buku.php" name="BukuTamu" method="POST" onsubmit="return validateForm()">
            <table cellspacing="0">
                <tr class="input-area">
                    <td class="attribute">Nama</td>
                    <td class="splitter">:</td>
                    <td><input class="" type="text" name="nama"></td>
                </tr>
                <tr class="input-area">
                    <td class="attribute">Jenis Kelamin</td>
                    <td class="splitter">:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
                        <input type="radio" name="jk" value="Perempuan">Perempuan<br>
                    </td>
                </tr>
                <tr class="input-area">
                    <td class="attribute">Program Studi</td>
                    <td class="splitter">:</td>
                    <td>
                        <select name="prodi">
                            <option value="Informatika">Informatika</option>
                            <option value="SI">Sistem Informasi</option>
                            <option value="D3">D3 Sistem Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr class="input-area">
                    <td class="attribute">Hobi</td>
                    <td class="splitter">:</td>
                    <td>
                        <input type="checkbox" name="hobi[]" value="Ngoding">Ngoding<br>
                        <input type="checkbox" name="hobi[]" value="Medsos">Medsos<br>
                        <input type="checkbox" name="hobi[]" value="Tidur">Tidur<br>
                    </td>
                </tr>
                <tr class="input-area">
                    <td class="attribute">Pesan</td>
                    <td class="splitter">:</td>
                    <td>
                        <textarea name="pesan" cols="30" row="5"></textarea>
                    </td>
                </tr>
                <tr class="input-area">
                    <td colspan=3 align="right">
                        <input class="button" type="submit" value="Kirim">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script>
        function validateForm() {
            var nama = document.forms["BukuTamu"]["nama"].value;
            var jk = document.forms["BukuTamu"]["jk"].value;
            var prodi = document.forms["BukuTamu"]["prodi"].value;
            var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
            var pesan = document.forms["BukuTamu"]["pesan"].value;

            var validateString = /^[a-zA-Z]+$/;
            var validasiNumber = /^[0-9]+$/;

            if (nama == "" || !nama.match(validateString)) {
                alert("Nama tidak boleh kosong dan hanya boleh huruf");
                return false;
            } else if (jk == "") {
                alert("Jenis Kelamin tidak boleh kosong");
                return false;
            } else if (prodi == "") {
                alert("Program Studi tidak boleh kosong");
                return false;
            } else if (checkboxes.length == 0) {
                alert("Hobi tidak boleh kosong");
                return false;
            } else if (pesan == "") {
                alert("Pesan tidak boleh kosong");
                return false;
            }
        }
    </script>
</body>

</html>