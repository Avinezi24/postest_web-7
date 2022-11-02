<?php  
require "konek.php";
require "list.php";

if(isset($_GET['kode'])){
    mysqli_query($konek,"delete from jadwall where id='$_GET[kode]'");
    echo "
    <script> alert('data telah dihapus')</script>";
    echo "<meta http-equiv=refresh content=2;URL='list.php'>";
}
else{
    echo "
    <script> alert('data gagal dihapus')</script>";
}
?>