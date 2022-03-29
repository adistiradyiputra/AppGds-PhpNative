	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$cari = $_POST['cari'];
		$result = mysqli_query($link, "SELECT * FROM pelanggaran Where pelanggaran LIKE '%".$cari."%' OR point LIKE '%".$cari."%'");
	}else{
		$result = mysqli_query($link, "SELECT * FROM pelanggaran ORDER BY id DESC");
	}
	?>

<section class="content-header">
	  <h1>
		Data Pelanggaran
		<small>Master</small>
	  </h1>
	</section>
	
	<section class="content">
		<a href='index.php?page=pelanggaran&action=add' class='btn btn-social-icon'><i class='fa fa-plus '></i></a>
		<form action="" method="post" name="formcari" enctype="multipart/form-data">
	                     <input type="text" name="cari" id="cari"><input type="submit" name="Submit" value="cari"><a href="index.php?page=pelanggaran">tampilkan semua </a>
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
							   <th>Pelanggaran</th> 
							   <th>Point</th>   
							   <th>Action</th>
							</tr>
								<?php  
								    while($user_data = $result->fetch_array()) {         
									echo "<tr>";
									echo "<td>".@$user_data['pelanggaran']."</td>";
									echo "<td>".@$user_data['point']."</td>";
									echo "<td><a href='index.php?page=pelanggaran&action=edit&id=$user_data[id]'><i class='fa fa-edit '></i></a> | <a href='index.php?page=pelanggaran&action=delete&id=$user_data[id] 'onclick='return confirm(\"APA ANDA YAKIN INGIN MENGHAPUS INI?\")'><i class='fa fa-trash-o'></i></a></td></tr>";          
								}
								?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	


	
	
	
	
