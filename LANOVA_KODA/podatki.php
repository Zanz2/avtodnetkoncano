
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Avtod.NET</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/style.css"/>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/main.css" />
<script src="js/jquery.ui.shake.js"></script>

	<script>
			$(document).ready(function() {
			
			$('#login').click(function()
			{
			var username=$("#username").val();
			var password=$("#password").val();
		    var dataString = 'username='+username+'&password='+password;
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			
 
			$.ajax({
            type: "POST",
            url: "ajaxLogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
            $("body").load("home.php").hide().fadeIn(1500).delay(6000);
            }
            else
            {
             $('#login_form').shake();
			 $("#login").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
			
			}
			return false;
			});
			
				
			});
		</script>


    <style>
    .black_overlay{
        display: none;
        position: fixed;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
    .white_content {
        display: none;
        position: fixed;
        top: 25%;
        left: 25%;
        width: 50%;
        height: 50%;
        padding: 16px;
        border: 16px solid black;
        background-color: white;
        z-index:1002;
        overflow: auto;
    }
    
    
    .prijavi
    {
        text-align: center;
        font-weight: bold;
    }
</style>




</head>

<body>
						

	
	
	
	
		<body class="homepage">

		
		<div id="page-wrapper">

			<!-- Header -->
</div>
		

		
			
			
			
			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">Naša stran:</div>
					<section id="intro" class="container">
						<p class="style1">Zakaj bi se prijavili?</p>
						
						<p class="style3">Na naši strani si lahko ogledate seznam vseh rabljenih delov za določen avtomobil, in nakup le teh.</p>
						<p class="style3">Uporabnik lahko tudi pogleda različne slike in videe, ki jih tudi lahko naloži po želji, če se prijavite.</p>
					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Osnovni podatki:</div>
					
					
					

					
					
					
					
					
								<div class= 'prijavi'>		<p> Torej kaj še čakate?  <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Prijavite se!</a> </p>  </div>
    <div id="light" class="white_content">
        
            <div id="login-form">
<form method ="POST" action="">
<table align="center" width="30%" border="0">
<tr><td><input type="text" id="username" name="username" placeholder="Username" class="input" autocomplete="off" id="username" /></td></tr>
<tr><td><input type="password" id="password" name="password" placeholder="Password" class="input" autocomplete="off" id="password" /><br/></td></tr>
<tr><td><input type="submit"  value="Log In" id="login"/> <br></td></tr>
<tr><td> <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></td></tr>
</table>
</form>
</div>
    
    
    
   	</div>
    <div id="fade" class="black_overlay"></div>
					
					
				<div class= 'prijavi'>	<p>Ali pojdite <a href="index.php">nazaj!</a></p> </div>
					
					
					
					
					
					
					
					
					
					
					
					
					
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

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>