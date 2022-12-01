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
            $_SESSION["username"] = $username;

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
    <link rel="stylesheet" href="./css-login/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
  
</head>

<body>



<!-- partial:index.partial.html -->
<div class="screen-1">
    <h1>LOGIN</h1>
    <?php if (isset($error)) : ?>
        <p style="color:red;">username / password salah</p>
    <?php endif ?>
        <form action="" method="POST" class="form-control">
        <div class="username">
            <label for="username">Username</label>
            <div class="sec-2">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="username" name="username" placeholder="Masukan username"/>
            </div>
        </div>
        <div class="password">
            <label for="password">Password</label>
            <div class="sec-2">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input class="pas" type="password" name="password" placeholder="············"/>
            <!--<ion-icon class="show-hide" name="eye-outline"></ion-icon>-->
            </div>
        </div>
        <div class="remember">
            <input type="checkbox" name="remember" >
            <label for="remember"> Remember me</label>
        </div>


        <button type="submit" name="login" class="login">Login </button>
        </form>
    <div class="footer"><span>Signup</span><span> <a href="/belajarphp/aR.Web">Back to Home</a> </span></div>
</div>
<!-- partial -->
















</body>

</html>