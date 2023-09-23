<?php
    require 'koneksi.php';
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    $mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding = "10" cellspacing="0">
        <h2><a href="tambah.php">Tambah Data</a></h2>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Jurusan</th>
        <th>Fakultas</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php  $i = 1 ?>
    <?php foreach($mahasiswa as $mhs):  ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $mhs['nama']; ?></td>
        <td><?php echo $mhs['npm']; ?></td>
        <td><?php echo $mhs['jurusan']; ?></td>
        <td><?php echo $mhs['fakultas']; ?></td>
        <td><a href="hapus.php/?id=<?= $mhs['id']; ?>">Hapus</a></td>
        <td>edit</td>
    </tr>
    <?php $i++ ?>
    <?php endforeach;
    ?>
    </table>

</body>
</html>