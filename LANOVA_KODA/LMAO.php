<?php 
    include 'header_home.php';
    include 'pdo-connect.php';
    include 'pdo-connect2.php';
    
    
    
    $stavek = $baza1->prepare("SELECT count(*) FROM users WHERE news=1");
    $stavek->execute();
    
    $naroceni = $stavek->fetch(PDO::FETCH_ASSOC);
    
    $stavek = $baza1->prepare("SELECT count(*) FROM users WHERE news!=1");
    $stavek->execute();
    $naroceniNe = $stavek->fetch(PDO::FETCH_ASSOC);   
    
    
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
							<?php
    
    						$stavek = $baza->prepare("SELECT * FROM ostalo ORDER BY id DESC");
							 $stavek->execute();
    
    						$row = $stavek->fetchall(); ?>
    						<button id="gumb">Prikaži tortni diagram</button>
    						<button id="gumb1">Prikaži stolpični graf</button>
    						
									<div id="graf" style="display: none"></div>
    								<div id="graf2" style="display: none; min-width: 720px; height: 400px; margin: 0 auto" ></div>
    						
    						
									
	
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
					                name: 'Novice',
					                colorByPoint: true,
					                data: [{
					                    name: 'So naročeni',
					                    y: <?php echo $naroceni['count(*)']; ?>,
					                }, {
					                    name: 'Niso naročeni',
					                    y:  <?php echo $naroceniNe['count(*)']; ?>,
					                    sliced: true,
					                    selected: true
					                }]
					            }]
					        });
					    });
					});
			</script>
			
			<script>
				$(function () {
    $('#graf2').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Števeilo'
        },
        xAxis: {
            categories: ['Uporabniki'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Število uporabnikov',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ''
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'So naročeni',
            data: [<?php echo $naroceni['count(*)']; ?>]
        }, {
            name: 'Niso naročeni',
            data: [<?php echo $naroceniNe['count(*)']; ?>]
        }]
    });
});
			</script>
            
           <script>
				$(document).ready(function(){
				    $("#gumb").click(function(){
				        $("#graf").toggle();
				        $("#graf2").hide();
				    });
				});
				
				$(document).ready(function(){
				    $("#gumb1").click(function(){
				        $("#graf2").toggle();
				        $("#graf").hide();
				    });
				});
           </script> 
            
            
	</body>
</html>