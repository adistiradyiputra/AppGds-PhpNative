<?php
	// Check if form is submitted for user update, then redirect to homepage after update
	if(isset($_POST['update']))
	{	
		$id = $_POST['id'];
		$id_pelanggaran=$_POST['id_pelanggaran'];
		$id_siswa=$_POST['id_siswa'];
		$note=$_POST['note'];
		$tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
		
	
		
		if($id_pelanggaran=='' ){
			$pesan = "PELANGGARAN KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$pesan');</script>";
		}elseif($id_siswa=='' ){
			$message = "POINT KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}elseif($note=='' ){
			$message = "NOTE KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else{
			
		
		// update user data
		$result = mysqli_query($link, "UPDATE t_pelanggaran SET id_pelanggaran='$id_pelanggaran',id_siswa='$id_siswa',note='$note',tanggal='$tanggal'WHERE id=$id");
		 // echo "UPDATE user SET nama='$nama',tanggal_lahir='$tanggal_lahir',nik='$nik',tempat_lahir='$tempat_lahir',fakultas='$fakultas',jurusan='$jurusan',ipk='$ipk' WHERE id=$id";
		//print_r($_FILES);
		
		// Redirect to homepage to display updated user in list
		echo "<script type='text/javascript'>window.location.href = 'index.php?page=transaksi';</script>";
		//header("Location:index.php?page=customer");
	}
}	
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($link, "SELECT * FROM t_pelanggaran WHERE id=$id");
 



?>

<?php
	$id_pelanggaran = "";
	$id_siswa = "";
	$note = "";
	$tanggal = "";

if($result->num_rows > 0){
	while($user_data = mysqli_fetch_array($result))
	{
		$id_pelanggaran = $user_data['id_pelanggaran'];
		$id_siswa = $user_data['id_siswa'];	
		$note = $user_data['note'];	
		$tanggal = $user_data['tanggal'];	
		
	
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
							<select  name="id_pelanggaran" class="form-control" >
							<?php
								$result = mysqli_query($link, "SELECT * FROM pelanggaran");
								while($data = mysqli_fetch_array($result))
								{
									echo '<option value="'.$data['id'].'" '. ($id_pelanggaran ==  $data['id'] ? 'selected' : '') . '>'.$data['pelanggaran'].'</option>';
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
									echo '<option value="'.$data['id'].'" '. ($id_siswa ==  $data['id'] ? 'selected' : '') . '>'.$data['nama'].'</option>';
								}
							?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Tanggal</label>
						    <input type="date" name="tanggal" value="<?php echo $tanggal; ?>" class="form-control">
							
						
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Note</label>
							<textArea type="text" name="note" rows="14" class="form-control" ></textarea>
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
