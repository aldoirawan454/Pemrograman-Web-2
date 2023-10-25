<?php
$jawabanInsset = "<br><br>";
$jawabanEmpty = "<br><br>";

function soal($style) {
    $text = "pengertian dari iset dan empty <br>";

    // Menggunakan isset() untuk memeriksa apakah variabel didefinisikan
    if (isset($style)) {
        $jawabanIsset = applyCSSStyle("Isset adalah......... <br>", $style);
    } else {
        $jawabanEmpty = applyCSSStyle("Isset adalah.........", $style);
    }



    // Menggunakan empty() untuk memeriksa apakah variabel kosong
    if (empty($style)) {
        $jawabanEmpty = applyCSSStyle("Empty adalah.........", $style);
    } else {
        $jawabanEmpty = applyCSSStyle("Empty adalah.........", $style);
    }

    echo $text . $jawabanIsset. $jawabanEmpty;
}

function applyCSSStyle($text, $cssClass) {
    // Menambahkan kelas CSS ke teks
    $styledText = '<span class="' . $cssClass . '">' . $text . '</span>';
    return $styledText;
}

// Contoh penggunaan fungsi soal dengan kelas CSS "my-custom-css-class"
soal("my-custom-css-class");
?>