<?php 
    require "member.php";
    ob_end_clean();
    $konek = mysqli_connect("localhost","root","","ajukan");
    $sql = mysqli_query($konek,"SELECT *FROM berkas");
    $data=mysqli_fetch_array($sql);
    if(isset($_POST["ubah"])){
        mysqli_query($konek,"UPDATE berkas set 
        judul ='$_POST[judul]',
        cerita ='$_POST[cerita]',
        file='$filename'");
        echo "
        <script> alert('data telah diubah')</script>";
        echo "<meta http-equiv=refresh content=1;URL='member.php'>";}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="ubah">
        <div class="ubh">
            <p class="ubh2">UBAH DATA</p>
        </div>
        
        <form action="" method="post" enctype="multipart/form-data">
                    <label for="">JUDUL</label><br>
                    <input type="text" name="judul"><br>
                    <label for="">CERITA</label><br>
                    <input type="text" name="cerita" class="crt"><br>
                    <label for="">upload gambar</label><br>
                    <input type="file" name="namafile" value="upload"><br>
                    <input type="submit" name="ubah" class="sub">
                </form>
        </div>
        <div class="hapus">
        <hapus class="hps"><a href ='hapus_ajuan.php ? kode=$sql[id]'>HAPUS DATA</a></div>
    </style>
        </div>
    </div>
</body>

</html>

<style>
    .ubh{
        position: relative;
        top: 20px;
        background-color: brown;
    }
    .ubh2{
        position: relative;
        left: 40%;
    }
    
    *,body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background-size: cover;
        background-image: url('pic/bgA.jpg');
    }
    .container{
        margin-left: 20px;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
        border-radius: 10px;
        background-color: grey;
        height: 90vh;
        width: 40%;
    }
    
    form{
        position: relative;
        top: 40px;
        left:30px ;
        width: 50%;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: left;
        justify-content: left;
    }
    input{
        height: 20px;
    }
    .crt{
        height: 20vh;
    }
    a{
        text-decoration: none;
        color: white;
    }
    
    .hapus{
        left: 30px;
        position: relative;
        top: 80px;
    }
    .hps:hover{
        color: red;
    }
    </style>