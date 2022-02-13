<?php
// Cara menampilkan array pada user dengan cara Pengulangan
// for atau foreach
$angka = [1, 23, 2, 56, 78, 32, 35, 89, 23, 1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan array pada user</title>
    <style>
        div {
            width: 60px;
            height: 60px;
            background-color: darkcyan;
            text-align: center;
            color: white;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>

<body>

    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div>
            <?php echo $angka[$i]; ?>
        </div>
    <?php } ?>

</body>

</html>