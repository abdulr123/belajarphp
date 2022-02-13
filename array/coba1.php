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
    <?php for ($i = 0; $i < 7; $i++) { ?>
        <li>
            <?php echo $hari[$i]; ?>
        </li>
    <?php } ?>

    <hr>

    <?php foreach ($hari as $h) : ?>
        <li>
            <?= $h; ?>
        </li>
    <?php endforeach; ?>

</body>

</html>