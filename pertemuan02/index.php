<?php

// ini adalah komenn
// ini juga
    
    print "uyee";         // bisa langsung tanda petik dan ;
    print_r ("uwowww");   // harus pakai () dan ;
    var_dump("69420");    // akan memberikan informasi tipe data dan ukuran yang ditampilkan
    echo "ayyy yoooo"     // langsung tanda petik tanpa ; (dan bisa pakai petik?)
// ini komen
/*
asdasdas
*/

/*
standar output:
echo, print
print_r
var_dump
*/

?>

<?php
    echo 69420 // integer langsung tanpa petik
?>

<?php
    echo true  // boolean, akan menampilkan 1
?>

<?php
    echo false // akan menampilkan kosongan
?>

<?php

// penulisan sintaks php
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
// kita bisa tulis php di html and vice versa

// variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "ucup";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>ola, sugeng rawuh <?php echo $nama ?></h1?>
    <h2>ini adalah tag html di php</h2>
    <?php
        echo "this is a php tag inside html tag"
    ?>

</body>
</html>

<?php

    $jeneng = "ucup";
    echo "halo, jenengku $jeneng"      // lebih sakti
    // echo 'halo, jenengku $jeneng'

?>

<?php

// operator
// aritmatika
// + - * / %

$x = 10;
$y = 42;
echo $x * $y;

// penggabung string / concat
// .

$fname = "oncom";
$lname = "suroncom";
echo $fname . " " . $lname

?>

<?php

// assignment
// =, +=, -=, *=, /=, %=, .=

$x += 69;
echo $x;

$lname .= " ";
$lname .= "ashiapp";
echo $fname." ".$lname

?>

<?php

// perbandingan
// <, >, <=, >=, ==, !=

// var_dump(1 < 5)     // nanti akan keluar boolean
// var_dump(1 == "1")  // hasilnya akan true

// identitas
// ===, !==
// var_dump(1 === "1") // hasilnya akan false


// logika
// &&, ||, !

$x = 30;
var_dump($x < 20 && $x % 2 == 0); // jawabannya false

?>