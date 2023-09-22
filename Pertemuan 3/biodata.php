<?php
    $nama = "Agil Zulfa";
    $hobi = "Futsal";
    $alamat = "Bogor";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> <?php echo "Biodata"?> </h2>
    
    <div class="biodata">
    <TABle>
        <tr>
        <th> Nama</th>
        <th> Tempat tanggal lahir</th>
        <th> Hobi</th>
        <th> Asal</th>
        </tr>

        <tr>
            <td><?php echo $nama ?></td>
            <td>Bogor, 16 Oktober 2004</td>
            <td><?php echo $hobi ?></td>
            <td><?php echo $alamat ?></td>
        </tr>
    </TABle>
    </div>
</body>
</html>

<style> 
    body{
        text-align: center;
    }

    .biodata{
        margin-left: 30% ;
    }

    table, th, td, tr {
        justify-content: center;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px 20px;
    }
</style>

