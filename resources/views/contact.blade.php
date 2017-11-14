<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>TeeJay Properties | Contact</title>
	<link href="css_home/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!-- Custom Theme files -->
	<link href="css_home/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Teejay Properties LTD, Teejay Properties, Teejay" />
	<link rel="shortcut icon" type="image/png" href="favicon12.ico">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--Google Fonts-->
	<link href='//fonts.googleapis.com/css?family=Hind:400,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
	<!--google fonts-->
	<!-- animated-css -->
	<link href="css_home/animate.css" rel="stylesheet" type="text/css" media="all">
	<!-- animated-css -->
</head>
<body>
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
						<div class="wow fadeInLeft animated" style="display:table-cell; vertical-align:middle; text-align:center" data-wow-delay="0.3s">
							<a class="navbar-brand"  href="{{ url('/') }}"><img style="max-width: 250px;" src="images/logo.png" /></a>
						</div>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
                            <nav class="cl-effect-16" id="cl-effect-16">
                                <ul class="nav navbar-nav" style="font-family: Aladin; font-size: 20px; font-style: bold;">
                                    <li><a  href="{{ url('/') }}" data-hover="Home">Home</a></li>
                                    <li><a  href="{{ url('/our_properties') }}" data-hover="Our Properties">Our Properties</a></li>  
                                    <li><a  class="active"  href="{{ url('/contact') }}" data-hover="Contact Us">Contact Us</a></li>                   
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
<!--banner  start hwew-->
<div class="banner">
    <div class="container">
        <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
            <h2>TeeJay Properties LTD</h2>
            <h6>Welcome To Our Properties</h6>
            <p>A cheaper alternative to hotel accommodation or serviced apartments.</p>
        </div>
    </div>
</div>
<!--BANNER END HERE-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h2>Contact</h2>
			</div>
			<div class="contact-bottom">
				<div class="col-md-9 contact-left">
					 <form method="POST" id="contact-form" class="form-horizontal" action="{{ url('/sendmail') }}" onSubmit="alert('Thank you for your feedback!');"> 
					 	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="text" name="Name" id="Name" placeholder="Name" required>
						<input type="text" class="email" name="Email" id="Email" placeholder="Email" required>
						<textarea  name="Message" placeholder="Message" required></textarea>
						<input type="submit" name="submit" value="Submit" class="btn btn-success">
					</form>
				</div>
				<div class="col-md-3 contact-right">
					<h1>Phone</h1>
					<p>+447714950600</p>
					<p>+447763559751</p>
					<p><b>Email:</b> jaytholiday@gmail.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->

<!--copy rights start here-->
<div class="copy-right">
	<div class="container">
		<div class="copy-rights-main wow zoomIn" data-wow-delay="0.3s">
			<p>© 2016 Mr Hotel. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js_home/jquery-1.11.0.min.js"></script>
	<script src="js_home/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script src="js_home/bootstrap.min.js"></script>
</body>
</html>