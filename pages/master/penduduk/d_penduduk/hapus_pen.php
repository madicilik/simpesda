<?php
$koneksi=mysqli_connect("localhost", "root", "", "simpesda");
$nik_id=$_GET['nik_id'];
$sql=mysqli_query($koneksi, "delete from penduduk where nik_id='$nik_id'");

if ($sql) {
	echo "<script>alert('data berhasil dihapus');</script>";
	echo "<script>location='index.php?pages=datapenduduk';</script>";
	} 

?>