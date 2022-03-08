<?php

function salam($waktu = "mornin'", $nama = "you there") {
    return "good $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam();?></h1>
</body>
</html>