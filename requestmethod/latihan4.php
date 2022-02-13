<?php
// cek apakah ada data yang dikirimkan dari latihan3.php
// jika tidak ada data maka akan dialihkan ke latihan.php
// tanda || artinya atau
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["npm"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["photo"])
) {
    //redirect
    header("Location: latihan3.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h1>Detail Data Mahasiswa</h1>
    <ul>
        <li><img src="img/<?= $_GET["photo"]; ?>"> </li>
        <li><?= $_GET["nama"]; ?> </li>
        <li><?= $_GET["npm"]; ?> </li>
        <li><?= $_GET["jurusan"]; ?> </li>
        <li><?= $_GET["email"]; ?> </li>
    </ul>

    <a href="latihan3.php">Kembali</a>
</body>

</html>