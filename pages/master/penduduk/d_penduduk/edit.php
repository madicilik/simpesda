<div class="page-inner" style="color:#eb34e1"><br>
    <div class="page-header" style="color:#eb34e1">
		<h4 class="page-title" style="color:#eb34e1">Penduduk</h4>
		<ul class="breadcrumbs">
			<li class="nav-home"><a href="index.php"><i class="flaticon-home" style="color:#eb34e1"></i></a></li>
			<li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="#" style="color:#eb34e1">Dashboard</a></li>
			<li class="separator"><i class="flaticon-right-arrow"></i></li>
			<li class="nav-item"><a href="#" style="color:#eb34e1">Edit Data Penduduk</a></li>
		</ul>
	</div>
    <?php
        $koneksi=mysqli_connect("localhost", "root", "", "simpesda");
        $nik_id=$_GET['nik_id'];
        $sql=mysqli_query($koneksi, "select * from penduduk where nik_id= $nik_id");
        $pend=mysqli_fetch_array($sql);
            ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">id</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" id="nik_id" name="nik_id" value="<?php echo $pend['nik_id']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Nik</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="nik" name="nik" value="<?php echo $pend['nik']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Nama</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="nama" name="nama" value="<?php echo $pend['nama']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Tempat Lahir</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="tempat_lahir" name="tempat_lahir" value="<?php echo $pend['tempat_lahir']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Tgl Lahir</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="tgl_lahir" name="tgl_lahir" value="<?php echo $pend['tgl_lahir']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="jenisk" name="jenisk" value="<?php echo $pend['jenisk']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Alamat</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="alamat" name="alamat" value="<?php echo $pend['alamat']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">RT</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="rt" name="rt" value="<?php echo $pend['rt']; ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">RW</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="rw" name="rw" value="<?php echo $pend['rw']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Kelurahan</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="kel" name="kel" value="<?php echo $pend['kel']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Kecamatan</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="kec" name="kec" value="<?php echo $pend['kec']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Kabupaten</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="kab" name="kab" value="<?php echo $pend['kab']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Propinsi</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="propinsi" name="propinsi" value="<?php echo $pend['propinsi']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Agama</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="agama" name="agama" value="<?php echo $pend['agama']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Pendidikan</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="pendidikan" name="pendidikan" value="<?php echo $pend['pendidikan']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Status Nikah</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="sts_nikah" name="sts_nikah" value="<?php echo $pend['sts_nikah']; ?>">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">Pekerjaan</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="pekerjaan" name="pekerjaan" value="<?php echo $pend['pekerjaan']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="update" class="btn" style="margin-left:700px;background-color:#eb34e1;color:white">Ubah</button>
            <a class="btn btn-danger" href="index.php?pages=datapenduduk" style="color:white">Cancel</a>
        </div>
    </form>
</div>
<?php
if (isset($_POST['update'])) {
	$nik  = $_POST['nik'];
	$nama  = $_POST['nama'];
	$tempat_lahir  = $_POST['tempat_lahir'];
	$tgl_lahir     = $_POST['tgl_lahir'];
	$jenisk = $_POST['jenisk'];
	$alamat   = $_POST['alamat'];
	$rt = $_POST['rt'];
	$rw = $_POST['rw'];
	$kel = $_POST['kel'];
	$kec = $_POST['kec'];
	$kab = $_POST['kab'];
	$propinsi = $_POST['propinsi'];
	$agama		   = $_POST['agama'];
	$pendidikan = $_POST['pendidikan'];
	$sts_nikah  = $_POST['sts_nikah'];
	$pekerjaan	   = $_POST['pekerjaan'];
	
	$sql2 = mysqli_query ($koneksi, "UPDATE penduduk set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenisk='$jenisk', alamat='$alamat', rt='$rt', rw='$rw',
                        kel='$kel', kec='$kec', kab='$kab', propinsi='$propinsi', agama='$agama', pendidikan='$pendidikan', sts_nikah='$sts_nikah', 
                        pekerjaan='$pekerjaan' WHERE nik_id = '$nik_id'");
	if ($sql2) {
		echo "<script>alert('data berhasil diupdate');</script>";
		echo "<script>location='?pages=datapenduduk';</script>";
	}else{
		echo "<script>alert('data gagal diupdate');</script>";
		echo "<script>location=?halaman='edit.php'; </script>";
	}	
}
?>