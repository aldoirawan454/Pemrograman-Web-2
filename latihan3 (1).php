<?php
echo "Pengulangan untuk mencari kategori bilangan :</br>";
echo "</br>";
function isPrima($num) {
    if ($num <= 1) return false;
    if ($num <= 3) return true;
    if ($num % 2 == 0 || $num % 3 == 0) return false;
    $i = 5;
    while ($i * $i <= $num) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
        $i += 6;
    }
    return true;
}

for ($i = 1; $i <= 19; $i++) {
    echo "<li>Angka $i adalah ";
    
    if ($i % 2 == 0) {
        echo "bilangan genap";
    } else {
        echo "bilangan ganjil";
    }

    if (isPrima($i)) {
        if ($i % 2 == 0) {
            echo " sekaligus bilangan prima";
        } else {
            echo " dan sekaligus bilangan prima";
        }
    }

    echo "<br>";
}
?>