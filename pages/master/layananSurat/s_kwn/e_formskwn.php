<div class="page-inner" style="color:#eb34e1"><br>
	<div class="page-header" style="color:#eb34e1">
		<h4 class="page-title" style="color:#eb34e1">Surat Keterangan Wali Nikah</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="index.php"><i class="flaticon-home" style="color:#eb34e1"></i></a>
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
    <div class="card">
        <div class="row">
            <div class="col-md-6">
                <form class="well form-horizontal" role="form" action="pages/master/layananSurat/s_kwn/e_cetak.php" method="post" target="_blank">
                    <h3 align="center" class="no-mar"><small style="font-size:25px; color:#eb34e1;" >Input Data Wali</small></h3>
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
                        <label class="control-label col-md-3" for="nik">Nik</label>
                        <div class="col-md-9">
                            <input type="text" name="nik" onkeyup="isi_otomatis()" id="nik" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Nama</label>
                        <div class="col-md-9">
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Tempat Lahir</label>
                        <div class="col-md-9">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Tgl Lahir</label>
                        <div class="col-md-9">
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Warga Negara</label>
                        <div class="col-md-9">
                            <input type="text" name="negara" id="negara" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Agama</label>
                        <div class="col-md-9">
                            <input type="text" name="agama" id="agama" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Pekerjaan</label>
                        <div class="col-md-9">
                            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Status</label>
                        <div class="col-md-9">
                            <input type="text" name="sts_nikah" id="sts_nikah" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Alamat</label>
                        <div class="col-md-9">
                            <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">RT</label>
                        <div class="col-md-9">
                            <input type="text" name="rt" id="rt" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">RW</label>
                        <div class="col-md-9">
                            <input type="text" name="rw" id="rw" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Desa</label>
                        <div class="col-md-9">
                            <input type="text" name="kel" id="kel" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Kecamatan</label>
                        <div class="col-md-9">
                            <input type="text" name="kec" id="kec" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Kabupaten</label>
                        <div class="col-md-9">
                            <input type="text" name="kab" id="kab" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="">Tgl Buat</label>
                        <div class="col-md-9">
                            <input type="date" name="tgl_buat" id="tgl-buat" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well form-horizontal">
                        <h3 align="center" class="no-mar"><small style="font-size:25px; color:#eb34e1;">Input Data Yang Akan Diwalikan</small></h3>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="nik">Nik</label>
                                <div class="col-md-9">
                                    <input type="text" name="nik1" onkeyup="isi_otomatis1()" id="nik1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Nama</label>
                                <div class="col-md-9">
                                    <input type="text" name="nama1" id="nama1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Tempat Lahir</label>
                                <div class="col-md-9">
                                    <input type="text" name="tempat_lahir1" id="tempat_lahir1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Tgl Lahir</label>
                                <div class="col-md-9">
                                    <input type="date" name="tgl_lahir1" id="tgl_lahir1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Warga Negara</label>
                                <div class="col-md-9">
                                    <input type="text" name="negara1" id="negara1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Agama</label>
                                <div class="col-md-9">
                                    <input type="text" name="agama1" id="agama1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Pekerjaan</label>
                                <div class="col-md-9">
                                    <input type="text" name="pekerjaan1" id="pekerjaan1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Status</label>
                                <div class="col-md-9">
                                    <input type="text" name="sts_nikah1" id="sts_nikah1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Alamat</label>
                                <div class="col-md-9">
                                    <input type="text" name="alamat1" id="alamat1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">RT</label>
                                <div class="col-md-9">
                                    <input type="text" name="rt1" id="rt1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">RW</label>
                                <div class="col-md-9">
                                    <input type="text" name="rw1" id="rw1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Desa</label>
                                <div class="col-md-9">
                                    <input type="text" name="kel1" id="kel1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Kecamatan</label>
                                <div class="col-md-9">
                                    <input type="text" name="kec1" id="kec1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="">Kabupaten</label>
                                <div class="col-md-9">
                                    <input type="text" name="kab1" id="kab1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-offset-6 col-md-7">
                                <button style="font-size:18px;background-color:#eb34e1;color:white" type="submit" class="btn" name="cetak">Cetak</button>
                                <button style="font-size:18px" type="text" class="btn btn-danger" name="cetak">Cancel</button>
                            </div>
                        </form>
                    </div>		
                </div>
            </div>
        </div>	
		<script src="js/jquery-3.4.1.min.js"></script>
		<script>
		    function isi_otomatis(){
				var nik = $('#nik').val();
                var tgl_buat = $('#tgl_buat').val(); 
				
				$.ajax({
					type:'get',
                    url: 'pages/master/layananSurat/s_kwn/proses_skwn.php',
					data: 'nik='+nik,
					success:function(data) {
						
					var json = data,
					obj = JSON.parse(json);
					$('#nik').val(obj.nik);
					$('#nama').val(obj.nama);
					$('#tempat_lahir').val(obj.tempat_lahir);
					$('#tgl_lahir').val(obj.tgl_lahir);
					$('#negara').val(obj.negara);
					$('#agama').val(obj.agama);
					$('#pekerjaan').val(obj.pekerjaan);
					$('#sts_nikah').val(obj.sts_nikah);
					$('#alamat').val(obj.alamat);
					$('#rt').val(obj.rt);
					$('#rw').val(obj.rw);
					$('#kel').val(obj.kel);
					$('#kec').val(obj.kec);
					$('#kab').val(obj.kab);
                    $('#tgl_buat')=val(tgl_buat);
					//alert(data);
					}
				})
				
				//alert(nik);
			}
			function isi_otomatis1(){
				var nik1 = $('#nik1').val(); 
				
					$.ajax({
					type:'get',
                    url: 'pages/master/layananSurat/s_kwn/proses_skwn1.php',
					data: 'nik1='+nik1,
					success:function(data) {
						
					var json = data,
					obj = JSON.parse(json);
					$('#nik1').val(obj.nik1);
					$('#nama1').val(obj.nama1);
					$('#tempat_lahir1').val(obj.tempat_lahir1);
					$('#tgl_lahir1').val(obj.tgl_lahir1);
					$('#negara1').val(obj.negara1);
					$('#agama1').val(obj.agama1);
					$('#pekerjaan1').val(obj.pekerjaan1);
					$('#sts_nikah1').val(obj.sts_nikah1);
					$('#alamat1').val(obj.alamat1);
					$('#rt1').val(obj.rt1);
					$('#rw1').val(obj.rw1);
					$('#kel1').val(obj.kel1);
					$('#kec1').val(obj.kec1);
					$('#kab1').val(obj.kab1);
					
					//alert(data);
					}
				})
				
				//alert(nik1);
			}
			
        </script>
    </div>
</div>