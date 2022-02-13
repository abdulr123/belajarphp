<?php
// Variable Scope / Lingkup Variabel

$huruf = "A";

function tampilHuruf()
{
    //global disini untuk mengambil variabel dari file latihan.php
    //jika tidak menggunakan global maka variabel $huruf tidak kn ditampilkan, dikarenakan variabel $huruf berada di luar function tampilHuruf.
    global $huruf;
    echo $huruf;
}

tampilHuruf();
