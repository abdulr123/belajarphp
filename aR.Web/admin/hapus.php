<?php

session_start();

if (!$_SESSION["login"]) {
    header("Location: login.php");
    exit;
}

require 'function.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = 'mahasiswa.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
    </script>
";
}
