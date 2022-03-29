	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$cari = $_POST['cari'];
		$result = mysqli_query($link, "SELECT 
											tp.id, s.nama, s.kelas, p.pelanggaran, p.point, tp.note, tp.tanggal, s.id AS id_siswa
										FROM t_pelanggaran AS tp
											LEFT JOIN siswa AS s ON s.id = tp.id_siswa
											LEFT JOIN pelanggaran AS p ON p.id = tp.id_pelanggaran
										WHERE s.nama LIKE '%".$cari."%' OR s.kelas LIKE '%".$cari."%' OR p.pelanggaran LIKE '%".$cari."%' OR p.point LIKE '%".$cari."%' OR tp.note LIKE '%".$cari."%' OR tp.tanggal LIKE '%".$cari."%'
										ORDER BY s.nama ASC
									");
	}else{
		$result = mysqli_query($link, "SELECT 
											tp.id, s.nama, s.kelas, p.pelanggaran, p.point, tp.note, tp.tanggal, s.id AS id_siswa
										FROM t_pelanggaran AS tp
											LEFT JOIN siswa AS s ON s.id = tp.id_siswa
											LEFT JOIN pelanggaran AS p ON p.id = tp.id_pelanggaran
										ORDER BY s.nama ASC
									");
	}
	?>

<section class="content-header">
	  <h1>
		 Transaksi Pelanggaran
		<small>Master</small>
	  </h1>
	</section>
	
	<section class="content">
	    <?php if($_SESSION['level']=='0'){ ?>
		<a href='index.php?page=transaksi&action=add' class='btn btn-social-icon'><i class='fa fa-plus '></i></a>
		<?php } ?>
		<form action="" method="post" name="formcari" enctype="multipart/form-data">
	                     <input type="text" name="cari" id="cari"><input type="submit" name="Submit" value="cari"><a href="index.php?page=transaksi">tampilkan semua </a>
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
							   <th>Siswa</th>  
							   <th>Kelas</th>  
							   <th>Tanggal</th>  
							   <th>Pelanggaran</th> 
							   <th>Point</th> 
							   <th>Note</th> 
                               <?php if($_SESSION['level']=='0'){ ?>							   
							   <th>Action</th>
							   <?php } ?>
							</tr>
							    
								<?php  
								    while($user_data = $result->fetch_array()) {         
									echo "<tr>";
									echo "<td>".$user_data['nama']."</td>";
									echo "<td>".$user_data['kelas']."</td>";
									echo "<td>".date('d, F Y', strtotime($user_data['tanggal']))."</td>";
									echo "<td>".$user_data['pelanggaran']."</td>";
									echo "<td>".$user_data['point']."</td>";
									echo "<td>".$user_data['note']."</td>";
									if($_SESSION['level']=='0'){
									echo "<td><a href='index.php?page=transaksi&action=edit&id=$user_data[id]'><i class='fa fa-edit '></i></a> | <a href='index.php?page=detail&id_siswa=$user_data[id_siswa]'><i class='fa  fa-share '></i></a> |<a href='./modul/cetak.php?id=$user_data[id_siswa]'><i class='fa  fa-print '></i></a> | <a href='index.php?page=transaksi&action=delete&id=$user_data[id] 'onclick='return confirm(\"APA ANDA YAKIN INGIN MENGHAPUS INI?\")'><i class='fa fa-trash-o'></i></a></td></tr>";          
								}
									}
								?>
						
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	
  
  


	
	
	
	
