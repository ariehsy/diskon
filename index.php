<!DOCTYPE html>
<html lang="en">
<head>
	<title>PROGRAM DISKON</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/diskon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

	

	


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bgcyber.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="index.php" method="post">
					<span class="login100-form-title p-b-53">
						Program Menghitung Diskon
					</span>

					<!-- <a href="#" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a> -->

					<!-- <a href="#" class="btn-google m-b-20">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a> -->
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Jumlah Bayar
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100 uang" type="text" name="totalbeli" value="<?php if(!empty($_POST['totalbeli'])){ echo $_POST['totalbeli']; }?>"  >
						<!-- <input type="submit" value="<?php if(!empty($_POST['beli'])){ echo $_POST['beli']; }?>" name="beli"> -->
						<span class="focus-input100"></span>
					</div>
					
					<!-- <div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div> -->
					<!-- <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div> -->

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="beli" type="submit">
							Hitung Diskon
						</button>
					</div>
						
					<div class="w-full text-center p-t-55">
						<span class="txt2">
							<?php
							if (isset($_POST['beli'])){
							$totalbeli = $_POST['totalbeli'];
							$totalbeli = str_replace(".", "", $totalbeli);

								if (isset($totalbeli))

								{
										$toyar=intval($totalbeli);
										$diskon=0;	
										if ($toyar>=500000) $diskon=(0.5*$toyar);
										else if ($toyar>=100000) $diskon=(0.1*$toyar);
											else if ($toyar>=50000) $diskon=(0.05*$toyar);
												else
												print("Maaf Tidak Ada Diskon <br>\n");
												//printf("Jumlah Bayar = %d<br>\n",$toyar,2,",",".");

												echo "Jumlah Bayar = Rp ";
												echo number_format($toyar,2,",",".");
												echo "<br>";
												//printf("Diskon = %d<br>\n",$diskon,2,",",".");

												echo "Diskon = Rp ";
												echo number_format($diskon,2,",",".");
												echo "<br>";
												$totalbayar=$toyar-$diskon;
												//printf("<b>Total Bayar = %d<br></b>\n",$totalbayar,2,",",".");
												echo "<b>Total Bayar = </b> Rp ";
												echo number_format($totalbayar,2,",",".");
												echo "<br>";
												echo "<b>Total Bayar = Rp.";
												echo number_format($totalbayar,2,",",".");
									}
								}
							?>
						</span>

						<!-- <a href="#" class="txt2 bo1">
							Sign up now
						</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->
	<script src="js/jquery.mask.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
	// Format mata uang.
	$( '.uang' ).mask('#.##0', {reverse: true});

	})
	</script>
</body>
</html>