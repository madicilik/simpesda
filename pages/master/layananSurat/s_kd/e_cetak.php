<?php

require('../../../../fpdf/fpdf.php');
$koneksi = mysqli_connect("localhost","root","","simpesda");
$nama    =$_POST['nama'];
$tempat_lahir =$_POST['tempat_lahir'];
$tgl_lahir =$_POST['tgl_lahir'];
$jenisk   =$_POST['jenisk'];
$agama    =$_POST['agama'];
$negara  =$_POST['negara'];
$pekerjaan =$_POST['pekerjaan'];
$sts_nikah    =$_POST['sts_nikah'];
$alamat	 =$_POST['alamat'];
$rt	 =$_POST['rt'];
$rw	 =$_POST['rw'];
$kel	 =$_POST['kel'];
$kec =$_POST['kec'];
$kab =$_POST['kab'];
$tgl_buat   =$_POST['tgl_buat'];
$id_surat =$_POST['id_surat'];
$nik = $_POST['nik'];
$simpan = mysqli_query ($koneksi, "insert into arsip(id_arsip,id_surat,nik) values (null, '$id_surat', '$nik')");


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Ln(8);
$pdf->image('../../../../images/logo_c.png',22,18,21,17);
$pdf->Cell(22);
$pdf->Cell(0,6,'PEMERINTAH DESA WINDUHAJI',0,1,'C');
$pdf->Cell(22);
$pdf->Cell(0,6,'KECAMATAN SEDONG KABUPATEN CIREBON',0,1,'C');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(22);
$pdf->Cell(0,6,'Alamat : Jl. Raya Winduhaji No.11 Blok Pahing Rt.002 Rw.001 Desa Winduhaji Kec. Sedong Kab. Cirebon',0,1,'C');
$pdf->SetLineWidth(1);
$pdf->Line(20,38,190,38,20);
$pdf->SetLineWidth(0);
$pdf->Line(20,39,190,39,20);
$pdf->Ln(9);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(195,5,'SURAT KETERANGAN DOMISILI',0,1,'C');
$pdf->SetLineWidth(0);
$pdf->Line(78,49,137,49);
$pdf->SetFont('Arial','',12);
$pdf->Cell(195,5,'Nomor : 4253 /     / XI / 2020',0,1,'C');
$pdf->SetFont('Arial','',12);
$pdf->Ln(7);
$pdf->Cell(17);
$pdf->Cell(0,6,'Dengan ini kepala Desa Winduhaji Kecamatan Sedong Kabupaten Cirebon,',0,1);
$pdf->Cell(12);
$pdf->Cell(0,6,'menerangkan dengan sebenarnya bahwa:',0,1);
$pdf->Ln(7);

$pdf->SetFont('Arial','',12);
$pdf->Cell(17);
$pdf->Cell(10,7,'Nama',0,0,'L');
$pdf->Cell(35);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(3);
$pdf->Cell(10,7,$nama,0,1 ,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Tempat / Tgl. Lahir',0,0,'L');
$pdf->Cell(35);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(3);
$pdf->Cell(10,7,$tempat_lahir,0,0,'L');
$pdf->Cell(6);
$pdf->Cell(1,7,',',0,0,'L');
$pdf->Cell(1);
$pdf->Cell(3,7,$tgl_lahir,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Jenis Kelamin',0,0,'L');
$pdf->Cell(35);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(3);
$pdf->Cell(10,7,$jenisk,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Agama',0,0,'L');
$pdf->Cell(35);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(3);
$pdf->Cell(11,7,$agama,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Bangsa',0,0,'L');
$pdf->Cell(35);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(3);
$pdf->Cell(10,7,$negara,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Pekerjaan',0,0,'L');
$pdf->Cell(35);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(2);
$pdf->Cell(10,7,$pekerjaan,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Status Perkawinan',0,0,'L');
$pdf->Cell(35);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(3);
$pdf->Cell(10,7,$sts_nikah,0,1,'L');
$pdf->Cell(17);
$pdf->Cell(10,7,'Alamat',0,0,'L');
$pdf->Cell(35);
$pdf->Cell(2,7,':',0,0,'L');
$pdf->Cell(3);
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
$pdf->Cell(67);
$pdf->Cell(10,8,'Kec.',0,0,'L');
$pdf->Cell(26,8,$kec,0,0,'L');
$pdf->Cell(7);
$pdf->Cell(10,8,'Kab.',0,0,'L');
$pdf->Cell(10,8,$kab,0,1,'L');

$pdf->Ln(9);
$pdf->Cell(17);
$pdf->Cell(0,6,'Bahwa yang namanya diatas tersebut adalah warga Desa Winduhaji Kec. Sedong ',0,1);
$pdf->Cell(12);
$pdf->Cell(0,6,'Kab. Cirebon dan menurut pengamatan RT dan kepala Dusun setempat yang ',0,1);
$pdf->Cell(12);
$pdf->Cell(0,6,'bersangkutan benar-benar berdomisili pada alamat diatas.',0,1);
$pdf->Ln(7);
$pdf->Cell(17);
$pdf->Cell(0,6,'Demikian surat keterangan pengantar berdomisili kami berikan kepada yang ',0,1);
$pdf->Cell(12);
$pdf->Cell(0,6,'bersangkutan untuk dipergunakan sebagaimana mestinya.',0,1);
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
