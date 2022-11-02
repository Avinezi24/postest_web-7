
<?php 
    require "konek.php";
    ob_start();
    require "list.php";
    ob_end_clean();


    $sql = mysqli_query($konek,"SELECT *FROM jadwall where id ='$_GET[kode]'");
    $data=mysqli_fetch_array($sql);

    if(isset($_POST["ubah"])){
        mysqli_query($konek,"UPDATE jadwall set 
        judul ='$_POST[judul]',
        kategori ='$_POST[kategori]',
        tanggal ='$_POST[tanggal]'
        where id ='$_GET[kode]'");
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
    <note>
        UBAH DATA LIST
    </note>
    <form action="" method="post">
        <table class="tabel">
            <tr>
                <td>JUDUL</td>
                <td><input type="text" name="judul" value="<?php echo $data['judul'];?>"> </td>
            </tr>
            <tr>
                <td>KATEGORI</td>
                <td><input type="text" name="kategori" value="<?php echo $data['kategori'];?>"> </td>
            </tr>
            <tr>
                <td>TANGGAL</td>
                <td><input type="text" name="tanggal" value="<?php echo $data['tanggal'];?>"> </td>
            </tr>
            <tr>
                <td><input type="submit" name="ubah" value="simpan" class="sub"></td>
            </tr>
        </table>
    </form>
</body>
</html>