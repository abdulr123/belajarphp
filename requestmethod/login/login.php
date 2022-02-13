<?php
// cek apakah tombol submit sudah di klik
if (isset($_POST["submit"])) {
    // cek user & password
    if ($_POST["username"] == "admin"  && $_POST["password"] == 123) {
        // jika benar redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan kesalahan
        $error = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>



    <h1>Login Admin</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red;">Username dan password Salah</p>
    <?php endif; ?>

    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </form>
    </ul>
</body>

</html>