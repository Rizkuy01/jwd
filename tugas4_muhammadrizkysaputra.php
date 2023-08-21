<!DOCTYPE html>
<html>
<head>
    <title>Tugas 4</title>
</head>
<body>
    <form method="post" action="">
        jumlah bintang = <input type="number" name="tinggi">
        <br>
        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    if (isset($_POST['submit'])) { //pengecekan apakah 'submit' sudah ditekan
        $tinggi = $_POST['tinggi']; //variabel yang menyimpan nilai input tinggi bintang
        for ($i = 1; $i <= $tinggi; $i++) { //looping pertama, yang menginisiasi baris untuk sesuai dengan inputan pada variable $tinggi, lalu batas dari $i adalah $tinggi
            for ($j = 1; $j <= $i; $j++) { //looping kedua, untuk membuat bintang menjadi baris segitiga, sesuai dengan looping yang pertama
                echo '* ';
            }
            echo '<br>';
        }
    }
    ?>
</body>
</html>
