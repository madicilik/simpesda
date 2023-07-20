<div class="page-inner" style="color:#eb34e1"><br>
	<div class="page-header" style="color:#eb34e1">
		<h4 class="page-title" style="color:#eb34e1">Surat Keterangan Domisili</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="#"><i class="flaticon-home" style="color:#eb34e1"></i></a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item"><a href="index.php" style="color:#eb34e1">Beranda</a></li>
		</ul>
	</div>
    <?php
        $koneksi = mysqli_connect("localhost","root","","simpesda");
        $query = mysqli_query($koneksi, "select * from jenis_surat");
    ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="background-color:#eb34e1">
				    <div class="card-title text-white">Input Data Surat</div>
				</div>
				<div class="card-body">
                    <form action="pages/master/layananSurat/s_kd/e_cetak.php" method="post" target="_blank"> 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis Surat</label>
                                    <select name="id_surat" id="id_surat" class="form-control">
                                        <?php
                                            while ($js=mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?php echo $js ['id_surat']; ?>"><?php echo $js ['jenis_surat']; ?></option>
                                        <?php    } ?>
                                    </select>   
                                </div>
                                <div class="form-group">
                                    <label for="">NIK</label>
                                    <input type="text" class="form-control" id="nik" onkeyup="isi_otomatis()" name="nik">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                                <div class="form-group"> 
                                    <label for="">Jenis Kelamin</label> 
                                    <input type="text" class="form-control" id="jenisk" name="jenisk"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">Tempat Lahir</label> 
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">Tgl Lahir</label> 
                                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">Status</label> 
                                    <input type="text" class="form-control" id="sts_nikah" name="sts_nikah"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">Kewarganegaraan</label> 
                                    <input type="text" class="form-control" id="negara" name="negara"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">Agama</label> 
                                    <input type="text" class="form-control" id="agama" name="agama"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label for="">Pekerjaan</label> 
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">Tgl Buat</label> 
                                    <input type="date" class="form-control" id="tgl_buat" name="tgl_buat"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">Alamat</label> 
                                    <input type="text" class="form-control" id="alamat" name="alamat"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">RT</label> 
                                    <input type="text" class="form-control" id="rt" name="rt" required> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">RW</label> 
                                    <input type="text" class="form-control" id="rw" name="rw" required> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">Kelurahan</label> 
                                    <input type="text" class="form-control" id="kel" name="kel"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">Kecamatan</label> 
                                    <input type="text" class="form-control" id="kec" name="kec"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="">Kabupaten</label> 
                                    <input type="text" class="form-control" id="kab" name="kab"> 
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn" style="margin-left:600px;background-color:#eb34e1;color:white">Cetak</button>
                            <button type="text" name="cancel" class="btn btn-danger"><a href="index.php" style="color:white">Cancel</a></button>
                        </div>
                    </form>
                    <script src="assets/js/jquery-3.4.1.min.js"></script>
                    <script>
                        function isi_otomatis(){
                            var nik = $('#nik').val();
                            var tgl_buat = $('#tgl_buat').val();
                            
                            $.ajax({
                                type:'get',
                                url: 'pages/master/layananSurat/s_kd/proses_skd.php',
                                data: 'nik='+nik,
                                success:function(data) {
                                var json = data,
                                obj = JSON.parse(json);
                                $('#nik').val(obj.nik);
                                $('#nama').val(obj.nama);
                                $('#jenisk').val(obj.jenisk);
                                $('#tempat_lahir').val(obj.tempat_lahir);
                                $('#tgl_lahir').val(obj.tgl_lahir);
                                $('#sts_nikah').val(obj.sts_nikah);
                                $('#negara').val(obj.negara);
                                $('#agama').val(obj.agama);
                                $('#pekerjaan').val(obj.pekerjaan);
                                $('#alamat').val(obj.alamat);
                                $('#rt').val(obj.rt);
                                $('#rw').val(obj.rw);
                                $('#kel').val(obj.kel);
                                $('#kec').val(obj.kec);
                                $('#kab').val(obj.kab);
                                $('#tgl_buat')=val(tgl_buat);
                                //alert(data);
                                }
                            });
                            
                            
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div> 