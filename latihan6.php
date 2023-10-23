<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>latihan 5c</title>
    <style>
        .kotak {
            width: 100px;
            height: 50px;
            display: flex;
        }

        .clear {
            border: 2px solid blue;
            padding: 10px;
            margin: 5px;
        }

        .ganjil {
            background-color: #003;
            color: #fff;
        }

        .genap {
            background-color: #999;
        }

    </style>
</head>
<body>
    <?php
    $kotak = 5;

    for ($i = 1; $i <= $kotak; $i++) {
        echo "<div class='kotak'>";

        for ($j = 1; $j <= $i; $j++) {
            $kelas = $i % 2 == 1 ? "ganjil" : "genap";  // Tentukan kelas baris ganjil/genap

            echo "<div class='clear $kelas'>";

            // Tentukan warna teks per kolom
            $warna_teks = $j % 2 == 1 ? "merah" : "hijau";
            echo "<span class='$warna_teks'>$j</span>";

            echo "</div>";
        }

        echo "</div>";
    }
    ?>
</body>
</html>
