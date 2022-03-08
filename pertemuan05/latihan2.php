<?php

// pengulangan pada array
// for/ foreach

$angka = [13, 69, 420, 14046, 912, 46, 76, 1, 1231, 53, 87];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear: both;} /* untuk membersihkan floatnya */
    </style>
</head>
<body>

<!-- pakai for -->
<?php for ($i = 0; $i < count($angka); $i++) :?>
    <div class="kotak"><?= $angka[$i]; ?></div>
<?php endfor; ?>

<div class="clear"></div>


<!-- pakai foreach -->
<?php foreach($angka as $x) :?>
    <div class="kotak"><?= $x; ?></div>
<?php endforeach;?>

<div class="clear"></div>
    
</body>
</html>