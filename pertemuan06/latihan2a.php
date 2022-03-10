<!-- array associative
definisinya sama seperti array numerik, keculai
key-nya adalah string yang kita buat sendiri -->

<?php

$mhs = [
    [
    "nrp" => "69420",
    "email" => "oncom@suroncom",
    "nama" => "oncom suroncom",
    "jurusan" => "teknik informatika",
    "poto" => "oncom.png"
    ],
    [
    "nrp" => "1313",
    "jurusan" => "teknik mesin",
    "email" => "ucup@surucup",
    "nama" => "ucup surucup",
    "poto" => "ucup.png"
    ],
    [
    "nama" => "uyee markuye",
    "nrp" => "9999",
    "email" => "uyee@markuye",
    "jurusan" => "teknik arsitektur",
    "poto" => "uyee.png",
    "tugas" => [99, 88, 77]             // array dalam array dalam array
    ]
];

echo $mhs[2]["tugas"][1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mhs as $m) : ?>
    <ul>
        <li>
            <img src="img/<?= $m["poto"];?>">
        </li>
        <li><?= $m["nama"];?></li>
        <li><?= $m["nrp"];?></li>
        <li><?= $m["email"];?></li>
        <li><?= $m["jurusan"];?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>