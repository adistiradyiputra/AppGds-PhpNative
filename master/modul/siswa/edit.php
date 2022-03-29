<?php
	// Check if form is submitted for user update, then redirect to homepage after update
	if(isset($_POST['update']))
	{	
		$id = $_POST['id'];
		
		$nisn=$_POST['nisn'];
		$nama=$_POST['nama'];
		$kelas=$_POST['kelas'];
		
         if($nisn=='' ){
			$pesan = "NISN KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$pesan');</script>";
		}elseif($nama=='' ){
			$message = "NAMA KOSONG SILAHKAN ISI FORM DENGAN LENGKAP!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else{	
		
		// update user data
		$result = mysqli_query($link, "UPDATE siswa SET nisn='$nisn',nama='$nama',kelas='$kelas'WHERE id=$id");
		 // echo "UPDATE user SET nama='$nama',tanggal_lahir='$tanggal_lahir',nik='$nik',tempat_lahir='$tempat_lahir',fakultas='$fakultas',jurusan='$jurusan',ipk='$ipk' WHERE id=$id";
		//print_r($_FILES);
		
		// Redirect to homepage to display updated user in list
			echo "<script type='text/javascript'>window.location.href = 'index.php?page=siswa';</script>";
		//header("Location: index.php?page=barang");
	}
}	
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($link, "SELECT * FROM siswa WHERE id=$id");
 



?>


<?php
	$nisn = "";
	$nama = "";
	$kelas = "";
	
if($result->num_rows > 0){
	while($user_data = mysqli_fetch_array($result))
	{
		$nisn = $user_data['nisn'];
		$nama = $user_data['nama'];	
		$kelas = $user_data['kelas'];
	}
}
?>


<section class="content">
  <div class="row">
		<!-- left column -->
  <div class="col-md-6">
		<!-- general form elements -->
  <div class="box box-primary">
			
	<form name="update_user" method="post" action="" enctype="multipart/form-data">
		<div class="box-body">
			<div class="form-group"> 
				<label for="exampleInputEmail1">NISN</label>
				<input type="text" name="nisn" class="form-control" value="<?php echo $nisn;?>">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Nama</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $nama;?>">
			</div>  	
			
		    <div class="form-group">
				<label for="exampleInputPassword1">Kelas</label>
		 		<select  name="kelas" class="form-control" value="<?php echo $kelas;?>">
					  <option value="XII MM 1" <?php if ($kelas=='XII MM 1') echo 'selected';?>>XII MM 1</option>
					  <option value="XII MM 2" <?php if ($kelas=='XII MM 2') echo 'selected';?>>XII MM 2</option>
					  <option value="XII MM 3" <?php if ($kelas=='XII MM 3') echo 'selected';?>>XII MM 3</option>
					  <option value="XII MM 4" <?php if ($kelas=='XII MM 4') echo 'selected';?>>XII MM 4</option>
					  <option value="XII PSPT 1" <?php if ($kelas=='XII PSPT 1') echo 'selected';?>>XII PSPT 1</option>
					  <option value="XII PSPT 2" <?php if ($kelas=='XII PSPT 2') echo 'selected';?>>XII PSPT 2</option>
					  <option value="XII RPL 1" <?php if ($kelas=='XII RPL 1') echo 'selected';?>>XII RPL 1</option>
					  <option value="XII RPL 2" <?php if ($kelas=='XII RPL 2') echo 'selected';?>>XII RPL 2</option>
					  <option value="XII TKJ 1" <?php if ($kelas=='XII TKJ 1') echo 'selected';?>>XII TKJ 1</option>
					  <option value="XII TKJ 2" <?php if ($kelas=='XII TKJ 2') echo 'selected';?>>XII TKJ 2</option>
					  <option value="XII TKJ 3" <?php if ($kelas=='XII TKJ 3') echo 'selected';?>>XII TKJ 3</option>
				</select>
			</div>
		   
			<div class="form-group">
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				<button class="btn btn-primary" type="submit" name="update" value="update"><span>Update</span></button>
			</div>
		</table>
	</form>
  </div>	
  </div>	
  </div>	
  </div>	