<?php
include_once("db.php");
$db = new DB();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta https-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drag&amp;Drop Reorder</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- Add jQuery library -->
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script src="https://rawgithub.com/kayahr/jquery-fullscreen-plugin/master/jquery.fullscreen.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
                
	});
        
        $(".fancybox")
    .attr('rel', 'gallery1')
    .fancybox({
        beforeShow: function () {
            /* Add watermark */
            $('<div class="watermark"></div>')
                .bind("contextmenu", function (e) {
                    return false; /* Disables right click */
                })
                .prependTo( $.fancybox.inner );   
        },
        afterShow: function() { 
        $('<div class="expander"></div>').appendTo(this.inner).click(function() {
            $(document).toggleFullScreen();
        });
    },
    afterClose: function() {
        $(document).fullScreen(false);
    }
    });
});

$(document).bind("fullscreenerror", function() {
    alert("Browser rejected fullscreen change");
});
</script>
</head>

<body>
    &nbsp;&nbsp;<h1>&nbsp;&nbsp;GALERIJA 2 (FULLSCREEN IN WATERMARK)</h1>
    <br /><br />
    <?php 
			//Fetch all images from database
			$rows = $db->getRows();
			foreach($rows as $row): ?>
    
    <a class="fancybox" rel="gallery1" href="images/<?php echo $row['image']; ?>" title="Galerija SLIK">
	<img src="images/<?php echo $row['image']; ?>" height="100" width="150" alt="" />
    </a>
    
    <?php endforeach; ?>
</body>
</html>
