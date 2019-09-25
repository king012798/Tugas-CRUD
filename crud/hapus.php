<?php 
//koneksi ke database
	include("koneksi.php");
//mengambil id sesuai url
	$id = $_GET['id'];
//query untuk menghapus database
	mysqli_query($koneksi,"DELETE FROM members WHERE id = '$id'");
//mengalihkan halaman ke index.php
	header("location: index.php");
 ?>