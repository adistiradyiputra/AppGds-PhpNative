<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
 <title>Sistem GDS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="assets/bootstrap/fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="assets/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="assets/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

     <link href="assets/images/icons/favicon.ico" rel="icon" type="image/png" />


	<?php
	// Create database connection using config file
	
	//cek apakah sudah login
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php");
	}
	include_once("koneksi.php");
	include_once("modul/fnc.php");
	?>

  </head>
  
  
  <body class="skin-blue">
    <div class="wrapper">
		<!-- HEADER -->
		<?php include "header.php"; ?>
		<!-- Left side column. contains the logo and sidebar -->
		<?php include "menu.php"; ?>
      

      <!-- Right side column. Contains the navbar and content of the page -->
		<div class="content-wrapper">
			
			<?php
					//$cari = $_GET['page'];
					//echo $cari;
				if(isset($_GET['page'])){ // PEMBACAAN JIKA PAGE TIDAK KOSONG
				
					if($_GET['page'] == 'siswa'){ //JIKA PAGE = siswa
						
						if(isset($_GET['action'])){ // PEMBACAAN JIKA ACTION TIDAK KOSONG
							if($_GET['action'] == 'add'){
								include 'modul/siswa/add.php';
							}elseif($_GET['action'] == 'edit'){
								include 'modul/siswa/edit.php';
							}elseif($_GET['action'] == 'delete'){
								include 'modul/siswa/delete.php';
							}else{
								echo 'test';
							}
						}else{ // PEMBACAAN JIKA ACTION KOSONG
							include 'modul/siswa/index.php';
						}
						
					}elseif($_GET['page'] == 'pelanggaran'){ //JIKA PAGE = CUSTOMER
					
						if(isset($_GET['action'])){ // PEMBACAAN JIKA ACTION TIDAK KOSONG
							if($_GET['action'] == 'add'){
								include 'modul/pelanggaran/add.php';
							}elseif($_GET['action'] == 'edit'){
								include 'modul/pelanggaran/edit.php';
							}elseif($_GET['action'] == 'delete'){
								include 'modul/pelanggaran/delete.php';
							}else{
								echo 'test';
							}
						}else{ // PEMBACAAN JIKA ACTION KOSONG
							include 'modul/pelanggaran/index.php';
						}
						
					
						
					}elseif($_GET['page'] == 'manage'){ //JIKA PAGE = BARANG
						
						if(isset($_GET['action'])){ // PEMBACAAN JIKA ACTION TIDAK KOSONG
							if($_GET['action'] == 'add'){
								include 'modul/manage/add.php';
							}elseif($_GET['action'] == 'edit'){
								include 'modul/manage/edit.php';
							}elseif($_GET['action'] == 'delete'){
								include 'modul/manage/delete.php';
							}else{
								echo 'test';
							}
						}else{ // PEMBACAAN JIKA ACTION KOSONG
							include 'modul/manage/index.php';
						}
						
					}elseif($_GET['page'] == 'keluar'){ //JIKA PAGE = KELUAR
						//header("location:./logout.php");
						echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";
					}elseif($_GET['page'] == 'updatepass'){ 
						include 'modul/manage/editPass.php';
						
					}elseif($_GET['page'] == 'transaksi'){ 
						if(isset($_GET['action'])){
							if($_GET['action'] == 'add'){
								include 'modul/transaksi/add.php';
							}elseif($_GET['action'] == 'edit'){
								include 'modul/transaksi/edit.php';
							}elseif($_GET['action'] == 'delete'){
								include 'modul/transaksi/delete.php';
							}else{
								
							}
						}else{ // PEMBACAAN JIKA ACTION KOSONG
							include 'modul/transaksi/index.php';
						}
					}elseif($_GET['page'] == 'print'){ 
						
						if(isset($_GET['action'])){
							if($_GET['action'] == 'add'){
								include 'pembelian/add.php';
							}elseif($_GET['action'] == 'edit'){
								include 'pembelian/edit.php';
							}elseif($_GET['action'] == 'delete'){
								include 'pembelian/delete.php';
							}else{
								if($_GET['action'] == 'addDetail'){
									include 'pembelian/detail/add.php';
								}elseif($_GET['action'] == 'editDetail'){
									include 'pembelian/detail/edit.php';
								}elseif($_GET['action'] == 'deleteDetail'){
									include 'pembelian/detail/delete.php';
								}else{
									include 'pembelian/detail/index.php';
								}
							}
						}else{ // PEMBACAAN JIKA ACTION KOSONG
							include 'modul/print/index.php';
						}
						
					}elseif($_GET['page'] == 'detail'){ 
							include 'modul/detail/index.php';
					}else{
						echo "tidak ditemukan";	
					}
				}else{// PEMBACAAN JIKA PAGE KOSONG
				
					include 'modul/dashboard.php';
					//echo '<h4>Selamat datang, ' . $_SESSION['nama_user'] . '! anda telah login.</h4>';
					
					/**
					$nilaiwal = 1; 
					while($nilaiwal <= 100) {
						
						$bintang = 1;
						while($bintang <= $nilaiwal) {
							echo '*';
							$bintang++;
						}
						echo '<br>';
						$nilaiwal++;
						
					}
					for ($x = 0; $x <= 10; $x++) {
						echo "The number is: $x <br>";
					} 
					**/
					
				}

			?>
			
		
	  
		</div><!-- /.content-wrapper -->
		<footer class="main-footer">
			<style type="text/css">
			.haha{
			color:blue;
			}
			</style>
			<center><strong>SMK INFOKOM &copy; 2019-2020 <strong class="haha">GERAKAN DISIPLIN SEKOLAH</strong>.</strong></center>
		</footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="assets/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="assets/raphael-min.js"></script>
    <script src="assets/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="assets/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="assets/dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="assets/dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>