<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
//if (isset($_POST["simpan"])){
	$username = $_POST['username'];
	$password = $_POST['password'];
//}	
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($link,"select * from login where username='$username' and password='$password '");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$namaUser = mysqli_fetch_array($data);

if($cek > 0){
	$_SESSION['id'] = $namaUser['id'];
	$_SESSION['nama'] = "$username";
	$_SESSION['status'] = "login";
	$_SESSION['nama_user'] = $namaUser['nama'];
	$_SESSION['level'] = $namaUser['level'];
	header("location:../index.php");
}else{
	header("location:404.php");
	//echo "login Gagal";
}

?>
