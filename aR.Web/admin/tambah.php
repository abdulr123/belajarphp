<?php

session_start();

if (!$_SESSION["login"]) {
    header("Location: login.php");
    exit;
}

require 'function.php';


//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {



    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'mahasiswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'tambah.php';
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
    <title>Tambah Data Mahasiswa</title>
</head>

<body>

    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama"> NAMA : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="npm"> NPM : </label>
                <input type="text" name="npm" id="npm" required>
            </li>
            <li>
                <label for="jurusan"> JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="email"> EMAIL : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="gambar"> PHOTO : </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>

</body>

</html>