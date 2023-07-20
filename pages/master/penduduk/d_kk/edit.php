<div class="page-inner" style="color:#eb34e1"><br>
    <div class="page-header" style="color:#eb34e1">
		<h4 class="page-title" style="color:#eb34e1">Kartu Keluarga</h4>
		<ul class="breadcrumbs">
			<li class="nav-home"><a href="index.php"><i class="flaticon-home" style="color:#eb34e1"></i></a></li>
			<li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="#" style="color:#eb34e1">Dashboard</a></li>
			<li class="separator"><i class="flaticon-right-arrow"></i></li>
			<li class="nav-item"><a href="#" style="color:#eb34e1">Edit Data Kartu Keluarga</a></li>
		</ul>
	</div>
    <?php
        $koneksi=mysqli_connect("localhost", "root", "", "simpesda");
        $kk_id=$_GET['kk_id'];
        $sql=mysqli_query($koneksi, "select * from kk where kk_id= $kk_id");
        $krt=mysqli_fetch_array($sql);
            ?>
    <form action="" method="post" enctype="multipart/form-data"> 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label">id</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" id="kk_id" name="kk_id" value="<?php echo $krt['kk_id']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="" class="col-md-3 col-form-label" style="color:#eb34e1">No kk</label>
                    <div class="col-md-6 p-0">
                        <input type="text" class="form-control input-full" style="background:#e3e3e3" id="no_kk" name="no_kk" value="<?php echo $krt['no_kk']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="update" class="btn" style="margin-left:600px;background-color:#eb34e1;color:white">Ubah</button>
            <button type="text" name="cancel" class="btn btn-danger"><a href="index.php?pages=datakk" style="color:white">Cancel</a></button>
        </div>
    </form>
</div>
<?php
if (isset($_POST['update'])) {
    $kk_id = $_POST['kk_id'];
	$no_kk = $_POST['no_kk'];	
	
	
	$sql2 = mysqli_query ($koneksi, "UPDATE kk set no_kk='$no_kk' WHERE kk_id='$kk_id'");
	if ($sql2) {
		echo "<script>alert('data berhasil diupdate');</script>";
		echo "<script>location='?pages=datakk';</script>";
	}else{
		echo "<script>alert('data gagal diupdate');</script>";
		echo "<script>location=?halaman='edit.php'; </script>";
	}	
}
?>