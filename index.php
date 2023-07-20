<?php
session_start();
if(!isset($_SESSION['login'])) {
	header ('location:login.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Simpesda</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="images/download.png" type="image/x-icon"/>
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis2.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
	<div class="wrapper horizontal-layout-2">
		<?php include 'layouts/header.php' ?>
		<?php include 'layouts/navbar.php' ?>
		<div class="main-panel">
			<div class="container">
				
				<?php
					if(isset($_GET['pages'])){
						if($_GET['pages']== 'datapenduduk') {include 'pages/master/penduduk/d_penduduk/index.php'; }elseif($_GET['pages']== 'e_penduduk') {include 'pages/master/penduduk/d_penduduk/edit.php';
							}elseif($_GET['pages']== 'hapuspen') {include 'pages/master/penduduk/d_penduduk/hapuspen.php';
							}elseif($_GET['pages']== 'datakk') {include 'pages/master/penduduk/d_kk/index.php'; }elseif($_GET['pages']== 'e_kk') {include 'pages/master/penduduk/d_kk/edit.php';
							}elseif($_GET['pages']== 'hapuskk') {include 'pages/master/penduduk/d_kk/hapuskk.php';
							}elseif($_GET['pages']== 'layanansurat') {include 'pages/master/layanansurat/b_surat/index.php'; }elseif($_GET['pages']== 'e_kel') {include 'pages/master/penduduk/d_kelahiran/edit.php';
							}elseif($_GET['pages']== 'h_kel') {include 'admin/penduduk/dpkrgmampu/hapuskrg.php';
							}elseif($_GET['pages']== 'laporan') {include 'pages/master/laporan/index.php'; }elseif($_GET['pages']== 'e_kem') {include 'pages/master/penduduk/d_kematian/edit.php';
							}elseif($_GET['pages']== 'h_kem') {include 'pages/master/penduduk/d_kematian/hapuskem.php';
							}elseif($_GET['pages']== 'datapindah') {include 'pages/master/penduduk/d_pindah/index.php'; }elseif($_GET['pages']== 'e_pindah') {include 'pages/master/penduduk/d_pindah/edit.php';
							}elseif($_GET['pages']== 'h_pindah') {include 'pages/master/penduduk/d_pindah/hapuspin.php'; }
								elseif($_GET['pages']== 'e_skib'){include 'pages/master/layananSurat/s_kib/e_formskib.php';
								} elseif($_GET['pages']== 'e_sku'){include 'pages/master/layananSurat/s_ku/e_formsku.php'; 
							}elseif($_GET['pages']== 'e_skd'){include 'pages/master/layananSurat/s_kd/e_formskd.php'; 
							}elseif($_GET['pages']== 'e_skbm'){include 'pages/master/layananSurat/s_kbm/e_formskbm.php';}
							
							elseif($_GET['pages']== 'e_skwn'){include 'pages/master/layananSurat/s_kwn/e_formskwn.php';
						 }
							
						}else{ include 'pages/dashboard/index.php';}
				?>
			</div>
		</div>
		<?php include 'layouts/footer.php' ?>
	</div>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<script src="assets/js/plugin/moment/moment.min.js"></script>
	<script src="assets/js/plugin/chart.js/chart.min.js"></script>
	<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
	<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
	<script src="assets/js/plugin/gmaps/gmaps.js"></script>
	<script src="assets/js/plugin/dropzone/dropzone.min.js"></script>
	<script src="assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>
	<script src="assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
	<script src="assets/js/plugin/summernote/summernote-bs4.min.js"></script>
	<script src="assets/js/plugin/select2/select2.full.min.js"></script>
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	<script src="assets/js/atlantis2.min.js"></script>
	<script src="assets/js/demo.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>