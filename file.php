<!DOCTYPE html>
    <head>
        <title>
            Junior Web Development
        </title>
    </head>
    <body>
        <p>Kalimat ini dibuat menggunakan HTML saja.</p>
        <?php
            echo "<p>kalimat ini dibuat menggunakan PHP.</p>";
            $a = "<p>kalimat ini dibuat menggunakan variabel PHP.</p>";
            echo $a;

            $b = 3.9;
            echo "IPK saya saat lulus adalah " . $b;
        ?>
    </body>
</html>