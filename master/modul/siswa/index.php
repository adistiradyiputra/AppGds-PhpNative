
<?php

	$result = mysqli_query($link, "SELECT * FROM siswa ORDER BY id DESC");
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])){
	$cari = $_POST['cari'];
	$result = mysqli_query($link, "SELECT * FROM siswa Where nisn LIKE '%".$cari."%' OR nama LIKE '%".$cari."%' OR kelas LIKE '%".$cari."%'");
}else{
}
?>

	
	
	
                    

	<section class="content-header">
	  <h1>
		Data Siswa
		<small>Master</small>
	  </h1>
	</section>
	
	<section class="content">
		<a href='index.php?page=siswa&action=add' class='btn btn-social-icon'><i class='fa fa-plus '></i></a>
			            <form action="" method="post" name="formcari" enctype="multipart/form-data">
	                     <input type="text" name="cari" id="cari"><input type="submit" name="Submit" value="cari"><a href="index.php?page=siswa">tampilkan semua </a>
	                    </form>
						<br>
	
          <div class="row">
            <div class="col-md-12">
				<div class="box">
					<div class="box-header">
					  <h3 class="box-title"></h3>
					</div><!-- /.box-header -->
					<div class="box-body">
	      					<table class="table table-bordered">
							<tr class="">
							
							   <th>NISN</th> 
							   <th>Nama</th>    
							   <th>Kelas</th>
							   <th>Action</th>
							</tr>
							<?php  
							while($user_data = $result->fetch_array()) {         
								echo "<tr>";
								echo "<td>".@$user_data['nisn']."</td>";
								echo "<td>".@$user_data['nama']."</td>";
								echo "<td>".@$user_data['kelas']."</td>";
								echo "<td><a href='index.php?page=siswa&action=edit&id=$user_data[id]'><i class='fa fa-edit '></i></a> | <a href='index.php?page=siswa&action=delete&id=$user_data[id] 'onclick='return confirm(\"APA ANDA YAKIN INGIN MENGHAPUS INI?\")'><i class='fa fa-trash-o'></i></a></td></tr>";  
							}
							?>
						</table>
					</div>
				</div>
			</div>
			</div>
	</div>
	
	
	
	
	
	
	
	
	
 
	<!-- cek apakah sudah login -->
	<!-- <br/>
 
	<br/>
	<br/>
	
	<br/><br/>
 -->