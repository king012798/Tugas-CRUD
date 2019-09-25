
<?php
//koneksi ke database
include("koneksi.php");
	if(isset($_POST['submit'])){
    //membuat variable dengan menyesuaikan dengan nama inputan
	  $id 		= $_POST['id'];
	  $nama		= $_POST['nama'];
	  $username	= $_POST['username'];			
	  $password	= md5($_POST['password']);			
	  $email		= $_POST['email'];
    //mengecek username ada atau tidak
	  $cek = mysqli_query($koneksi, "SELECT * FROM members WHERE username='$username'") or die(mysqli_error($koneksi));
    //jika username tidak ada yang sama maka dapat ditambahkan
    if(mysqli_num_rows($cek) == 0){
      $sql = mysqli_query($koneksi, "INSERT INTO members VALUES('' ,'$nama', '$username', '$password', '$email')") or die(mysqli_error($koneksi));
      if($sql){
        echo '<script>alert("Berhasil menambahkan data."); document.location="index.php";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
      }
  //jika username ada yang sama
	}else{
		echo '<div class="alert alert-warning">Gagal, Username sudah terdaftar.</div>';
	}
}	
?>