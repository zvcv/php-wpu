<?php

$mhs = [
    ["oncom suroncom", 69420, "teknik informatika", "oncom@suroncom.com"],
    ["ucup surucup", 1313, "teknik mesin", "ucup@surucup.com"],
    ["uyee markuye", 9999, "teknik arsitektur", "uyee@markuye.com"]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<!-- cara menampilkan ada 3 -->
<!-- 1. dengan full foreach -->

<h3>Cara 1</h3>

<?php foreach($mhs as $m) : ?>
<ul>
    <?php foreach($m as $mx) : ?>
        <li><?= $mx ?></li>              <!-- list -->
    <?php endforeach; ?>
</ul>
<?php endforeach; ?>

<!-- 2. diawali foreach tapi listnya for -->

<h3>Cara 2</h3>

<?php foreach($mhs as $m) : ?>
<ul>
    <?php for ($i = 0; $i <= count($mhs); $i++) :?>
    <li><?= $m[$i] ?></li>
    <?php endfor; ?>
</ul>
<?php endforeach; ?>

<!-- 3. diawali foreach tapi listnya manual 1-1 -->

<h3>Cara 3</h3>

<?php foreach($mhs as $m) : ?>
<ul>
    <li>Nama    : <?= $m[0]; ?></li>
    <li>NIM     : <?= $m[1]; ?></li>
    <li>Jurusan : <?= $m[2]; ?></li>
    <li>Email   : <?= $m[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>