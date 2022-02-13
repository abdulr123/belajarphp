<?php
// $_GET

$mahasiswa = [
    [
        "nama" => "Abdul Rahman",
        "npm" => "012345",
        "jurusan" => "Informatika",
        "email" => "abdulrahman@ft.unbara.ac.id",
        "photo" => "photo1.jpg"
    ],
    [
        "nama" => "Indirasari",
        "npm" => "0123434",
        "jurusan" => "Kebidanan",
        "email" => "indirasari@ft.unbara.ac.id",
        "photo" => "photo2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan4.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&photo=<?= $mhs["photo"]; ?>"> <?= $mhs["nama"]; ?> </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>