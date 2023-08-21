<!DOCTYPE html>
<html>
<head>
    <title>Tugas 3</title>
</head>
<body>
    <h1>============= CETAK BILANGAN GANJIL GENAP 1-100 =============</h1>
    <!-- tag buka php -->
        <?php
        for ($i = 1; $i <= 100; $i++) { //inisiasi i mulai dari 1, dan batas i adalah 100, i akan bertambah jika perulangan dimulai
            if ($i % 2 != 0) {  //jika i tidak habis dibagi 2, maka i adalah ganjil, lalu print:
                echo "$i adalah bilangan ganjil <br />";
            } else { // jika habis dibagi 2, maka i adalah genap, lalu print:
                echo "$i adalah bilangan genap <br />";
            }
        }
        ?>
        <!-- tag tutup php -->
</body>
</html>
