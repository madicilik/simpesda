<?php
// memanggil library FPDF

require('../../../../fpdf/fpdf.php');
$koneksi = mysqli_connect("localhost","root","","simpesda");
$nik    =$_POST['nik'];
$nama    =$_POST['nama'];
$tempat_lahir =$_POST['tempat_lahir'];
$tgl_lahir =$_POST['tgl_lahir'];
$jenisk	 =$_POST['jenisk'];
$negara  =$_POST['negara'];
$agama    =$_POST['agama'];
$pekerjaan =$_POST['pekerjaan'];
$sts_nikah    =$_POST['sts_nikah'];
$alamat	 =$_POST['alamat'];
$rt	 =$_POST['rt'];
$rw	 =$_POST['rw'];
$kel	 =$_POST['kel'];
$kec =$_POST['kec'];
$kab =$_POST['kab'];
$keperluan  =$_POST['keperluan'];
$masa_berlaku  =$_POST['masa_berlaku'];
$tgl_buat   =$_POST['tgl_buat'];

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',13);
// mencetak string  
$pdf->Image('../../../../images/logo_c.png',22,21,22,18);
$pdf->Ln(12);
$pdf->Cell(205,6,'PEMERINTAH DESA WINDUHAJI',0,1,'C');
$pdf->Cell(210,6,' KECAMATAN SEDONG KABUPATEN CIREBON',0,1,'C');

$pdf->SetFont('Arial','B',8); 
$pdf->Cell(215,6,'Alamat : Jl. Raya Winduhaji No.11 Blok Pahing Rt.002 Rw.001 Desa Winduhaji Kec. Sedong Kab. Cirebon',0,1,'C');
$pdf->SetLineWidth(1);
$pdf->Line(20,42,190,42,20);
$pdf->SetLineWidth(0);
$pdf->Line(20,43,190,43,20);
$pdf->Ln(9);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(190,5,'SURAT KETERANGAN BELUM MENIKAH',0,1,'C');
$pdf->SetLineWidth(0);
$pdf->Line(67,53,143,53);
$pdf->SetFont('Arial','',12);
$pdf->Cell(190,5,'Nomor : 000/1/     /2020',0,1,'C');


$pdf->SetFont('Arial','',12);
$pdf->Ln(7);
$pdf->Cell(17);
$pdf->Cell(105,12,'Yang bertanda tangan di bawah Kepala Desa Winduhaji Kec. Sedong Kab. Cirebon',0,1,'L');
$pdf->Cell(12);
$pdf->Cell(65,0,'dengan ini menerangkan bahwa :',0,1,'L');
$pdf->Ln(8);
$pdf->Cell(17);
$pdf->Cell(10,7,'Nik',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(5);
$pdf->Cell(10,7,$nik,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Nama',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(5);
$pdf->Cell(10,7,$nama,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Tempat / tgl.lahir',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(5);
$pdf->Cell(10,7,$tempat_lahir,0,0,'L');
$pdf->Cell(6);
$pdf->Cell(1,7,',',0,0,'L');
$pdf->Cell(1);
$pdf->Cell(3,7,$tgl_lahir,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Jenis Kelamin',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(5);
$pdf->Cell(10,7,$jenisk,0,1,'L'); 
$pdf->Cell(17); 
$pdf->Cell(10,7,'Negara',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(5);
$pdf->Cell(10,7,$negara,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Agama',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(5);
$pdf->Cell(10,7,$agama,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Pekerjaan',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(4);
$pdf->Cell(10,7,$pekerjaan,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Status',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(5); 
$pdf->Cell(10,7,$sts_nikah,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Alamat',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(5);
$pdf->Cell(10,8,$alamat,0,0,'L');
$pdf->Cell(7);
$pdf->Cell(7,8,'RT/',0,0,'L');
$pdf->Cell(10,8,$rt,0,0,'L');
$pdf->Cell(1);
$pdf->Cell(7,8,'RW/',0,0,'L');
$pdf->Cell(9,8,$rw,0,0,'L');
$pdf->Cell(1);
$pdf->Cell(11,8,'Desa',0,0,'L');
$pdf->Cell(11,8,$kel,0,1,'L');
$pdf->Cell(66);
$pdf->Cell(10,8,'Kec.',0,0,'L');
$pdf->Cell(26,8,$kec,0,0,'L');
$pdf->Cell(7);
$pdf->Cell(10,8,'Kab.',0,0,'L');
$pdf->Cell(10,8,$kab,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Keperluan',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(5);
$pdf->Cell(10,7,$keperluan,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Masa Berlaku',0,0,'L');
$pdf->Cell(32);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(5);
$pdf->Cell(10,7,$masa_berlaku,0,1,'L');

$pdf->Ln(9);
$pdf->Cell(17,6);
$pdf->Cell(105,6,'Nama diatas benar adalah penduduk Desa Winduhaji Kecamatan Sedong Kabupaten Cirebon',0,1);
$pdf->Cell(12,6);
$pdf->Cell(130,6,'dan sepanjang pengetahuan kami, serta catatan pada kami bahwa yang bersangkutan',0,1);
$pdf->Cell(12,6);
$pdf->Cell(130,6,'memang benar belum menikah dan masih berstatus lajang. ',0,1);

$pdf->Ln(8);
$pdf->Cell(17,6);
$pdf->Cell(130,6,'Demikian surat keterangan ini kami buat untuk dapat dipergunakan',0,1);
$pdf->Cell(12,6);
$pdf->Cell(125,6,'sebagaimana mestinya.',0,1);
$pdf->Ln(15);
$pdf->Cell(100);
$pdf->Cell(0,6,'Dikeluarkan di , Desa Winduhaji',0,1,'L');
$pdf->Cell(100);
$pdf->Cell(20,6,'Pada Tanggal ,',0,0,'L');
$pdf->Cell(9);
$pdf->Cell(10,6,$tgl_buat,0,1,'L');
$pdf->Cell(120);
$pdf->Cell(0,10,'Kepala Desa',0,1,'L');
$pdf->Ln(15);
$pdf->Cell(120);
$pdf->Cell(0,5,'Ikah Nurhanika',0,1,'L');

$pdf->Output();
?>