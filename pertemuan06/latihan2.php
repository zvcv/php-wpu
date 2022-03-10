<?php

$mhs = [["oncom suroncom", 69420, "teknik informatika", "oncom@suroncom.com"],
        ["ucup surucup", 1313, "teknik mesin", "ucup@surucup.com"],
        ["uyee markuye", 9999, "teknik arsitektur", "uyee@markuye.com"]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<!-- cara 1 -->
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mhs as $m) : ?>
    <ul>
        <li><?= $m[0];?></li>
        <li><?= $m[1];?></li>
        <li><?= $m[2];?></li>
        <li><?= $m[3];?></li>
    </ul>
    <?php endforeach; ?>
    
<!-- cara 2 -->
    <h2>Daftar Mahasiswa</h2>

    <?php foreach($mhs as $m) : ?>
    <ul>
        <?php for ($i = 0; $i <= count($mhs); $i++) :?>
        <li><?= $m[$i] ?></li>
        <?php endfor; ?>
    </ul>
    <?php endforeach; ?>

</body>
</html>