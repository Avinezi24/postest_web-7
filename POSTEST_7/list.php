<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="login.css">
        <title>admin area</title>
    </head>
    <body>
        <div class="container"> 
            <div class="isi">
            <a href="login area/logout.php" class="logout">LOGOUT</a>
            <a href="tambah.php" class="tambah">TAMBAH BARANG</a>
            <a href="index.html" class="kembali">KEMBALI</a>
        <table class="tabel-list" border="2">
            <tr>
                <td>NOMOR</td>
                <td>JUDUL</td>
                <td>KATEGORI</td>
                <td>TANGGAL RILIS</td>
                <td>MENU</td>
            </tr>
            <?php 
            require "konek.php";
            $value = mysqli_query($konek,"SELECT*FROM jadwall");
            // $i=1;
            while($row = mysqli_fetch_array($value)){
                echo"
            <tr>
                <td>$row[id]</td>
                <td>$row[judul]</td>
                <td>$row[kategori]</td>
                <td>$row[tanggal]</td>
                <td>
                    <a href='edit.php ? kode=$row[id]'>UBAH</a>
                    <a href ='hapus.php ? kode=$row[id]'>HAPUS</a>
                </td>
            </tr>";}
            // $i++; ?>
        </table>
                
            </div>
        </div>
    </body>
</html>
<style>
    .logout{
        position: fixed;
        bottom: 90%;
        font-size: 30px;
        left: 5%;
    }
    .logout:hover{
        color:lightcoral;
    }
</style>