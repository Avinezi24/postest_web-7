<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR</title>
</head>
<body>
    <div class="container">
        <div class="canvas">
        <h2>REGISTER</h2>
            <form action="" method="post">
                <i><label for="">USERNAME</label></i>
                <i class="pws"><label for="">PASSWORD</label></i><br>
                <input type="text" name="username"   required autocomplete="off">
                <input type="password" name="pw" autocomplete="off"><br>
                <input type="submit" name="regis" class="sub">
            </form>
        </div>
    </div>
    
</body>
</html>
<style>
    *,body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background-color: darkslategrey;
    }
    .container{

        align-items: center;
        justify-content: center;
        width: 100%;
        height: auto;
    }
    .canvas{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 5%;
        margin-left: 20%;
        background-color: whitesmoke;
        width: 60%;
        height: 70vh;
        box-shadow: inset();
    }
    
    form{
        width: 98%;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    h2{
        position: relative;
        bottom: 100px;
    }
    i{
        position: relative;
        bottom: 10px;
        right: 50px;
        padding: 0 0 0 30%;
    }
    .pws{
        position: relative;
        left: 1px;
    }
    input{
        position: relative;
        margin-left: 70px;
        width: 37%;
        height: 5vh;    
        cursor: pointer;
        border: black solid 1px;
    }
    input:hover{
        background-color: rgba(20, 155, 134,.4);
        z-index: 0;
    }
    .sub{
        background-color: whitesmoke;
        position: relative;
        top: 30px;
        width: 100px;
        border: black solid 1px;
        border-radius: 10px;
    
    }

</style>

<?php 
include 'config.php';
if(isset($_POST["regis"])){
    $username =$_POST['username'];
    $password =$_POST['pw'];
    $sql = "SELECT*FROM akun where username ='$username'";
    $user= $dbs->query($sql);

    if(mysqli_num_rows($user)>0){
        echo"<script>alert('username telah digunakan')</script?";
    }
    else{
            $password=password_hash($password,PASSWORD_DEFAULT);
            $query ="INSERT INTO akun(username,pass) values('$username','$password')";
            $result=mysqli_query($dbs,$query);}
            echo"
            <script>alert('akun anda telah didaftarkan')</script>";
            header("location: login.php");
    }
?>