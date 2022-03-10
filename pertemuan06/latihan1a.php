<!DOCTYPE html>
<html>
<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%
        }

        .kelir {
            clear: both;
        }
    </style>
</head>
<body>

<?php
    $angka = [[1, 2, 3],
              [4, 5, 6],
              [7, 8, 9]];
?>


<!-- menampilkan isi array multidimensi -->
<div class="kotak"> <?= $angka[1][1]; ?> </div>

<div class="kelir"></div>

<!-- menampilkan seluruh isi array multidimensi -->
<?php foreach($angka as $x) :?>
    <?php foreach($x as $z) :?>
        <div class="kotak"> <?= $z; ?> </div>
    <?php endforeach;?>
    <div class="kelir"></div>
<?php endforeach;?>

</body>
</html>