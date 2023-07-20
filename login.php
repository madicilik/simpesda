<?php
session_start();

if(isset($_SESSION['login'])) {
	header ('location:index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="images/download.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
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
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.css">
</head>
<body class="login" style="background-image: url(images/photo_bg.jpeg)">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
            <img class="ml-5" src="images/logo-surat.png" width="250" height="70" alt="Logo">
            <h3></h3>
			<form class="login-form" action="" method="post">
				<div class="form-group">
					<label for="username" class="placeholder"><b>Username</b></label>
					<input id="username" name="username" placeholder="Nama" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password" class="placeholder"><b>Password</b></label>
					
					<div class="position-relative">
						<input id="password" name="password" type="password" placeholder="Password" class="form-control" required>
						<div class="show-password">
							<i class="icon-eye"></i>
						</div>
					</div>
				</div>
				<div class="form-group form-action-d-flex mb-3">
					
                    <button type="sumbit" name="login" class="btn col-md-12 float-right fw-bold" style="background-color:#eb34e1;color:white"><i class="icon icon-lock"></i> Masuk</button>
				</div>
			</form>
		</div>
	</div>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/atlantis.min.js"></script>
</body>
</html>
<?php

$koneksi= mysqli_connect ("localhost", "root", "", "simpesda");
if (isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query= mysqli_query ($koneksi,"SELECT * from users WHERE username= '$username' and password='$password'");
	if (mysqli_num_rows($query)==1) {
		$_SESSION['login']=true;
		header('location:index.php');
		
	} else {
		header('location:login.php');
		
	}
}
?>