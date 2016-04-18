<?php
include_once("db.php");
$db = new DB();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>jQuery Watermark Plugin Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style2.css" media="screen">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--[if !IE 7]>
        <style type="text/css">
            #main {display:table;height:100%}
        </style>
    <![endif]-->
</head>

<body>
    <main id="main">
        <div id="inner">

            <div id="content">
                
                    <?php 
			//Fetch all images from database
			$rows = $db->getRows();
			foreach($rows as $row): ?>
                
                <p>
                    <img class="watermark" src="images/<?php echo $row['image']; ?>" alt="Image">
                </p>
                
                <?php endforeach; ?>
            </div>

        </div>

    </main>

   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="dist/jquery.watermark.min.js" type="text/javascript"></script>
    <script src="script.js" type="text/javascript"></script>

</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>
