<?php
	$koneksi = mysqli_connect("localhost","root","","simpesda");
	$nik = $_GET['nik'];
	$query = mysqli_query($koneksi, "select * from penduduk where nik='$nik'");
	$dtpen = mysqli_fetch_array($query);
	$data = array(
		'nik'	=> $dtpen['nik'],
		'nama'		=> $dtpen['nama'],
		'jenisk'	=> $dtpen['jenisk'],
		'tempat_lahir'	=> $dtpen['tempat_lahir'],
		'tgl_lahir'   => $dtpen['tgl_lahir'],
		'sts_nikah'	=> $dtpen['sts_nikah'],
		'negara' => $dtpen['negara'],
		'agama'	=> $dtpen['agama'],
        'pekerjaan'	=> $dtpen['pekerjaan'],
        'pendidikan'	=> $dtpen['pendidikan'],
		'alamat'	=> $dtpen['alamat'],
		'rt'	=> $dtpen['rt'],
		'rw'	=> $dtpen['rw'],
		'kel'	=> $dtpen['kel'],
		'kec'	=> $dtpen['kec'],
		'kab'   => $dtpen['kab'],
		);
	echo json_encode($data);


?>