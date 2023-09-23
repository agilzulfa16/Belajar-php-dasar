<?php
        require 'koneksi.php';

        if (isset ($_POST['submit'])){

       
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $jurusan = $_POST['jurusan'];
        $fakultas = $_POST['fakultas'];

        $result = mysqli_query($conn, "INSERT INTO mahasiswa (`id`, `nama`, `npm`, `jurusan`, `fakultas`) VALUES ('', '$nama', '$npm', '$jurusan', '$fakultas')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h1>Ini Tambah data</h1>
    <form action="" method="POST">
        <label for="name">Nama: </label><input type="text" name="nama" id="nama" required> <br>
        
        <label for="name">NPM: </label><input type="text" name="npm" id="npm"><br>
        
        <label for="name">Jurusan: </label><input type="text" name="jurusan" id="jurusan"><br>
        
        <label for="name">Fakultas: </label><input type="text" name="fakultas" id="fakultas"><br>

        <input type="submit" name="submit">




    </form>
</body>
</html>