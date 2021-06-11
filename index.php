<? include("sistem/baglan.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Girişi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="logincontrol.php">
					<span class="login100-form-title">
						Admin Girişi
					</span>

					<div class="wrap-input100 validate-input" data-validate="Kullanıcı Adı Girmelisin">
						<input class="input100" type="text" name="username" placeholder="Kullanıcı Adı" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Şifre Girmelisin">
						<input class="input100" type="password" name="password" placeholder="Şifre" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<!--//!Güvenlik Kodu Alanı-->

					<p><b>Güvenlik Kodunu Giriniz</b></p>
					<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" style="width: 145px; height: 60px;" />

					<div class="wrap-input100 validate-input" data-validate="Güvenlik Kodu Girmelisin" style="width: 145px; height: 60px; float:right; ">

						<input class="input100" type="text" name="securitycode" placeholder="Giriniz.." required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i style="padding-bottom:8px;" class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>
					<a style="float:left; text-decoration:none;padding-left:59px;font-size:20px;" href="javascript:void(0)" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">
						<img src="refresh.png" width="25" height="25" alt=""></a>
					<!--Javascript:void(0) yazmamızın nedeni sayfayı yenilememesi için-->


					<!--//!###################-->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="giris">
							<i class="fa fa-sign-in-alt" aria-hidden="true" style="margin-right: 28px"></i>
							<div style="padding-right: 28px;">Giriş Yap</div>
						</button>
					</div>

					<div class="text-center p-t-136">
					</div>
				</form>
			</div>
		</div>
	</div>







	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>