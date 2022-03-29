	<?php
	// Check if form is submitted for user update, then redirect to homepage after update
	if(isset($_POST['Submit']))
	{	
		$id = $_POST['id'];
		
		$kelas=$_POST['kelas'];
		$tanggal=$_POST['tanggal'];


		
		// update user data
		$result = mysqli_query($link, "UPDATE login SET nama='$nama',username='$username',password='$password',level='$level'WHERE id=$id");
		 // echo "UPDATE user SET nama='$nama',tanggal_lahir='$tanggal_lahir',nik='$nik',tempat_lahir='$tempat_lahir',fakultas='$fakultas',jurusan='$jurusan',ipk='$ipk' WHERE id=$id";
		//print_r($_FILES);
		
		// Redirect to homepage to display updated user in list
		echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
	}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_SESSION['id'];
 
// Fetech user data based on id
$result = mysqli_query($link, "SELECT * FROM siwa WHERE id=$id");
 



?>

<?php
	$kelas = "";
	$tanggal = "";
	
?>

	<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
		<!-- general form elements -->
			<div class="box box-primary">
			
			<!-- form start -->
				<form action="modul/r_print.php" method="post" name="form1" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group" >
							<label for="exampleInputPassword1">Kelas</label>
							<select  name="kelas" class="form-control" id="kelas">
								<option value="">No Selected</option>
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
							
						
						 <div class="form-group">
							<label for="exampleInputPassword1">Tanggal</label>
						    <input type="date" name="tanggal"  class="form-control">
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