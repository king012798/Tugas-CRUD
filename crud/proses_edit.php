<?php 
  //koneksi ke database
	include 'koneksi.php';
	//mengambil data sesuai input
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$email	= $_POST['email'];
  //mengupdate data ke database
	mysqli_query($koneksi,"UPDATE members SET id='$id', nama='$nama', username='$username', password='$password', email='$email' WHERE id='$id'");
	//mengalihkan halaman ke index.php
	header("location:index.php");
		 
?>