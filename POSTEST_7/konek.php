<?php
    $konek = mysqli_connect("localhost","root","","jadwal");

if (mysqli_connect_errno()){
    echo "gagal menyambung ke database : ".mysqli_connect_error();
}

?>