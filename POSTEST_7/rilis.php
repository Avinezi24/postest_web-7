<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="rarea.css">
    <link rel="stylesheet" type="text/css" href="rilis.css">
    <title>Document</title>
</head>
<body>
    <P class="note">TANGGAL RILIS TERBARU</P>
    <a href="login area/login.php" class="login"> LOGIN</a>

<table border="2">
            <tr>
                <td>NOMOR</td>
                <td>judul</td>
                <td>KATEGORI</td>
                <td>TANGGAL RILIS</td>
            </tr>
            <?php 
            require "konek.php";
            $value = mysqli_query($konek,"SELECT*FROM jadwall");
            $i=1;
            while($row = mysqli_fetch_array($value)){
                echo"
            <tr>
                <td>$row[id]</td>
                <td>$row[judul]</td>
                <td>$row[kategori]</td>
                <td>$row[tanggal]</td>
            </tr>";}
            // $i++; ?>
        </table>
        
        <div class="kembali">
            <a href="index.html">kembali</p>
        </div>
    
</body>
</html>