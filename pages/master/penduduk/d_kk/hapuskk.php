<?php
$koneksi=mysqli_connect("localhost", "root", "", "simpesda");
$kk_id=$_GET['kk_id'];
$sql=mysqli_query($koneksi, "delete from kk where kk_id='$kk_id'");

if ($sql) {
	echo "<script>alert('data berhasil dihapus');</script>";
	echo "<script>location='index.php?pages=datakk';</script>";
	} 

?>