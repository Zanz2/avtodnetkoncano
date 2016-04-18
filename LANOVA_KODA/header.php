<?php


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
		  <link href="http://vjs.zencdn.net/5.8.7/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="submit.js"></script>
  
  <script src="js/jquery.min.js"></script>
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
        top: 15%;
        left: 15%;
        width: 70%;
        height: 60%;
        padding: 16px;
        border: 16px solid black;
        background-color: white;
        z-index:1002;
        overflow: auto;
    }
    
        .white_content2 {
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
</style>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="submit.js"></script>
  
  
  
	</head>
	<body class="right-sidebar">
            
                                    <div id="twilight" class="white_content">           
          <form method="POST" action="" name="logoutForm" id="logoutForm" style="display: <?php echo $display; ?>;">
        <input type='hidden' name='actionLogout' id='actionLogout' value='1'/>
        Logout: <input type="submit" value="Log out" name="logout" id="logout" />
    </form>
           </div>   
            
            
            
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">
		

		<div>	
			    <div id="light" class="white_content">
<div id="login-form">
<form method="POST" action="">
<table align="center" width="30%" border="0">
<tr>
<td> <input type="text" placeholder="Username" id="username" name="username" required="required" /></td>
</tr>
<tr>
<td> <input type="email" placeholder="Email" id="email" name="email" required="required" /></td>
</tr>
<tr>
<td>  <input type="password" placeholder="Password" id="password" name="password" required="required" /></td>
</tr>
<tr>
<td><input type="password" placeholder="Verify Password" id="password2" name="password2" required="required"></td>
</tr>
<tr>
<td><button type="button" onClick="submitdata();">Submit</button></td>
</tr>
<tr>
<td><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></td>
</tr>
</table>
</form>
</div>
</div>
    <div id="fade" class="black_overlay"></div>
			
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main2.js"></script> <!-- Gem jQuery -->
    </div>
    
    		<div>	
			    <div id="dark" class="white_content2">

<div id="login-form">
<form method ="POST" action="">
<table align="center" width="30%" border="0">
<tr><td><input type="text" id="username" name="username" placeholder="Username" class="input" autocomplete="off" id="username" /></td></tr>
<tr><td><input type="password" id="password" name="password" placeholder="Password" class="input" autocomplete="off" id="password" /><br/></td></tr>
<tr><td><input type="submit"  value="Log In" id="login"/> <br></td></tr>
<tr><td><a href = "javascript:void(0)" onclick = "document.getElementById('dark').style.display='none';document.getElementById('fade').style.display='none'">Close</a></td></tr>
<br>
</table>
                                         <?php
                if(isset($_GET['error']))
                {
                    echo $_GET['error'];
                }
               ?>  
<div id="error">

</div>
</form>
</div>
                              
    <div id="fade" class="black_overlay"></div>
</form>	    
    
    
    
</div>
    </div>                                                            
                                

    <div id="fade" class="black_overlay"></div>
			
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main2.js"></script> <!-- Gem jQuery -->
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="my_script.js"></script>
                </div></div></div></div>
    
   
						<!-- Logo -->
							<div id="logo">
								<h1>AVTOD.NET</h1>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="index.php">Home</a></li>
								
										<li><a href= "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Register</a></li>
											<li><a href="javascript:void(0)" onclick = "document.getElementById('dark').style.display='block';document.getElementById('fade').style.display='block'">Login</a></li>
										
									
									<li><a href="http://zigaprasnic97.hol.es/projekt/projekt-prasnic/">Galerija</a></li>
										
									
									<li><a href="video.php">Video Predvajalnik</a></li>
								
								</ul>
							</nav>

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

<!-- CHAT -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('5010-988-10-7951');/*]]>*/</script><noscript><a href="https://www.olark.com/site/5010-988-10-7951/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- CHAT -->
	</body>
</html>