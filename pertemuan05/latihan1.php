<?php

// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index yang dimulai dari 0

$nama = "ucup"; // artinya 1 nilai dalam 1 variabel

// ada 2 cara untuk membuat array
// 1. cara lama

$hari = array("senin", "selasa", "rabu");

// 2. cara baru

$bulan = ["januari", "februari", "maret"];

// ------------------------------------------------------

$arr1 = [69420, "uyee", false];

// ------------------------------------------------------

// menampilkan array
// pakai var_dump() atau print_r()

var_dump($hari);

echo "<br>";

print_r($bulan);

echo "<br>";

// print_r sama aja tapi lebih ringkas, tanpa menampilkan tipe data didalamnya
// yang penting ada pasangan key dan valuenya
// key nya dimulai dari 0

// menampilkan 1 elemen pada array

echo $arr1[0]; // menampilkan array $arr1 yang pertama, karena key pertama adalah 0

echo "<br>";

// menambahkan elemen baru pada array

var_dump($hari);
$hari[] = "kamis"; // menambahkan kamis
echo "<br>";
var_dump($hari);

echo "<br>";

print_r($hari);
$hari[] = "kamis"; // menambahkan kamis, bisa gini juga
echo "<br>";
print_r($hari);

?>