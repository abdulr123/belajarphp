<?php
// Koneksi ke database
// $db adalah variabel bebas untuk menyimpan koneksi database
$db = mysqli_connect("localhost", "root", "", "belajarphp");

// ambil data dari tabel mahasiswa / query data mahasiswa
// simpan query dalam variabel $result
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

// jika tidak ada tabel yang dicari maka tampilkan pesan error
// jika berhasil terkoneksi tampilkan tabel mahasiswa
if (!$result) {
    echo mysqli_error($db);
}

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() -> untuk menampilkan array numerik
//$mhs = mysqli_fetch_row($result);
//var_dump($mhs[4]);

// mysqli_fetch_assoc() -> untuk menampilkan array associative
//while ($mhs = mysqli_fetch_assoc($result)) {
//    var_dump($mhs["jurusan"]);
//}

// mysqli_fetch_array() -> untuk menampilkan array numerik dan associative
//$mhs = mysqli_fetch_array($result);
//var_dump($mhs["nama"]);

// mysqli_fetch_object() -> untuk menampilkan objek
//$mhs = mysqli_fetch_object($result);
//var_dump($mhs->email);

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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>

                <td> <?= $i; ?> </td>

                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?php echo $row["gambar"] ?>" width="50"></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["npm"] ?></td>
                <td><?php echo $row["jurusan"] ?></td>
                <td><?php echo $row["email"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>

    </table>

</body>

</html>