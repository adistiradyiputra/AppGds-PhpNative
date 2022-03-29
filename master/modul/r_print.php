<?php
//koneksi ke database
	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS' ,'');
	define('DB_NAME', 'gds');

$connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//Memanggil file FPDF dari file yang anda download tadi
require('../fpdf/fpdf.php');
include 'koneksi.php';

//class pdf extends FPDF{
//	function letak($gambar){
		//memasukan gambar di header
//		$this->image($gambar,10,10,10,20);
//	}
//5

$pdf = new FPDF("P","cm","A4");

$pdf->SetMargins(2,0.5,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->ln(1);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(20,0.1,"YAYASAN TELEKOMUNIKASI NASIONAL",0,10,'C');
$pdf->ln(0.5);
$pdf->SetFont('Arial','B',17);
$pdf->Cell(20.5,0.1,"SMK INFORMATIKA DAN TELEKOMUNIKASI",0,10,'C');
$pdf->ln(0.5);
$pdf->SetFont('Arial','B',17);
$pdf->Cell(19.3,0.1,"(INFOKOM)",0,10,'C');
$pdf->ln(0.5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(20,0.1,"Jl.Letjend Ibrahim Adjie No.178, Sindang Barang, Kota Bogor,Jawa Barat",0,10,'C');
$pdf->ln(0.6);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(18.5,2.5,"SISTEM GERAKAN DISIPLIN SEKOLAH",0,0,'C');
$pdf->ln(0.5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(4.5,2.5,"Tanggal : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->ln(0.5);
$pdf->image('../infokom.png',2.3,0.8,3.4,3.0);
$pdf->ln(1.2);
$pdf->Line(1,4.3,20,4.3);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,4.3,20,4.3);
$pdf->ln(0.0);

//Tidak berpengaruh dengan database hanya sebagai keterangan pada tabel nantinya
$pdf->SetLineWidth(0);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'id', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Kelas', 1, 0, 'C');
$pdf->Cell(3.2, 0.8, 'Pelanggaran', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Point', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Note', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Tanggal', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
//$jumlah=0;

		$kelas = ($_POST['kelas']!='' ? 'AND s.kelas = "'.$_POST['kelas'].'"' : ''); 
		$tanggal = ($_POST['tanggal']!='' ? 'AND tp.tanggal = "'.$_POST['tanggal'].'"' : '');
//Panggil tblcomplaints dari database cms
$query=mysqli_query($koneksi,"SELECT 
											tp.id, s.nama, s.kelas, p.pelanggaran, p.point, tp.note, tp.tanggal
										FROM t_pelanggaran AS tp
											LEFT JOIN siswa AS s ON s.id = tp.id_siswa
											LEFT JOIN pelanggaran AS p ON p.id = tp.id_pelanggaran
										WHERE tp.id<>'' $kelas $tanggal
                       ");

while($lihat=mysqli_fetch_array($query)){
//Queri tabel yang ingin ditampilkan
 $pdf->Cell(1, 0.8, $no, 1, 0, 'C');
 $pdf->Cell(2, 0.8, $lihat['id'], 1, 0,'C');
 $pdf->Cell(2, 0.8, $lihat['nama'], 1, 0,'C');
 $pdf->Cell(2, 0.8, $lihat['kelas'],1, 0, 'C');
 $pdf->Cell(3.2, 0.8, $lihat['pelanggaran'], 1, 0,'C');
 $pdf->Cell(2, 0.8, $lihat['point'], 1, 0,'C');
 $pdf->Cell(3, 0.8, $lihat['note'], 1, 0,'C');
 $pdf->Cell(2.5, 0.8, $lihat['tanggal'], 1, 1,'C');
 //$jumlah = $jumlah +  $lihat['point'];
 $no++;
}
// $pdf->Cell(17.7, 0.8, 'Total', 1, 1, 'C');
$pdf->Output("laporan_gds.pdf","I");

?>