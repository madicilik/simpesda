<div class="page-inner" style="color:#eb34e1">
    <div class="page-header" style="color:#eb34e1">
		<h4 class="page-title" style="color:#eb34e1">Penduduk</h4>
		<ul class="breadcrumbs">
			<li class="nav-home"><a href="index.php"><i class="flaticon-home" style="color:#eb34e1"></i></a></li>
			<li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="index.php" style="color:#eb34e1">Dashboard</a></li>
			<li class="separator"><i class="flaticon-right-arrow"></i></li>
			<li class="nav-item"><a href="#" style="color:#eb34e1">Data Penduduk</a></li>
		</ul>
	</div>
<?php
$koneksi=mysqli_connect("localhost", "root", "", "simpesda");
$pen=mysqli_query($koneksi, "select * from penduduk");
?>
    <div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					<button class="btn btn-round ml-auto" style="background-color:#eb34e1; color:white" data-toggle="modal" data-target="#addPendudukModal">
						<i class="fa fa-plus"></i> Tambah Data
					</button>
				</div>
			</div>
			<div class="card-body">
				<!-- Modal -->
				<?php include 'create.php' ?>
            	<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover">
						<thead>
							<tr style="background-color:#eb34e1;color:white">
								<th width="5%">No. </th>
								<th width="10%">NIK</th>
								
								<th>Nama</th>
								<th>Tempat/Tgl Lahir</th>
								<th>Jenisk</th>
								<th width="30%">Alamat</th>
								<th>Agama</th>
								<th>Status</th>
								<th>Pekerjaan</th>
								<th>Negara</th>
								<th style="width: 10%">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$no=1;
							while($data=mysqli_fetch_array($pen)) {
						?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nik'] ?></td>
								
								<td><?php echo $data['nama'] ?></td>
								<td><?php echo $data['tempat_lahir'].' , '.date('d-m-Y',strtotime($data['tgl_lahir'])) ?></td>
								<td><?php echo $data['jenisk'] ?></td>
								<td><?php echo $data['alamat'].' RT.'.$data['rt'].' RW.'.$data['rw'].' Desa. '.$data['kel'].' Kec. '.$data['kec'].' Kab. '.$data['kab'] ?></td>
								<td><?php echo $data['agama'] ?></td>
								<td><?php echo $data['sts_nikah'] ?></td>
								<td><?php echo $data['pekerjaan'] ?></td>
								<td><?php echo $data['negara'] ?></td>
								<td><div class="hidden-sm hidden-xs action-buttons">
									<a href="index.php?pages=e_penduduk&nik_id=<?php echo $data['nik_id'];?>" data-toggle="tooltip" data-original-title="Edit" class="btn-small"><i class="fas fa-edit"></i></a> |
									<a href="index.php?pages=hapus_pen&nik_id=<?php echo $data['nik_id'];?>" data-toggle="tooltip" data-original-title="Hapus" class="btn-small" style="color:red"><i class="fas fa-trash"></i></a></div>
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
