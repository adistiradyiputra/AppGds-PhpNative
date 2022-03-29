<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];

		//print_r($_FILES);
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($link, "INSERT INTO login(nama,username,password,level) 
										 VALUES('$nama','$username','$password','$level')");
		
		
		// Show message when user added
		echo "<script type='text/javascript'>window.location.href = 'index.php?page=manage';</script>";		
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
							<input type="text" name="nama" class="form-control" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Username</label>
							<input type="text" name="username" class="form-control" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="text" name="password" class="form-control" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Level</label>
							<select  name="level" class="form-control" >
							  <option value="0">Admin</option>
							  <option value="1">User</option>
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