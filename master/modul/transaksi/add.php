
	
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_pelanggaran = $_POST['id_pelanggaran'];
		$id_siswa = $_POST['id_siswa'];
		$note = $_POST['note'];
		$tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
		
		if($id_pelanggaran=='' ){
			$pesan = "PELANGGARAN KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$pesan');</script>";
		}elseif($id_siswa=='' ){
			$message = "POINT KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}elseif($note==''){	
		    $message = "NOTE KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$message');</script>";
	    }else{	
		
		//print_r($_FILES);
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($link, "INSERT INTO t_pelanggaran(id_pelanggaran,id_siswa,note,tanggal) 
										 VALUES('$id_pelanggaran','$id_siswa','$note','$tanggal')");
		
			//header("Location:index.php?page=customer");
			echo "<script type='text/javascript'>window.location.href = 'index.php?page=transaksi';</script>";
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
							<select  name="id_pelanggaran" class="form-control" >
							<?php
								$result = mysqli_query($link, "SELECT * FROM pelanggaran");
								while($data = mysqli_fetch_array($result))
								{
									echo '<option value="'.$data['id'].'">'.$data['pelanggaran'].'</option>';
								}
							?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Siswa</label>
							<select  name="id_siswa" class="form-control" >
							<?php
								$result = mysqli_query($link, "SELECT * FROM siswa");
								while($data = mysqli_fetch_array($result))
								{
									echo '<option value="'.$data['id'].'">'.$data['nama'].'</option>';
								}
							?>
							</select>
						</div>
						 
						 <div class="form-group">
							<label for="exampleInputPassword1">Tanggal</label>
						    <input type="date" name="tanggal"  class="form-control">
						
						</div>
						
						<div class="form-group">
							<label for="exampleInputPassword1">Note</label>
							<textArea type="text" name="note" rows="14" class="form-control" ></textarea>
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