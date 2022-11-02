<?php 
    include 'config.php';
    session_start();
    if(isset($_SESSION['login'])){
        header('location: ../member.php');
        exit;
        }

    require 'config.php';
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password =$_POST['pass'];
        $result = mysqli_query($dbs,"SELECT *from akun WHERE username = '$username'");

        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc ($result);
            $username = $row['username'];
            if(password_verify($password,$row['pass'])){
                if ($username == "admin"){
                    header('location: ../list.php');
                    echo"<script>alert('blok')</script>";
                    exit;
                }
                $_SESSION['login'] = true;
                exit;
                echo"<script>alert('selamat datang $username')</script>";
            }else{
                
                echo'<script>
                alert("password yang dimasukan salah");
                </script>'; 
            }
        }
        else{
            echo'<script>alert("username yang dimasukan salah");
                </script>';
        }

    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <div class="container">
        <div class="canvas">
            <h2>LOGIN</h2>
            <form action="" method="post">
                <i><label for="">USERNAME</label></i>
                <i class="pws"><label for="">PASSWORD</label></i><br>
                <input type="text" name="username"   required autocomplete="off">
                <input type="password" name="pass" autocomplete="off"><br>
                <input type="submit" name="login" class="sub" value="LOGIN">
            </form>
            <a href="register.php">REGISTER</a>
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
    a{
        color: black;
        position: relative;
        padding: 20px;
        text-decoration: none;
        top: 30%;
        
    }
</style>