	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$pelanggaran = $_POST['pelanggaran'];
		$point = $_POST['point'];
		
		if($pelanggaran=='' ){
			$pesan = "PELANGGARAN KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$pesan');</script>";
		}elseif($point=='' ){
			$message = "POINT KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else{	
		
		//print_r($_FILES);
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($link, "INSERT INTO pelanggaran(pelanggaran,point) 
										 VALUES('$pelanggaran','$point')");
		
			//header("Location:index.php?page=customer");
			echo "<script type='text/javascript'>window.location.href = 'index.php?page=pelanggaran';</script>";
		// Show message when user added
		//echo "Data Customer Berhasil Ditambah. <a href='index.php?page=customer'>Lihat Data Customer</a>";
	}
}	
	?>
	
	<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
		<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Tambah</h3>
				</div><!-- /.box-header -->
			<!-- form start -->
				<form action="" method="post" name="form1" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Pelanggaran</label>
							<input type="text" name="pelanggaran" class="form-control" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Point</label>
							<input type="text" name="point" class="form-control" >
						</div>
					</div><!-- /.box-body -->

					<div class="box-footer">
						<button class="btn btn-primary" type="submit" name="Submit" value="Submit"><span>Simpan</span></button>
					</div>
				</form>
			</div><!-- /.box -->
		</div>
	</div>
</section>