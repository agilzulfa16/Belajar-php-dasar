<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tampil.php" method="POST">
        <fieldset>
            <legend>Registrasi</legend>
    <label>Nama: </label><input type="text" name="nama"> <br>
    <label>Username </label> <input type="text" name="username"> <br>
    <label>Email </label> <input type="email" name="email"> <br>
    <label>Password </label> <input type="password" name="password"> <br>
    <label>Jenis Kelamin: </label> <input type="radio" name="jenis_Kelamin" value="laki_laki">perempuan
        <input type="radio" name="jenis_kelamin" value="perempuan">Laki laki<br>
    <label>Agama: </label><select name="agama">
            <option value="agama">Agama</option>
            <option value="islam">islam</option>
            <option value="hindu">Hindu</option>
            <option value="buddha">Buddha</option>
            <option value="undefined">Undefined</option>
        </select>
        <br>
    Biografi: <textarea name="biografi" cols="20" rows="3"></textarea> <br>
    
    <button type="submit">Daftar</button></form>
    </fieldset>
</body>
</html>