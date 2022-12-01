<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';

// menambahkan pagination
// konfigurasi pagination

$jumlahdataperhalaman = 2;
$jumlahdata = count(query("SELECT * FROM mahasiswa"));
$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
if (isset($_GET["halaman"])) {
    $halamanaktif = $_GET["halaman"];
} else {
    $halamanaktif = 1;
}

$awaldata = ($jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awaldata, $jumlahdataperhalaman");

// ketika tombol cari di klik maka akan menampilkan hasil data yang dicari
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css-admin/style.css">
</head>

<body>

    <div class="wrapper">
        <!-- Menu -->
        <div class="sidebar">
            <menu>
            <ul class="menu-content">
                <li><a href="index.php"> Home</a></li>
                <li><a href="mahasiswa.php"> <span>Data Mahasiswa</span></a>
                </li>
                <li><a href="logout.php"> <span>Logout</span></a></li>
            </ul>
            </menu>
        

        </div>

        <!-- Isi Kontent -->
        <section class="content">
            <div class="inner">
            <p>
                Selamat datang <?php echo $_SESSION ['username'] ?>
            </p>


            
            </div>




</body>

</html>