<?php

    // DATE
    echo date("l, ");   // kita memanggil sebuah function dari php untuk mengelola tanggal, l = hari saja
    echo date("d-");    // hari
    // echo date("m-"); // bulan dalam bentuk angka
    echo date("M-");    // bulan dalam bentuk singkatan
    // echo date("y");  // tahun singkatan
    echo date("Y");     // tahun full

    echo "<br>";

    // TIME
    // UNIX timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    echo time();

    echo "<br>";

    echo date("l", time() - 60*60*24*100); // mengecek 100 hari kebelakang

    echo "<br>";

    // MKTIME
    // membuat sendiri detik
    echo date("l", mktime(0,0,0,4,26,1996)); // ngecek hari saat lahir

    echo "<br>";
    
    // STRTOTIME
    echo date("l", strtotime("26 apr 1996"))


?>