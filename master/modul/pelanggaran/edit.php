<?php
	// Check if form is submitted for user update, then redirect to homepage after update
	if(isset($_POST['update']))
	{	
		$id = $_POST['id'];
		$pelanggaran=$_POST['pelanggaran'];
		$point=$_POST['point'];
	
		
		if($pelanggaran=='' ){
			$pesan = "PELANGGARAN KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$pesan');</script>";
		}elseif($point=='' ){
			$message = "POINT KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else{	
		
		// update user data
		$result = mysqli_query($link, "UPDATE pelanggaran SET pelanggaran='$pelanggaran',point='$point'WHERE id=$id");
		 // echo "UPDATE user SET nama='$nama',tanggal_lahir='$tanggal_lahir',nik='$nik',tempat_lahir='$tempat_lahir',fakultas='$fakultas',jurusan='$jurusan',ipk='$ipk' WHERE id=$id";
		//print_r($_FILES);
		
		// Redirect to homepage to display updated user in list
		echo "<script type='text/javascript'>window.location.href = 'index.php?page=pelanggaran';</script>";
		//header("Location:index.php?page=customer");
	}
}	
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($link, "SELECT * FROM pelanggaran WHERE id=$id");
 



?>

<?php
	$pelanggaran = "";
	$point = "";

if($result->num_rows > 0){
	while($user_data = mysqli_fetch_array($result))
	{
		$pelanggaran = $user_data['pelanggaran'];
		$point = $user_data['point'];	
	
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
					<h3 class="box-title">Edit</h3>
				</div><!-- /.box-header -->
			<!-- form start -->
				<form action="" method="post" name="form1" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Pelanggaran</label>
							<input type="text" name="pelanggaran" class="form-control"  value="<?php echo $pelanggaran;?>" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Point</label>
							<input type="text" name="point" class="form-control"  value="<?php echo $point;?>">
						</div>
					</div><!-- /.box-body -->

					<div class="box-footer">
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<button class="btn btn-primary" type="submit" name="update" value="update"><span>Update</span></button>
					</div>
				</form>
			</div><!-- /.box -->
		</div>
	</div>
</section>
