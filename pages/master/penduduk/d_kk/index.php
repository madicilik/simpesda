<div class="page-inner" style="color:#eb34e1"><br>
    <div class="page-header" style="color:#eb34e1">
		<h4 class="page-title" style="color:#eb34e1">Kartu Keluarga</h4>
		<ul class="breadcrumbs">
			<li class="nav-home"><a href="index.php"><i class="flaticon-home" style="color:#eb34e1"></i></a></li>
			<li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="index.php" style="color:#eb34e1">Dashboard</a></li>
			<li class="separator"><i class="flaticon-right-arrow"></i></li>
			<li class="nav-item"><a href="#" style="color:#eb34e1">Data KK</a></li>
		</ul>
	</div>
	<?php
$koneksi=mysqli_connect("localhost", "root", "", "simpesda");
$krt=mysqli_query($koneksi, "select * from kk,penduduk where kk.kk_id=penduduk.nik_id");
?>
    <div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					<button class="btn btn-round ml-auto" style="background-color:#eb34e1; color:white" data-toggle="modal" data-target="#addKKModal">
						<i class="fa fa-plus"></i> Tambah Data
					</button>
				</div>
			</div>
			<div class="card-body">
				<!-- Modal -->
				<?php include 'create.php' ?>
            	<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover table-bordered">
						<thead>
							<tr style="background-color:#eb34e1;color:white">
								<th>No. </th>
								<th>NO KK</th>
								<th>Nama Lengkap</th>
								<th>Jenis Kelamin</th>
								<th>Alamat</th>
								<th>RT</th>
								<th>RW</th>
								<th>Kelurahan</th>
								<th>Kecamatan</th>
								<th>Kabupaten</th>
								<th>Propinsi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$no=1;
							while($data=mysqli_fetch_array($krt)) {
						?>	
						    <tr>
				 				<td><?php echo $no++ ?></td>
								<td><?php echo $data['no_kk'] ?></td>
								<td><?php echo $data['nama'] ?></td>
								<td><?php echo $data['jenisk'] ?></td>
								<td><?php echo $data['alamat'] ?></td>
								<td><?php echo $data['rt'] ?></td>
								<td><?php echo $data['rw'] ?></td>
								<td><?php echo $data['kel'] ?></td>
								<td><?php echo $data['kec'] ?></td>
								<td><?php echo $data['kab'] ?></td>
								<td><?php echo $data['propinsi'] ?></td>
								<td><div class="hidden-sm hidden-xs action-buttons">
									<a href="index.php?pages=e_kk&kk_id=<?php echo $data['kk_id'];?>" data-toggle="tooltip" data-original-title="Edit" class="btn-small"><i class="fas fa-edit"></i></a> |
									<a href="index.php?pages=hapuskk&kk_id=<?php echo $data['kk_id'];?>" data-toggle="tooltip" data-original-title="Hapus" class="btn-small" style="color:red"><i class="fas fa-trash"></i></a></div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
</div>
	