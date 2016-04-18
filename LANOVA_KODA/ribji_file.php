<?php 
    include 'header_home.php';
    include 'pdo-connect.php';
    
?>
<html>
<head>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
	</head>
	<body>
		<div id="page-wrapper">
		

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Admin tab</div>
					<div id="main" class="container_2">
						<div class="row 100%">
							<div class="8u 12u(mobile)">
								<section id="featured">
									<div id="content">
							<?php if ($_SESSION['admin'] == null)
        					{
        						 header('Location: index.php');
        					}
    
    						$stavek = $baza->prepare("SELECT * FROM ostalo ORDER BY id DESC");
							 $stavek->execute();
    
    						$row = $stavek->fetchall(); ?>
    						
    						

    						
    						
    						
									

								</div>
							</section>
						</div>
					</div>
				</div>
		</div>
		<div id="footer-wrapper" class="wrapper">
					<div class="title">Pošlji e-mail</div>
					<div id="footer" class="container">
						<?php
    							include 'send_mail.php';
    						?>
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
			<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script> <!-- TULE SO FUL FAJN GRAF -->
			<script src="https://code.highcharts.com/modules/data.js"></script>
			
			
			<script type="text/javascript">
				$(document).ready(function(){
					    $('#myTable').DataTable();
					});
			</script>
			
			
			<script>
				$(function () {
					
					    $(document).ready(function () {
					
					        // Build the chart
					        $('#graf').highcharts({
					            chart: {
					                plotBackgroundColor: null,
					                plotBorderWidth: null,
					                plotShadow: false,
					                type: 'pie'
					            },
					            title: {
					                text: 'Raznolikost '
					            },
					            tooltip: {
					                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					            },
					            plotOptions: {
					                pie: {
					                    allowPointSelect: true,
					                    cursor: 'pointer',
					                    dataLabels: {
					                        enabled: false
					                    },
					                    showInLegend: true
					                }
					            },
					            series: [{
					                name: 'Brands',
					                colorByPoint: true,
					                data: [{
					                    name: 'Microsoft Internet Explorer',
					                    y: 56.33
					                }, {
					                    name: 'Chrome',
					                    y: 24.03,
					                    sliced: true,
					                    selected: true
					                }, {
					                    name: '<?php echo $trol; ?>',
					                    y: 10.38
					                }, {
					                    name: 'Safari',
					                    y: 4.77
					                }, {
					                    name: 'Opera',
					                    y: 0.91
					                }, {
					                    name: 'Proprietary or Undetectable',
					                    y: 0.2
					                }]
					            }]
					        });
					    });
					});
			</script>
			
            
            
            
            
            
	</body>
</html>