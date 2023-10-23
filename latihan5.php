<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid blue;
        

        }

        .row {
            display: flex;
            justify-content: ;
        }

        .box {
            width: 23.5%;
            padding: 10px;
            border: 1px solid #000;
            text-align: center;
            font-size: 30px; /* Sesuaikan ukuran font dengan lebar dan tinggi kotak */
            line-height: 1; /* Menghilangkan ruang di atas dan bawah teks */
            margin : 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="box"><?php echo "A"; ?></div>
        </div>
        <div class="row">
            <div class="box"><?php echo "A"; ?></div>
            <div class="box"><?php echo "B"; ?></div>
        </div>
        <div class="row">
            <div class="box"><?php echo "A"; ?></div>
            <div class="box"><?php echo "B"; ?></div>
            <div class="box"><?php echo "C"; ?></div>
        </div>
    </div>
</body>
</html>