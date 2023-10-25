<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <style>
        .ganti_style {
    font-size: 28px;
    font-family: Arial;
    color: #1A0547;
    font-style: italic;
    font-weight: bold;
}
    </style>
    <?php
    function ganti_style($tulisan, $kelas) {
        return '<p class="' . $kelas . '">' . $tulisan . '</p>';
    }

    $tulisan = "Hello World! Here I Come !";
    $kelas = "ganti_style";

    echo ganti_style($tulisan, $kelas);
    ?>
</body>
</html>