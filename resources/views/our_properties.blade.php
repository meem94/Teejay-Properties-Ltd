<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>TeeJay Properties | Our Properties</title>
	<link rel="shortcut icon" type="image/png" href="favicon12.ico">
	<link href="css_home/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js_home/jquery-1.11.0.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css_home/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css_home/style1.css" rel="stylesheet" type="text/css" media="all" /> 
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
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
	<script src="js_home/modernizr.js"></script>
	<script>
		$(document).ready(function(){
			if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".branch-gd").click(function(e){
            	if (!$(this).hasClass("hover")) {
            		$(this).addClass("hover");
            	}
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
            	e.preventDefault();
            	e.stopPropagation();
            	if ($(this).closest(".branch-gd").hasClass("hover")) {
            		$(this).closest(".branch-gd").removeClass("hover");
            	}
            });
        } else {
            // handle the mouseenter functionality
            $(".branch-gd").mouseenter(function(){
            	$(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
            	$(this).removeClass("hover");
            });
        }
    });
</script>
<script src="js_home/bootstrap.min.js"></script>


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
    								<a class="navbar-brand"  href="{{ url('/') }}"><img style="max-width: 290px;" src="images/logo.png" /></a>
    							</div>
    						</div>
    						<div id="navbar" class="navbar-collapse collapse">
    							<nav class="cl-effect-16" id="cl-effect-16">
    								<ul class="nav navbar-nav" style="font-family: Aladin; font-size: 20px; font-style: bold;">
    									<li><a   href="{{ url('/') }}" data-hover="Home">Home</a></li>
    									<li><a  class="active" href="{{ url('/our_properties') }}" data-hover="Our Properties">Our Properties</a></li>  
    									<li><a  href="{{ url('/contact') }}" data-hover="Contact Us">Contact Us</a></li>                   
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
    					<h3>Our Properties</h3>
    				</div>
    				<div class="rooms-top">
    					<div class="rooms-left wow slideInLeft" data-wow-delay="0.3s">
    						<div class="col-md-4 rooms-text">
    							<h2><a href="{{ url ('/property_1') }}">5 Bed HOUSE! 2 Bath! Cute GARDEN! Stoke Newington</a></h2>
    							<p>This is a maisonette (two storeys) 5 bed room house with living room with a nice garden.4 bed room & one bathroom in upstairs. 2 room (1 bed room & 1 Living room in downstairs which decorated by a double bed, 1 sofa bed, bedside table, 1 wardrobe & TV), Kitchen & 2nd bathroom in downstairs. Room contains double bed, sofa bed, sofa, bedside table, wardrobe, chest top drawer.</p>
    							<div class="room-btn">
    								<a href="{{ url ('/property_1') }}" class="hvr-push">Read More</a>	
    							</div>		 	    
    						</div>
    						<div class="col-md-8 rooms-img">
    							<div class="luxury-block">
    								<a href="{{ url ('/property_1') }}"> <img src="images/property1.jpg" alt="" class="img-responsive"></a>		
    							</div>
    						</div>				 
    						<div class="clearfix"> </div>
    					</div>
    					<div class="rooms-left1 wow slideInRight" data-wow-delay="0.3s">

    						<div class="col-md-4 rooms-text ulta-text">
    							<h3><a href="{{ url ('/property_2') }}">Luxury 3 Bed House in Stock Newington</a></h3>
    							<p>This a new build modern 3 bed room house with a huge living room & back garden; all new furniture, under floor heating system (temperature adjuster in every room) and hot water facilities with very good pressure of water.
    								3 bed room in upstairs. 2 room is double which contains double bed, sofa, bedside table, wardrobe etc.
    							Single room contains a double bed, chest top drawer.</p>
    							<div class="room-btn">
    								<a href="{{ url ('/property_2') }}" class="hvr-push">Read More</a>	
    							</div>	
    						</div>
    						<div class="col-md-8 rooms-img ulta-img">
    							<a href="{{ url ('/property_2') }}"> <img src="images/property2.jpg" alt="" class="img-responsive"></a>
    						</div>
    						<div class="clearfix"> </div>
    					</div>
    					<div class="rooms-left wow slideInLeft" style="margin-top: 4em;" data-wow-delay="0.3s">
    						<div class="col-md-4 rooms-text">
    							<h2><a href="{{ url ('/property_3') }}">Studio flat in King's Cross</a></h2>
    							<p>It's a modern studio flat with separate kitchen (No door in between kitchen and room but it separated by a stairs, please see the photos), separate bathroom.Perfect flat for small families up to 2 people, Bright and quiet studio flat with its own entrance, separate kitchen and bathroom. Double bed, wardrobe, Tv, wifi, fully equipped kitchen, hairdryer,iron etc available.</p>
    							<div class="room-btn">
    								<a href="{{ url ('/property_3') }}" class="hvr-push">Read More</a>	
    							</div>		 	    
    						</div>
    						<div class="col-md-8 rooms-img">
    							<div class="luxury-block">
    								<a href="{{ url ('/property_3') }}"> <img src="images/property3.jpg" alt="" class="img-responsive"></a>		
    							</div>
    						</div>				 
    						<div class="clearfix"> </div>
    					</div>
    				</div>
    				<div class="clearfix"> </div>
    			</div>
    		</div>
    	</div>
    	<!-- room end here -->

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