<html>

<head>
    <title></title>
</head>

<body>
    <h3>Form Input Data</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <h3>Hasil :</h3>
    <?php
    if (isset($_POST['submit'])) {
        $username = trim($_POST['username']);

        // validasi input data
        if (!preg_match("/^[a-zA]*$/", $username)) {
            echo "Sistem kami menolak untuk inputan berisi angka<br>";
        }

        // jika validasi input hanya huruf dan angka terpenuhi
        else if (!empty($_POST['username'])) {
            //Tulis query disini
            echo "Sistem memeriksa data anda valid dengan ketentuan kami. Selamat Login<br>";
        }
    }
    ?>
</body>

</html>