<?php

/*
pengulangan
for
while
do .. while
foreach : pengulangan khusus array
*/

for ( $i = 0; $i < 5; $i++){ // i awal = 0, selama i < 5 maka i++, sampai kondisinya false (5 < 5)
    echo "ola amigo!<br>";
}

while ( $i < 10 ){
    echo "amigo ola!<br>";
    $i++;
}

do {
    echo "uwowwww<br>";
    $i++;
} while ($i < 15);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <!-- kasih warna pakai style-->
    <style>
        .color {
            background-color: silver; 
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <!-- <tr>
        <td>1,1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td>1,4</td>
        <td>1,5</td>
    </tr>
    <tr>
        <td>2,1</td>
        <td>2,2</td>
        <td>2,3</td>
        <td>2,4</td>
        <td>2,5</td>
    </tr> -->
    <!-- <?php
        for ($i = 1; $i <= 3; $i++){
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++){
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
    ?> -->

    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <?php if ($i % 2 == 1): ?>
            <tr class="color">
        <?php else : ?>
            <tr>
        <?php endif;?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i,$j"?></td>
                <?php endfor; ?>
            </tr>
    <?php endfor; ?> <!-- daripada pakai {} mending pakai : dan endfor. kalau if berarti endif. agar lebih mudah mengidentifikasi oh ini end nya disini -->

</table>
    
</body>
</html>