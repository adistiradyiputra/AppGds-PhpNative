<?php
	$id = $_GET['id_siswa'];
	
	// Fetech user data based on id
	$result = mysqli_query($link, "SELECT 
										tp.id, s.nama, s.kelas, p.pelanggaran, p.point, tp.note, tp.tanggal
									FROM t_pelanggaran AS tp
										LEFT JOIN siswa AS s ON s.id = tp.id_siswa
										LEFT JOIN pelanggaran AS p ON p.id = tp.id_pelanggaran
									WHERE tp.id_siswa='$id'
								");

?>

<section class="content-header">
	  <h1>
		  Detail Data 
		
	  </h1>
	</section>
	
	<section class="content">
	
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
							</tr>
							    
								<?php  
									$jumlah = 0 ;
								    while($user_data = $result->fetch_array()) {         
										echo "<tr>";
										echo "<td>".$user_data['nama']."</td>";
										echo "<td>".$user_data['kelas']."</td>";
										echo "<td>".date('d, F Y', strtotime($user_data['tanggal']))."</td>";
										echo "<td>".$user_data['pelanggaran']."</td>";
										echo "<td>".$user_data['point']."</td>";
										echo "<td>".$user_data['note']."</td>";
										echo "<tr>";
										$jumlah = $jumlah + $user_data['point'];
									}
									// $status='';
									// $warna='';
									// if($jumlah > 50){
									// 	$status= 'tidak aman';
									// 	$warna= 'red';
										
									// }else{
									// 	$status='aman';
									// 	$warna= 'green';
									// }
									
								?>
						
							<tr class="">
							   <th colspan="4">Total</th> 
							   <th colspan="2"><?php echo $jumlah; ?></th>  
							</tr>
							<tr class="">
							   <th colspan="4">status</th>
							   <th colspan="2"><font color="<?php echo  $warna; ?>"><?php echo  $status; ?></font></th>
                            </tr>							   
							
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	
  
  


	
	
	
	
