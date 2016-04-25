<?php
include_once("db.php");
$db = new DB();
?>
<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: ../index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drag&amp;Drop Reorder</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.reorder_link').on('click',function(){
		$("ul.reorder-photos-list").sortable({ tolerance: 'pointer' });
		$('.reorder_link').html('save reordering');
		$('.reorder_link').attr("id","save_reorder");
		$('#reorder-helper').slideDown('slow');
		$('.image_link').attr("href","javascript:void(0);");
		$('.image_link').css("cursor","move");
		$("#save_reorder").click(function( e ){
			if( !$("#save_reorder i").length )
			{
				$(this).html('').prepend('<img src="images/refresh-animated.gif"/>');
				$("ul.reorder-photos-list").sortable('destroy');
				$("#reorder-helper").html( "Reordering Photos - This could take a moment. Please don't navigate away from this page." ).removeClass('light_box').addClass('notice notice_error');
	
				var h = [];
				$("ul.reorder-photos-list li").each(function() {  h.push($(this).attr('id').substr(9));  });
				$.ajax({
					type: "POST",
					url: "order_update.php",
					data: {ids: " " + h + ""},
					success: function(html) 
					{
						window.location.reload();
						/*$("#reorder-helper").html( "Reorder Completed - Image reorder have been successfully completed. Please reload the page for testing the reorder." ).removeClass('light_box').addClass('notice notice_success');
						$('.reorder_link').html('reorder photos');
						$('.reorder_link').attr("id","");*/
					}
					
				});	
				return false;
			}	
			e.preventDefault();		
		});
	});
	
});
</script>
</head>

<body>

<video width="380" height="300" autoplay controls loop>
  <source src="logo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
    &nbsp;
    <video width="380" height="300" autoplay controls loop>
  <source src="video-1460975977.mp4" type="video/mp4">
  Your browser does not support the video tag.
    </video>
    
    <h1>&nbsp;&nbsp;&nbsp;Pozdravljeni na spletnem mestu AVTOD.NET</h1>
<div style="margin-top:50px;">
    
	<a href="https://koncanprojekt-zanr512.c9users.io/LANOVA_KODA/" class="btn moj" style="background-color:#CCCCCC">NAZAJ</a><a href="javascript:void(0);" class="btn outlined mleft_no reorder_link" id="save_reorder">reorder photos</a>
    <div id="reorder-helper" class="light_box" style="display:none;">1. Drag photos to reorder.<br>2. Click 'Save Reordering' when finished.</div>
    <div class="gallery">
        <ul class="reorder_ul reorder-photos-list">
        <?php 
			//Fetch all images from database
			$rows = $db->getRows();
			foreach($rows as $row): ?>
            <li id="image_li_<?php echo $row['id']; ?>" class="ui-sortable-handle"><a href="javascript:void(0);" style="float:none;" class="image_link"><img src="images/<?php echo $row['image']; ?>" alt=""></a></li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>
    <div style="margin-top:50px;">
        <a href="dodaj.php" class="btn outlined">DODAJ SLIKO</a> &nbsp;&nbsp;&nbsp; <a href="test3.php" class="btn moj">SPREMENI KONČNICE NA .PNG</a>&nbsp;&nbsp;&nbsp; <a href="test4.php" class="btn moj">.JPG</a>&nbsp;&nbsp;&nbsp; <a href="test6.php" class="btn moj">.JPEG</a>&nbsp;&nbsp;&nbsp; <a href="test5.php" class="btn moj">SPREMENI KONČNICE NA .BMP</a>
    </div>
    <br>
        <div style="margin-top:20px;">
        <a href="test2.php" class="btn moj" style="background-color:#e0ebf6">GALERIJA 1 (thumbnail)</a>
        <a href="test.php" class="btn moj" style="background-color:#e0ebf6">GALERIJA 2 (fullscreen/vodni žig)</a>
        <a href="gallery3.php" class="btn moj" style="background-color:#e0ebf6">GALERIJA 3 (za touchscreen)</a>
        <a href="test_zig.php" class="btn moj" style="background-color:#e0ebf6">SLIKE Z MOJIM VODNIM ŽIGOM</a>
        </div>
    </br>
</body>
</html>
