<?php

function salam($waktu = "mornin'", $nama = "you there") { // "mornin" dan "you there" = parameter default, in case di body tidak diinput parameternya
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