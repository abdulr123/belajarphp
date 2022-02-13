<?php
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];

var_dump($hari);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array Pada PHP</title>
</head>

<body>

    <?php foreach ($hari as $a) : ?>
        <li>
            <?= $a; ?>
        </li>
    <?php endforeach; ?>

</body>

</html>