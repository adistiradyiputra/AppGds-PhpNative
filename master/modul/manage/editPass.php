<?php
	// Check if form is submitted for user update, then redirect to homepage after update
	if(isset($_POST['update']))
	{	
		$id = $_POST['id'];
		
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$level=$_POST['level'];

		
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
$result = mysqli_query($link, "SELECT * FROM login WHERE id=$id");
 



?>
 
<?php
	$nama = "";
	$username = "";
	$password = "";
	$level = "";

if($result->num_rows > 0){
	while($user_data = mysqli_fetch_array($result))
	{
		$nama = $user_data['nama'];
		$username = $user_data['username'];	
		$password = $user_data['password'];
		$level = $user_data['level'];
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
							<label for="exampleInputEmail1">Nama</label>
							<input type="text" name="nama" class="form-control"  value="<?php echo $nama;?>" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Username</label>
							<input type="text" name="username" class="form-control"  value="<?php echo $username;?>">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="text" name="password" class="form-control"  value="<?php echo $password;?>">
							<input type="hidden" name="level" class="form-control"  value="<?php echo $level;?>">
						</div>
					</div><!-- /.box-body -->

					<div class="box-footer">
						<input type="hidden" name="id" value="<?php echo $id;?>">
						<button class="btn btn-primary" type="submit" name="update" value="update"><span>Update</span></button>
					</div>
				</form>
			</div><!-- /.box -->
		</div>
	</div>
</section>