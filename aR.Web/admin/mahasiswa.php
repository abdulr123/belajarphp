<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

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
    <!-- CSS only -->
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
   


            <h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data</a> |
<a href="export.php">Export Data</a>
<br><br>

<form action="" method="POST">
    <input type="text" name="keyword" size="40" autofocus placeholder="Cari data yang diinginkan.." autocomplete="off">
    <button type="submit" name="cari"> Search</button>
</form>
<br>


<!-- navigasi -->
<?php if ($halamanaktif > 1) : ?>
    <a href="?halaman=<?= $halamanaktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for ($i = 1; $i <= $jumlahhalaman; $i++) : ?>
    <?php if ($i == $halamanaktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color:crimson;"> <?= $i; ?> </a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>"> <?= $i; ?> </a>
    <?php endif; ?>
<?php endfor;  ?>

<?php if ($halamanaktif < $jumlahhalaman) : ?>
    <a href="?halaman=<?= $halamanaktif + 1; ?>">&raquo;</a>
<?php endif; ?>

<br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Photo</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Jurusan</th>
        <th>Email</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
        <tr>

            <td>
                <center> <?= $i; ?> </center>
            </td>

            <td>
                <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
                <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin Ingin Menghapus Data');  ">Hapus</a>
            </td>
            <td><img src="img/<?php echo $row["gambar"] ?>" width="50"></td>
            <td><?php echo $row["nama"] ?></td>
            <td><?php echo $row["npm"] ?></td>
            <td><?php echo $row["jurusan"] ?></td>
            <td><?php echo $row["email"] ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>

</table>

        </section>
    </div>

            </div>




</body>

</html>