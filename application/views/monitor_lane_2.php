<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link rel="apple-touch-icon" href="favicon.png">
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<meta name="theme-color" content="#4287f5">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#4287f5">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#4287f5">
	<title>smart traffic system</title>
	<!-- Bootstrap core CSS -->
	<link href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->
<!-- Additional CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="<?=base_url()?>assets/css/templatemo-style.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/af-2.3.5/b-1.6.5/b-flash-1.6.5/b-print-1.6.5/r-2.2.7/sc-2.0.3/sl-1.3.1/datatables.min.css" />
<style type="text/css">
	@font-face {
		font-family: 'Technology-Bold';
		src: url('<?=base_url()?>Technology-Bold.ttf') format('truetype');
	}

	.timer{
		font-family: 'Technology-Bold';
		font-size: 55px;
		text-align: center;
		color: white;
	}
</style>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Header -->
				<header id="header">
					<div class="logo"> <a href="<?=base_url()?>">SMART TRAFFIC </a> </div>
				</header>
				<!-- Banner -->
				<!-- Services -->

				<section class="main-banner" class="pt-n5">
					<div class="container-fluid">
						<div class="container" style="border-radius: 30px; border-color: #eee; border-width: 10px; border-style: solid; background-color: black;">
							<div class="row pt-2 pb-2 " >
								<div class="col-md-8">
									<div class="embed-responsive embed-responsive-4by3">
										<iframe class="embed-responsive-item h-100 border border-danger" src="{camera_lane_2}video"></iframe>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-12 pb-2 pt-4">
											<h5 class="text-white">STATE OF LANE 2</h5>
										</div>
										<div class="col-md-4">
											<img src="<?=base_url()?>assets/images/all-removebg-preview.png" id="traffic_light_lane_2" class="img img-responsive" style="max-height: 280px; width: 110px;">
										</div>

										<div class="col-md-2">

										</div>

										<div class="col-md-4">
											<div class="container">
												<div class="col-md-12 pb-4">
													<iframe src="http://free.timeanddate.com/clock/i7oiedni/n119/szw110/szh110/hoc000/hbw2/cf100/hncccc/hcw2/fan3/fdi70/mqc000/mql10/mqw4/mqd98/mhc000/mhl10/mhw4/mhd98/mmc000/mml10/mmw1/mmd98" frameborder="0" width="110" height="110"></iframe>

												</div>

												<div class="col-md-12">
													<span id="timer" class="timer">0000</span>
													<br>
													<span class ="text-white text-right">seconds</span>
												</div>

											</div>

										</div>

										<div class="col-md-12">
											<div id="chart-container"></div>
										</div>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-4">

								</div>
							</div>
						</div>
					</div>
				</section>


				<!-- MultiStep Form -->
			</div>
		</div>
		<!-- Sidebar -->
		<div id="sidebar">
			<div class="inner">
				<!-- Search Box -->
				<section id="search" class="alt">
					<form method="get" action="#">
						<input type="text" name="search" id="search" placeholder="Search..." /> </form>
					</section>
					<!-- Menu -->
					<nav id="menu">
						<ul>
							<li><a href="<?=base_url()?>">HOME</a></li>
							<li><a href="<?=base_url()?>dashboard/logs">CAR DETECTION LOGS</a></li>
							<li><a href="<?=base_url()?>dashboard/flow">FLOW SETTINGS</a></li>
							<li><a href="<?=base_url()?>dashboard/licence">LICENCES RECORDS</a></li>
							<li> <span class="opener">LANE MONITORING</span>
								<ul>
									<li><a href="<?=base_url()?>dashboard/monitor">ALL</a></li>
									<li><a href="<?=base_url()?>dashboard/lane/lane1">LANE 1</a></li>
									<li><a href="<?=base_url()?>dashboard/lane/lane2">LANE 2</a></li>
									<li><a href="<?=base_url()?>dashboard/lane/lane3">LANE 3</a></li>
								</ul>
							</li>
							<li>
								<li><a href="<?=base_url()?>dashboard/check">SYSTEM CHECK</a>(status)</li>
							</ul>
						</nav>
						<!-- Footer -->
						<footer id="footer">
							<p class="copyright">Copyright &copy; 2021</p>
						</footer>
					</div>
				</div>
			</div>
			<!-- Scripts -->
			<!-- Bootstrap core JavaScript -->
			<script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
			<script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="<?=base_url()?>assets/js/browser.min.js"></script>
			<script src="<?=base_url()?>assets/js/breakpoints.min.js"></script>
			<script src="<?=base_url()?>assets/js/transition.js"></script>
			<script src="<?=base_url()?>assets/js/owl-carousel.js"></script>
			<script src="<?=base_url()?>assets/js/custom.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.23/af-2.3.5/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/r-2.2.7/sc-2.0.3/sl-1.3.1/datatables.min.js"></script>
			<script src='https://cdn.plot.ly/plotly-latest.min.js'></script>

			<script type="text/javascript">


				var link = "<?=base_url()?>";


				var src_images = {
					"red" : link + "assets/images/red-removebg-preview.png",
					"all" : link + "assets/images/all-removebg-preview.png",
					"green" : link + "assets/images/green-removebg-preview.png",
					"yellow" : link + "assets/images/yellow-removebg-preview.png",
				};


				var delay=0;
				var data = [
				{
					domain: { x: [0, 1], y: [0, 1] },
					value: undefined,
					title: { text: "TRAFFIC LEVEL" },
					type: "indicator",
					mode: "gauge+number"
				}
				];

				var layout = { width: 300, height: 300,  margin: { t: 0, b: 0 } ,
				paper_bgcolor: "black",
				font: { color: "white", family: "Arial" }};
				Plotly.newPlot('chart-container', data, layout);

				setTimeout(function(){
					$.ajax({url: link+"/end_point", success: function(result){


						var res = JSON.parse(result);

						data[0].value = res.lane_2_traffic;

						$.ajax({url: link+"/end_point/get_count", success: function(result){
										delay = result;
									}
								}
							);


						$("#timer").html(delay>1000?delay:delay>100?"0"+delay:delay>10?"00"+delay:"000"+delay);

						var src_lane2 = res.lane_2_light_state;


						$("#traffic_light_lane_2").attr("src", src_images[src_lane2]) ;

						console.log(data);

						Plotly.newPlot('chart-container', data, layout);

						console.log(res);



					}});
				},100);


				setInterval(function(){

					if (delay>0) {
						delay--;


						$.ajax({url: link+"/end_point/write_count/"+ delay, success: function(result){
										$("#timer").html(delay>1000?delay:delay>100?"0"+delay:delay>10?"00"+delay:"000"+delay);
									}
								}
							)
					}

					else{
						$.ajax({url: link+"/end_point", success: function(result){


							var res = JSON.parse(result);

							data[0].value = res.lane_2_traffic;

							delay = res.delay_light_change;

							$("#timer").html(delay>1000?delay:delay>100?"0"+delay:delay>10?"00"+delay:"000"+delay);

							var src_lane2 = res.lane_2_light_state;


							$("#traffic_light_lane_2").attr("src", src_images[src_lane2]) ;

							console.log(data);

							Plotly.newPlot('chart-container', data, layout);

							console.log(res);
						}
					})
					}

				},1000)



			</script>
		</body>


		</html>