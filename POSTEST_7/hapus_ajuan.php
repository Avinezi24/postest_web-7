<?php 
    $konek = mysqli_connect("localhost","root","","ajukan");
    require "setting.php";
    ob_end_clean();
    if(isset($_GET['kode'])){
        mysqli_query($konek,"delete from jadwal where id='$_GET[kode]'");
        echo "
        <script> alert('data telah dihapus')</script>";
        echo "<meta http-equiv=refresh content=2;URL='member.php'>";
    }
    else{
        echo "
        <script> alert('data gagal dihapus')</script>";
    }
?>