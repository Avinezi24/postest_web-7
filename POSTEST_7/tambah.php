<?php 
    require "konek.php";
    ob_start();
    require "list.php";
    ob_end_clean();


    $sql = mysqli_query($konek,"SELECT *FROM jadwal");
    $data=mysqli_fetch_array($sql);

    if(isset($_POST["tambah"])){
        mysqli_query($konek,"INSERT INTO jadwall set 
        judul ='$_POST[judul]',
        kategori ='$_POST[kategori]',
        tanggal ='$_POST[tanggal]'");
        echo "
        <script> alert('data telah diubah')</script>";
        echo "<meta http-equiv=refresh content=1;URL='list.php'>";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    
    <title>Document</title>
</head>
<body>
    <div class="container2">
    <form action="" method="post">
        <table class="tabel">
            <tr>
                <td>JUDUL</td>
                <td><input type="text" name="judul"> </td>
            </tr>
            <tr>
                <td>KATEGORI</td>
                <td><input type="text" name="kategori"> </td>
            </tr>
            <tr>
                <td>TANGGAL</td>
                <td><input type="date" name="tanggal">> </td>
            </tr>
            <tr>
                <td><input type="submit" name="tambah" value="simpan"></td>
            </tr>
        </table>
    </form></div>
</body>
</html>