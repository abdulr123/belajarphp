<?php
//koneksi database
$db = mysqli_connect("localhost", "root", "", "belajarphp");

//fungsi untuk menampilkan query
function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $db;

    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa VALUES 
            ('', '$nama', '$npm', '$jurusan', '$email', '$gambar')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($db);
}


function ubah($data)
{
    global $db;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET 
            nama = '$nama',
            npm = '$npm',
            jurusan = '$jurusan',
            email = '$email',
            gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa 
                WHERE 
                nama LIKE '%$keyword%' OR
                npm LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                email LIKE '%$keyword%' 

            ";
    return query($query);
}
