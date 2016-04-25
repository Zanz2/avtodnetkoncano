<?php
session_start();
if(!empty($_SESSION['login_user']))
{
}

        include 'header_home.php';
        ?>

<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Avtod.NET | Video player</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
                <link rel="stylesheet" type="text/css" href="assets/css.player/leanbackPlayer.default.css"/>
                <script type="text/javascript" src="assets/js.player/leanbackPlayer.pack.js"></script>
                <script type="text/javascript" src="assets/js.player/leanbackPlayer.en.js"></script>
                <link rel="stylesheet" href="assets/css/style.css" />
		
		<!-- JS ZA VIDEO -->
    	<script type="text/javascript" src="assets/js/jquery.js"></script>
	    <script type="text/javascript" src="botr/upload.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
			
			<?php
                                include 'pdo-connect.php';
				
			?>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Video Player</div>
					<div id="main" class="container_2">
						<section id="features">
						<div class="row 100%">
							<div class="8u 12u(mobile)">

								<!-- Content -->
									<div id="content">
											<header class="style1">
												<h2>Video</h2>
											</header>

<div class="predvajalnik">   
<br>
<?php
    $stavek = $baza->prepare("SELECT * FROM video");
    $stavek->execute();
    $row = $stavek->fetchALL();
    
    foreach ($row as $value) 
    {
       $lmao = 'upload/'. $value['video_name'];
       if($value['filetype'] == "video/mp4")
       {
?>
                                                                                                                                                       
<div class="leanback-player-video">
    <!-- HTML5 <video> element -->
    <video width="480" height="320" preload="metadata" controls poster="./folder/poster.jpg">
        <!-- HTML5 <video> sources -->
		<source src="<?php echo $lmao; ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
    </video>
</div>
<br>
<br>

<?php
        }
        else
        {
?>
<br>
<div class="leanback-player-audio" width="350px">
    <!-- HTML5 <audio> element -->
    <audio preload="metadata" controls>
        <!-- HTML5 <audio> sources -->
        <source src="<?php echo $lmao; ?>" type='audio/ogg; codecs="vorbis"'/>
    </audio>
    <br>
    <br>
    <br>
</div>
</div>
</section>

<br>
<br>
<br>
<br>
<br>
<div class="predvajalnik" style="width:850px; float:left; margin-left:100px; margin-bottom:100px;">
<?php                                                                            
        }
    }
    
$_SESSION["adimn"] = "1";
if(!isset($_SESSION["admin"]))
{

?>
<form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file1" id="file1"><br>
  <input type="button" value="Upload File" onclick="uploadFile()">
  <progress class="progress-bar" id="progressBar" value="0" max="100" style="width:100%;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>
<?php
}
?>
</div>
<br>


<script>

function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "file_upload.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>
