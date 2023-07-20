<div class="modal fade" id="addKKModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header border-0" style="background-color:#eb34e1; color:white">
				<h4 class="modal-title">
				<span class="fw-mediumbold">Tambah</span> 
				<span class="fw-light">Data Kartu Keluarga</span></h4>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php
				$koneksi = mysqli_connect("localhost","root","","simpesda");
				$query = mysqli_query($koneksi, "select * from kk");
    		?>
			<div class="modal-body">
				<form class="form-control" action="#" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>No kk</label><input id="no_kk" name="no_kk" type="text" class="form-control">
							</div>
						</div>
						
					</div>
					<div class="modal-footer border-0">
						<button type="submit" name="simpan" class="btn" style="background-color:#eb34e1; color:white">Simpan</button>
						<button type="button" href="index.php?pages=datakk" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
	$koneksi = mysqli_connect("localhost", "root", "", "simpesda");
	if(isset($_POST['simpan'])) {
		$no_kk = $_POST['no_kk'];
		
	
	$sql = mysqli_query($koneksi, "INSERT INTO kk(no_kk)
									VALUES('$no_kk')");
	if ($sql) {
		echo "<script>alert('data telah di simpan');</script>";
		echo "<script>location='?pages=datakk';</script>";
	} else {
		echo "<script>alert('data gagal di simpan');</script>";
		echo "<script>location=?pages='create.php';</script>";
	}
}

?>
 