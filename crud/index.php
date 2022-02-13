<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data</a>
    <br><br>

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

                <td> <?= $i; ?> </td>

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

</body>

</html>