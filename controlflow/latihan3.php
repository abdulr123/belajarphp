<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 4; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 6; $j++) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        } ?>
    </table>
</body>

</html>