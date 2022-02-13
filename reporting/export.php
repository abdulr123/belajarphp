<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");


?>
<html>

<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <h2><a href="index.php">Daftar Mahasiswa</a></h2>

        <div class="data-tables datatable-dark">

            <!-- Masukkan table nya disini, dimulai dari tag TABLE -->
            <table class="table table-bordered" cellspacing="0" width="100%" id="mauexport">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Photo</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $row) : ?>
                        <tr>

                            <td><?= $i; ?></td>
                            <td><img src="img/<?php echo $row["gambar"] ?>" width="50"></td>
                            <td><?php echo $row["nama"] ?></td>
                            <td><?php echo $row["npm"] ?></td>
                            <td><?php echo $row["jurusan"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>

            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>