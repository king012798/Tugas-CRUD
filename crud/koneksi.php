<?php
    $koneksi = mysqli_connect("localhost","root","","crud_php");

    if(mysqli_connect_errno()){
    	echo "Koneksi Gagal :".mysql_connect_error();
    }
?>