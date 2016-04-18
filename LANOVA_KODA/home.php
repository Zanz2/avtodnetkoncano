<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}
?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Avtod.NET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
		
		
	<link rel="stylesheet" href="assets/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="assets/css/style.css"> <!-- Gem style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	
	</head>
	<body class="homepage">

		
		<div id="page-wrapper">

			<!-- Header -->
			
			<?php
				include 'header_home.php'
			?>
			
			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">Naša stran:</div>
					<section id="intro" class="container">
						<p class="style1">Prodaja novih in rabljenih delov</p>
						
						<p class="style3">Na naši strani si lahko ogledate seznam vseh rabljenih delov za določen avtomobil, in nakup le teh.</p>
						<p class="style3">Uporabnik lahko tudi pogleda različne slike in videe, ki jih tudi lahko naloži po želji.</p>
					</section>
				</div>
			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Osnovni podatki:</div>
					<div id="main" class="container">
						<!-- Features -->
							<section id="features">
								<header class="style1">
									<h2>Lokacija</h2>
									<br>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1873.0621543852153!2d15.113929828127857!3d46.36112544464024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x96dc8aaac2424d48!2s%C5%A0olski+center+Velenje!5e1!3m2!1ssl!2sus!4v1460962838498" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
									<p>Šolski Center Velenje - Elektro in Računalniška šola</p>
								</header>
								<div class="feature-list">
									<div class="row">
										
									</div>
								</div>
							</section>

					</div>
				</div>

			

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title">Zaključek</div>
					<div id="footer" class="container">
						Zahvaljujemo se vam za obisk naše strani in obiščite naš še kdaj xd
					</div>
					
				</div>

		</div>

		<!-- Scripts -->

			<script src="LANOVA_KODA/assets/js/jquery.min.js"></script>
			<script src="LANOVA_KODA/assets/js/jquery.dropotron.min.js"></script>
			<script src="LANOVA_KODA/assets/js/skel.min.js"></script>
			<script src="LANOVA_KODA/assets/js/skel-viewport.min.js"></script>
			<script src="LANOVA_KODA/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="LANOVA_KODA/assets/js/main.js"></script>
	</body>
</html>