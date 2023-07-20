<?php
	$koneksi = mysqli_connect("localhost","root","","simpesda");
	$nik1 = $_GET['nik1'];
	$query = mysqli_query($koneksi, "select * from penduduk where nik='$nik1'");
	$dtpen = mysqli_fetch_array($query);
	$data = array(
		'nik1'	=> $dtpen['nik'],
		'nama1'		=> $dtpen['nama'],
		'jenisk1'	=> $dtpen['jenisk'],
		'tempat_lahir1'	=> $dtpen['tempat_lahir'],
		'tgl_lahir1'   => $dtpen['tgl_lahir'],
		'sts_nikah1'	=> $dtpen['sts_nikah'],
		'negara1' => $dtpen['negara'],
		'agama1'	=> $dtpen['agama'],
        'pekerjaan1'	=> $dtpen['pekerjaan'],
		'alamat1'	=> $dtpen['alamat'],
		'rt1'	=> $dtpen['rt'],
		'rw1'	=> $dtpen['rw'],
		'kel1'	=> $dtpen['kel'],
		'kec1'	=> $dtpen['kec'],
		'kab1'   => $dtpen['kab'],
		);
	echo json_encode($data);


?>