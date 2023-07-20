<div class="modal fade" id="addPendudukModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header border-0" style="background-color:#eb34e1; color:white">
				<h4 class="modal-title">
				<span class="fw-mediumbold">Tambah</span> 
				<span class="fw-light">Data Penduduk</span></h4>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-control" action="#" method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>NIK</label><input id="nik" name="nik" type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Kecamatan</label>
								<select class="form-control" name="kec">
									<option value="Sedong">Sedong</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Nama</label><input id="nama" name="nama" type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Kabupaten</label>
								<select class="form-control" name="kab">
									<option value="Cirebon">Cirebon</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Tempat Lahir</label><input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Propinsi</label>
								<select class="form-control" name="propinsi">
									<option value="Jawa Barat">Jawa Barat</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Tgl Lahir</label><input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Status Nikah</label>
								<select class="form-control" name="sts_nikah">
									<option value="Belum Kawin">Belum Kawin</option><option value="Kawin">Kawin</option><option value="Cerai">Cerai</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Jenis Kelamin</label>
								<select class="form-control" name="jenisk">
									<option value="Perempuan">Perempuan</option><option value="Laki-Laki">Laki-Laki</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Agama</label>
								<select class="form-control" name="agama">
									<option value="Islam">Islam</option><option value="Kristen">Kristen</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Alamat</label>
								<select class="form-control" name="alamat">
									<option value="Dusun I">Dusun I</option><option value="Dusun II">Dusun II</option><option value="Dusun III">Dusun III</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Pendidikan</label>
								<select class="form-control" name="pendidikan">
									<option value="SD">SD</option><option value="SMP">SMP</option><option value="SMA">SMA</option><option value="SMK">SMK</option>
									<option value="Diploma III">Diploma III</option><option value="S1">S1</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">RT</label>
								<select class="form-control" name="rt">
									<option value="001">001</option><option value="002">002</option><option value="003">003</option><option value="004">004</option>
									<option value="005">005</option><option value="006">006</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Pekerjaan</label><input id="pekerjaan" name="pekerjaan" type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">RW</label>
								<select class="form-control" name="rw">
									<option value="001">001</option><option value="002">002</option><option value="003">003</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Kewarganegaraan</label>
								<select class="form-control" name="negara">
									<option value="Indonesia">Indonesia</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group">
								<label>Kelurahan</label>
								<select class="form-control" name="kel">
									<option value="Winduhaji">Winduhaji</option>
								</select>
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
		$nik = $_POST['nik'];	
		$nama  = $_POST['nama'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$jenisk = $_POST['jenisk'];
		$alamat  = $_POST['alamat'];
		$rt    =$_POST['rt'];
		$rw  =$_POST['rw'];
		$kel =$_POST['kel'];
		$kec =$_POST['kec'];
		$kab = $_POST['kab'];
		$propinsi = $_POST['propinsi'];
		$agama = $_POST['agama'];
		$pendidikan = $_POST['pendidikan'];
		$sts_nikah = $_POST['sts_nikah'];
		$pekerjaan = $_POST['pekerjaan'];
		$negara = $_POST['negara'];
	
	$sql = mysqli_query($koneksi, "INSERT INTO penduduk(nik, nama, tempat_lahir, tgl_lahir, jenisk, alamat, rt, rw, kel, kec, kab, propinsi, agama, pendidikan, sts_nikah, pekerjaan, negara)
									VALUES('$nik', '$nama', '$tempat_lahir', '$tgl_lahir', '$jenisk', '$alamat', '$rt', '$rw', '$kel', '$kec', '$kab', '$propinsi', '$agama', '$pendidikan', '$sts_nikah', '$pekerjaan', '$negara')");
	if ($sql) {
		echo "<script>alert('data telah di simpan');</script>";
		echo "<script>location='?pages=datapenduduk';</script>";
	} else {
		echo "<script>alert('data gagal di simpan');</script>";
		echo "<script>location=?pages='create.php';</script>";
	}
}

?>
 