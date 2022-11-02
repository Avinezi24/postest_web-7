<?php 
    $konek = mysqli_connect("localhost","root","","ajukan");
    $sql = mysqli_query($konek,"SELECT *FROM berkass");
    $data=mysqli_fetch_array($sql);

    if(isset($_POST["ajukan"])){
        $direktori="berkas/";
        $filename=$_FILES['namafile']['name'];
        move_uploaded_file($_FILES['namafile']['tmp_name'],$direktori.$filename);

        mysqli_query($konek,"INSERT INTO berkass set 
        judul ='$_POST[judul]',
        cerita ='$_POST[cerita]',
        file='$filename'");
        echo "
        <script> alert('data telah diajukan')</script>";
        echo "<meta http-equiv=refresh content=1;URL='member.php'>";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="member.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
            <div class="card">
                <p class="mc">MEMBERSHIP CARD</p>
                <table>
                    <tr>
                        <td>NAME</td>
                        <td class="titik">:</td>
                        <td class="val">RAHMAN</td>
                    </tr>
                    <tr>
                        <td>NO</td>
                        <td class="titik">:</td>
                        <td class="val">1234567</td>
                    </tr>
                    <tr>
                        <td>PERINGKAT</td>
                        <td class="titik">:</td>
                        <td class="val">MEMBER BARU</td>
                    </tr>
                    <a href="setting.php">SETTING AJUAN</a>
                    <a href="login area/logout.php" class="LOGOUT">LOGOUT</a>
                </table>
            </div>
            <div class="ajukan">
                <p class="title">AJUKAN</p>  
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">JUDUL</label><br>
                    <input type="text" name="judul"><br>
                    <label for="">CERITA</label><br>
                    <input type="text" name="cerita" class="crt"><br>
                    <label for="">upload gambar</label><br>
                    <input type="file" name="namafile" value="upload"><br>
                    <input type="submit" name="ajukan" class="sub">
                </form>

            </div>
        </div>
</body>
<style>
    *,body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        
        background-image: url('pic/bgA.jpg');
    }
    .container{
        display: flex;
        width: 100%;
        height: 100vh;

    }
    .card{
        flex-direction: column;
        position: relative;
        background-color: red;
        width: 40%;
        height: 40%;
        border-radius: 20px;
        top: 30px;
        left: 30px;
        align-items: center;
        justify-content: center;
        text-align: center;

    }
    .titik{
        position: relative;
        left: 50%;
    }
    .val{
        position: relative;
        left: 80%;
    }
    .mc{
        position: relative;
        top: 10px;
    }
    table{
        position: relative;
        top: 40px;
        left: 15%;
    }
    td{
        padding: 10px 0;
    }
    .sub{
        align-items: center;
        justify-content: center;
        border-radius: 40px;
        cursor: pointer;
    }
    .sub:hover{
        background-color: rgb(212, 215, 217);
    }
    .logout{
        position: fixed;
        top: 90%;
        left: 1%;
    }

</style>
</html>