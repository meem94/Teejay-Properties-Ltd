<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>TeeJay Properties LTD</title>
	<link href="css_home/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js_home/jquery-1.11.0.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css_home/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mr Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--Google Fonts-->
	<link href='//fonts.googleapis.com/css?family=Hind:400,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
	<!--google fonts-->
	<!-- animated-css -->
	<link href="css_home/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js_home/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- animated-css -->
	<script src="js_home/bootstrap.min.js"></script>
</head>
<body>
	<!--header-top start here-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-4 top-social wow bounceInLeft" data-wow-delay="0.3s">
					<ul>
						<li><h5>Follow Us :</h5></li>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="tw"> </span></a></li>
						<li><a href="#"><span class="in"> </span></a></li>
						<li><a href="#"><span class="gmail"> </span></a></li>
					</ul>
				</div>
				<div class="col-md-8 header-address wow bounceInRight" data-wow-delay="0.3s">
					<ul>
						<li><span class="phone"> </span> <h6>(220) 280-31589</h6></li>
						<li><span class="email"> </span><h6><a href="mailto:info@example.com">Youremail@gmail.com</a></h6></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--header-top end here-->
	<!--header start here-->
	<!-- NAVBAR
		================================================== -->
		<div class="header">
			<div class="fixed-header">	

				<div class="navbar-wrapper">
					<div class="container">
						<nav class="navbar navbar-inverse navbar-static-top">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="logo wow slideInLeft" data-wow-delay="0.3s">
									<a class="navbar-brand" href="index.html"><img src="images/logo.png" /></a>
								</div>
							</div>
							<div id="navbar" class="navbar-collapse collapse">
								<nav class="cl-effect-16" id="cl-effect-16">
									<ul class="nav navbar-nav">
										<li><a  href="index.html" data-hover="Home">Home</a></li>
										<li><a href="about.html" data-hover="About">About</a></li>
										<li><a href="services.html" data-hover="Services">Services</a></li>
										<li><a class="active" href="room.html" data-hover="Rooms">Rooms</a></li>
										<li><a href="shortcodes.html" data-hover="Shortcodes">Shortcodes</a></li>
										<li><a href="contact.html" data-hover="Contact">Contact</a></li>						
									</ul>
								</nav>

							</div>
							<div class="clearfix"> </div>
						</nav>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--header end here-->
		<!--room start here-->
		<div class="rooms">
			<div class="container">
				<div class="rooms-main">
					<div class="room-head">
						<h3>Luxury Rooms</h3>
					</div>
					<?php
					$p = count($data);
					$i=-1;
					?>
					<div class="rooms-top">
						@for($i=0; $i<$p; $i++)
						<?php
						$d = $data[$i];
						?>
						@if($d->hover==0)
						<div class="rooms-left wow slideInLeft" data-wow-delay="0.3s">

							<div class="col-md-4 rooms-text">
								<h2>{{$d->header}}</h2>
								<p>{{$d->details}}</p>

							</div>
							<div class="col-md-8 rooms-img">
								<div class="luxury-block">
									<a href=img/{{$request}}/{{$d->file_path}}"> <img src="img/{{$request}}/{{$d->file_path}}" alt="" class="img-responsive"></a>
								</div>
							</div>				 
							<div class="clearfix"> </div>
						</div>
						@endif
						@if($i+1 < $p)
						<?php
						$i = $i+1;
						$dd = $data[$i];
						?>
						@if($dd->hover == 0)
						<div class="rooms-left1 wow slideInRight" data-wow-delay="0.3s">
							<div class="col-md-8 rooms-img ulta-img">
								<a href="img/{{$request}}/{{$dd->file_path}}"> <img  src="img/{{$request}}/{{$dd->file_path}}" alt="" class="img-responsive"></a>
							</div>
							<div class="col-md-4 rooms-text ulta-text">
								<h2>{{$dd->header}}</h2>
								<p>{{$dd->details}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
						@endif
						@endif
						@endfor
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--gallery start here-->
		<div class="gallery" id="gallery">
			<div class="container">
				<div class="gallery-main wow zoomIn" data-wow-delay="0.3s">
					<div class="gallery-top">
						<h1>More Pictures...</h1>
					</div>
					<div class="gallery-bott">
						@foreach($data as $d)
						@if($d->hover==1)
							<div class="col-md-4 col1 gallery-grid">
								<a href="img/{{$request}}/{{$d->file_path}}" rel="title" class="b-link-stripe b-animate-go  thickbox">

									<figure class="effect-bubba">
										<img class="img-responsive" src="img/{{$request}}/{{$d->file_path}}" alt="">
										<figcaption>
											<h4 class="gal"> Nemo voluptatem</h4>
											<p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
										</figcaption>			
									</figure>
								</a>
							</div>
						@endif
						@endforeach
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!--gallery end here-->
		<script src="js_home/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css_home/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
			$(function() {
				$('.gallery-grid a').Chocolat();
			});
		</script>

		<!--room end here-->
		<!--footer start here-->
		<div class="footer">
			<div class="container">
				<div class="footer-main">
					<div class="col-md-3 ftr-grid wow zoomIn" data-wow-delay="0.3s">
						<div class="ftr-logo">
							<img src="images/ftr-logo.png"  alt="">
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
						<a href="single.html" class="ftr-btn">Read More</a>
					</div>
					<div class="col-md-3 ftr-grid ftr-mid wow zoomIn" data-wow-delay="0.3s">
						<h3>Address</h3>
						<span class="ftr-line flm"> </span>
						<p>Eye Associates Of Virginia?</p>
						<p>5875 Bremo Road </p>
						<p>Richmond, VA(Virginia) 23226 </p>
						<p>(804) 287-4216 </p>
						<p>Alice Merriman</p>

					</div>
					<div class="col-md-3 ftr-grid ftr-rit wow zoomIn" data-wow-delay="0.3s">
						<h3>Contact Us</h3>
						<form>
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<input type="submit" value="Send" />
						</form>
						<ul class="ftr-icons">
							<li><a href="#"><span class="fa"> </span></a></li>
							<li><a href="#"><span class="tw"> </span></a></li>
							<li><a href="#"><span class="link"> </span></a></li>
							<li><a href="#"><span class="gmail"> </span></a></li>
						</ul>
					</div>
					<div class="col-md-3 ftr-grid ftr-last-gd ftr-rit wow zoomIn" data-wow-delay="0.3s">
						<h3>Quick Link</h3>
						<ul class="ftr-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Services </a></li>
							<li><a href="room.html">Rooms</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--footer end here-->
		<!--copy rights start here-->
		<div class="copy-right">
			<div class="container">
				<div class="copy-rights-main wow zoomIn" data-wow-delay="0.3s">
					<p>© 2016 Mr Hotel. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
			</div>
		</div>
	</body>
	</html>