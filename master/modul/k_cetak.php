<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body>

	<center>

		<h2>Print</h2>

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Id</th>
			<th>Nama</th>
			<th width="5%">Kelas</th>
			<th>Pelanggaran</th>
			<th>Point</th>
			<th>Note</th>
			<th>Tanggal</th>
		</tr>
		
		<?php 
		$kelas = ($_POST['kelas']!='' ? 'AND s.kelas = "'.$_POST['kelas'].'"' : ''); 
		$tanggal = ($_POST['tanggal']!='' ? 'AND tp.tanggal = "'.$_POST['tanggal'].'"' : ''); 
		
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT 
											tp.id, s.nama, s.kelas, p.pelanggaran, p.point, tp.note, tp.tanggal
										FROM t_pelanggaran AS tp
											LEFT JOIN siswa AS s ON s.id = tp.id_siswa
											LEFT JOIN pelanggaran AS p ON p.id = tp.id_pelanggaran
										WHERE tp.id<>'' $kelas $tanggal
											");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['kelas']; ?></td>
			<td><?php echo $data['pelanggaran']; ?></td>
			<td><?php echo $data['point']; ?></td>
			<td><?php echo $data['note']; ?></td>
			<td><?php echo $data['tanggal']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
    
	<script>
		window.print();
	</script>

</body>
</html>