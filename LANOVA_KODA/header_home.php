
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
  <link rel="stylesheet" href="assets/css/style.css"/>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.ui.shake.js"></script>
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
</style>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="LANOVA_KODA/submit.js"></script>
  
  
  
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
<form action="" method="post">
<table align="center" width="30%" border="0">
<tr><td><input type="text" id="username" name="username" placeholder="Username" class="input" autocomplete="off" id="username"/></td></tr>
<tr><td><input type="password" id="password" name="password" placeholder="Password" class="input" autocomplete="off" id="password"/><br/></td></tr>
<tr><td><input type="submit" value="Log In" id="login"/> <br></td></tr>
<br>
<tr><td><span class='msg'></span> </td></tr>
</table>
</form>
</div>
<div id="error">

</div>	

<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
    <div id="fade" class="black_overlay"></div>
			
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main2.js"></script> <!-- Gem jQuery -->
    </div>
    
    		<div>	
			    <div id="dark" class="white_content">
<div id="login-form">
<form method="POST" action="">
<table align="center" width="30%" border="0">
<tr>
<td> <input type="text" placeholder="Username" id="username" name="username" /></td>
</tr>
<tr>
<td>  <input type="password" placeholder="Password" id="password" name="password" /></td>
</tr>
<tr>
<td><input type="password" placeholder="Verify Password" id="password" name="password2"</td>
</tr>
<tr>
<td><button type="button" onClick="submitdata();">Register</button></td>
</tr>
</table>
</form>
</div>
                                <a href = "javascript:void(0)" onclick = "document.getElementById('dark').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
    <div id="fade" class="black_overlay"></div>
</form>	    
    
    
    
</div>
    </div>                                                            
                                

    <div id="fade" class="black_overlay"></div>
			
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main2.js"></script> <!-- Gem jQuery -->
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="my_script.js"></script>
							<div id="logo">
								<h1>AVTOD.NET</h1>
                </div></div>
    
   
						<!-- Logo -->

							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
                                     <li><a href="projekt-prasnic/test2.php">Galerija1</a></li>
                                     <li><a href="projekt-prasnic/test.php">Galerija2</a></li>
                                     <li><a href="projekt-prasnic/gallery3.php">Galerija3</a></li>
								    <li><a href="projekt-prasnic/">ADMIN DOSTOP</a></li>
									</li>

									<li><a href="video.php">Video Predvajalnik</a></li>
									<li><a href="tabela.php">Izdelki</a></li>
                                     <?php
                                     //ČE JE UPORABNIK ADMIN, PRIKAŽ TOLE SPODNJE DVE VRSTI
                                    include 'db.php';
                                    
                                     $uporabniskoime = $_SESSION['login_user'];
                                      $sql = mysqli_query($db,"SELECT admin FROM users WHERE username='$uporabniskoime'");
                                      $row=mysqli_fetch_array($sql,MYSQLI_NUM);
                                      if($row[0]=="1")
                                      {
                                        $_SESSION['admin'] = 1;
                                     ?>
								    <li><a href="ribji_file.php">Admin</a></li>
									<li><a href="aktivna_tabela.php">Aktivna tabela</a></li>
									<?php   }          ?>
									<li><a href="upload_tabela.php">Upload tabele</a></li>
									<li><a href="user.php">Dobrodošli <?php
								 echo $_SESSION['login_user'];
								
									?></a></li>
                                                                        <li>
										                             <a href="logout.php">Logout</a>

									</li>
								</ul>
							</nav>
                                            
                                                

		<!-- Scripts -->

			<script src="LANOVA_KODA/assets/js/jquery.min.js"></script>
			<script src="LANOVA_KODA/assets/js/jquery.dropotron.min.js"></script>
			<script src="LANOVA_KODA/assets/js/skel.min.js"></script>
			<script src="LANOVA_KODA/assets/js/skel-viewport.min.js"></script>
			<script src="LANOVA_KODA/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="LANOVA_KODA/assets/js/main.js"></script>

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