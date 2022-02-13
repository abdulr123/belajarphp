<?php

session_start();
require 'function.php';

// cek dulu cookie 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($db, "SELECT username FROM user WHERE id = $id ");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}



if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' ");
    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek pssword
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set session 
            $_SESSION["login"] = true;

            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie dan acak cookie

                setcookie('id', $row['id'], time() + 60);

                // mengacak $row dengan algoritma 'sha256'
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>LOGIN</h1>
    <?php if (isset($error)) : ?>
        <p style="color:red;">username / password salah</p>
    <?php endif ?>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text name" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember"> Remember me</label>
            </li>
            <li>
                <button type="submit" name="login"> Login</button>
            </li>
        </ul>
    </form>

</body>

</html>