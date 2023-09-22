<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $agama = $_POST['agama'];
 
    echo "Terima Kasih " .  $nama . "  <br> Akun anda telah Teregistrasi sebagai " .  $username . "<br> Agama:" . $agama . "<br>";
    
    ?></form>
    <a href="tampil2.php">Tampilkan Informasi Anda</a>
</body>
</html>

