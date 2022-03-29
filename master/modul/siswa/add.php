  <?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nisn = $_POST['nisn'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		
		if($nisn=='' ){
			$pesan = "NISN KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$pesan');</script>";
		}elseif($nama=='' ){
			$message = "NAMA KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else{	

			//print_r($_FILES);
			// include database connection file
			include_once("koneksi.php");
					
			// Insert user data into table
			$result = mysqli_query($link, "INSERT INTO siswa(nisn,nama,kelas) 
											 VALUES('$nisn','$nama','$kelas')");
			
			
			// Show message when user added
			echo "<script type='text/javascript'>window.location.href = 'index.php?page=siswa';</script>";
			//header("Location:index.php?page=barang");
			//echo "Data Barang Berhasil Ditambah. <a href='index.php?page=barang'>Lihat Data Barang</a>";
		}
	}
	?>

<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
		<!-- general form elements -->
			<div class="box box-primary">
			<!-- form start -->
				<form action="" method="post" name="form1" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">NISN</label>
							<input type="text" name="nisn" class="form-control" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Nama</label>
							<input type="text" name="nama" class="form-control" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Kelas</label>
							<select  name="kelas" class="form-control" >
							  <option value="XII MM 1">XII MM 1</option>
							  <option value="XII MM 2">XII MM 2</option>
							  <option value="XII MM 3">XII MM 3</option>
							  <option value="XII MM 4">XII MM 4</option>
							  <option value="XII PSPT 1">XII PSPT 1</option>
							  <option value="XII PSPT 2">XII PSPT 2</option>
							  <option value="XII RPL 1">XII RPL 1</option>
							  <option value="XII RPL 2">XII RPL 2</option>
							  <option value="XII TKJ 1">XII TKJ 1</option>
							  <option value="XII TKJ 2">XII TKJ 2</option>
							  <option value="XII TKJ 3">XII TKJ 3</option>
							</select>
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



	
	