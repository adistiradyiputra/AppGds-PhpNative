<?php


function totalSiswa($table)
{

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "gds";
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$data = mysqli_query($link, "SELECT count(*) AS jumlah FROM " . $table);
	// $data = mysqli_query($link,"select * from siswa ");
	$result = mysqli_fetch_array($data);

	return $result['jumlah'];
}

function hakAkses($level)
{
	if ($level == 0) {
		$hasil = '
	            <li class=" treeview">
	              <a href="#">
	                <i class="fa fa-dashboard"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i>
	              </a>
	              <ul class="treeview-menu">
	                <li ><a href="index.php?page=siswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
	                <li ><a href="index.php?page=pelanggaran"><i class="fa fa-circle-o"></i>Data Pelanggaran</a></li>
	           
	              </ul>
	            </li>
		';
	} else {
		$hasil = '';
	}
	return $hasil;
}
?>