<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kalkulator Lingkaran</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">


			<div class="wrap-login100">
				
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Colorwheel.svg/220px-Colorwheel.svg.png" alt="IMG">
				</div>

	
				<form class="login100-form validate-form"action="index.php" method="post">
					
					<span class="login100-form-title">
						PERHITUNGAN LUAS LINGKARAN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "anda belum memasukkan variabel jari_jari">
						<input class="input100" type="text" name="jari_jari" placeholder="jari_jari">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-adjust" aria-hidden="true"></i>
						</span>
					</div>

					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"type="submit" name="submit" value ="hitung">
							hitung

						</button>


					</div>

					
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
						</a>
					</div>
				</form>

				<form class="login100-form">
					<div class="wrap-input100">
						<?php
							if (isset($_POST['submit'])){
							$jari_jari = $_POST['jari_jari'];
							
							$luas_lingkaran = 3.14 * $jari_jari ; // Menghitung luas segitiga
							
							echo "luas lingkaran adalah = $luas_lingkaran";
							
							}

						?>
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
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>