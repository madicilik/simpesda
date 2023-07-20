<div class="page-inner" style="color:#eb34e1"><br>
    <div class="page-header" style="color:#eb34e1">
		<h4 class="page-title" style="color:#eb34e1">Data Surat Pengajuan</h4>
		<ul class="breadcrumbs">
			<li class="nav-home"><a href="index.php"><i class="flaticon-home" style="color:#eb34e1"></i></a></li>
			<li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="index.php" style="color:#eb34e1">Dashboard</a></li>
			<li class="separator"><i class="flaticon-right-arrow"></i></li>
			<li class="nav-item"><a href="#" style="color:#eb34e1">Data Surat Pengajuan</a></li>
		</ul>
	</div>
<?php
	$koneksi=mysqli_connect("localhost", "root", "", "simpesda");
	$query=mysqli_query($koneksi, "select arsip.*, jenis_surat.*, penduduk.*, count(arsip.id_surat) as jumlah_surat from arsip,jenis_surat,penduduk where arsip.id_surat=jenis_surat.id_surat
								and arsip.nik=penduduk.nik group by arsip.id_arsip");

?>
    <div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					
				</div>
			</div>
			<div class="card-body">
				<!-- Modal -->
				
            	<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover table-bordered">
						<thead>
							<tr style="background-color:#eb34e1;color:white">
								<th>No. </th>
								<th>Nik</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>RT</th>
								<th>RW</th>
								<th>Kelurahan</th>
								<th>Kecamatan</th>
								<th>Kabupaten</th>
								<th>Jenis Surat</th>
				
								<th>Jumlah Surat</th>
								
							</tr>
						</thead>
						<tbody>
						<?php
							$no=1;
							while($data=mysqli_fetch_array($query)) {
						?>	
						    <tr>
				 				<td><?php echo $no++ ?></td>
								<td><?php echo $data['nik'] ?></td>
								<td><?php echo $data['nama'] ?></td>
								<td><?php echo $data['alamat'] ?></td>
								<td><?php echo $data['rt'] ?></td>
								<td><?php echo $data['rw'] ?></td>
								<td><?php echo $data['kel'] ?></td>
								<td><?php echo $data['kec'] ?></td>
								<td><?php echo $data['kab'] ?></td>
								<td><?php echo $data['jenis_surat'] ?></td>
								<td><?php echo $data['jumlah_surat'] ?></td>
							</tr>
							<?php } ?>
						</tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
</div>
	