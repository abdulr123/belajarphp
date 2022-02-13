<?php

session_start();

if (!$_SESSION["login"]) {
    header("Location: login.php");
    exit;
}

require 'function.php';

//ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'ubah.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>

    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"] ?>">
        <ul>
            <li>
                <label for="nama"> NAMA : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="npm"> NPM : </label>
                <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"] ?>">
            </li>
            <li>
                <label for="jurusan"> JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="email"> EMAIL : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="gambar"> PHOTO : </label>
                <img src="img/<?= $mhs["gambar"] ?>" width="40">
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </form>

</body>

</html>