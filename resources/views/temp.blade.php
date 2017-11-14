<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>TeeJay Properties LTD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--google fonts-->
    <!-- animated-css -->
    <link href="css_home/animate.css" rel="stylesheet" type="text/css" media="all">
    <!-- animated-css -->
    <link rel="stylesheet" href="css_home/chocolat.css" type="text/css" media="screen" charset="utf-8">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js_home/jquery-1.11.0.min.js"></script>
    <script src="js_home/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js_home/bootstrap.min.js"></script> 
    <script src="js_home/jquery.chocolat.js"></script>
    <!--light-box-files -->
    <script type="text/javascript" charset="utf-8">
            $(function() {
                $('.gallery-grid a').Chocolat();
            });
        </script>

</head>

<body>

    <?php
        $link = 'https://www.airbnb.co.uk/rooms/20995187?location=Leswin%20Place%2C%20London%20N16%207NJ&adults=1&children=0&infants=0&s=ZGqAJ0P9';
    ?>
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
                           <div class="wow fadeInLeft animated" data-wow-delay="0.3s">
                                <a class="navbar-brand"  href="{{ url('/') }}"><img style="max-width: 250px;" src="images/logo.png" /></a>
                          </div>
                      </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <nav class="cl-effect-16" id="cl-effect-16">
                            <ul class="nav navbar-nav" style="font-family: Aladin; font-size: 20px; font-style: bold;">
                                <li><a  href="{{ url('/') }}" data-hover="Home">Home</a></li>
                                <li><a class="active" href="{{ url('/our_properties') }}" data-hover="Our Properties">Our Properties</a></li>  
                                <li><a  href="{{ url('/contact') }}" data-hover="Contact Us">Contact Us</a></li>                   
                            </ul>
                        </nav>

                    </div>

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
                        <h3 class="wow fadeInLeft animated" data-wow-delay=".5s">Our Properties</h3>
                    </div>
                    <div class="rooms-top">
                        
                        <div class="rooms-left wow slideInLeft" data-wow-delay="0.3s">
                            <div class="col-md-4 rooms-text">
                                <a href="{{ url ('/property_1') }}"> <h2 style="color:#ac2048;">5 Bed HOUSE! 2 Bath! Cute GARDEN! Stoke Newington</h2> </a>
                                <p style="margin-top: 15px;">This is a maisonette (two storeys) 5 bed room house with living room with a nice garden.4 bed room & one bathroom in upstairs. 2 room (1 bed room & 1 Living room in downstairs which decorated by a double bed, 1 sofa bed, bedside table, 1 wardrobe & TV), Kitchen & 2nd bathroom in downstairs. Room contains double bed, sofa bed, sofa, bedside table, wardrobe, chest top drawer. <br />
                                <a href="{{ url ('/property_1') }}"><u>Read More...</u></a>
                                </p>
                            </div> 

                            <div class="col-md-8 rooms-img">
                                <div class="luxury-block">
                                    <img styel="height=50%;" src="images/property1.jpg" alt="" class="img-responsive">  
                                </div>
                            </div>      
                            <div class="clearfix"> </div>
                        </div>

                        <div class="rooms-left wow slideInRight" data-wow-delay="0.1s">
                            <div class="col-md-4 rooms-text">
                                <a href="{{ url ('/property_2') }}"><h2 style="color:#ac2048;">Luxury 3 Bed House in Stock Newington</h2></a>
                                <p style="margin-top: 15px;">This a new build modern 3 bed room house with a huge living room & back garden; all new furniture, under floor heating system (temperature adjuster in every room) and hot water facilities with very good pressure of water.
                                3 bed room in upstairs. 2 room is double which contains double bed, sofa, bedside table, wardrobe etc.
                                Single room contains a double bed, chest top drawer. <br />
                                <a href="{{ url ('/property_2') }}"><u>Read More...</u></a>
                                </p>
                            </div> 
                            
                            <div class="col-md-8 rooms-img">
                                <div class="luxury-block">
                                    <img styel="height=50%;" src="images/property2.jpg" alt="" class="img-responsive">  
                                </div>
                            </div>      
                            <div class="clearfix"> </div>
                        </div>

                        <div class="rooms-left wow slideInLeft" data-wow-delay="0.1s">
                            <div class="col-md-4 rooms-text">
                                <a href="{{ url ('/property_3') }}"><h2 style="color:#ac2048;">Studio flat in King's Cross</h2></a>
                                <p style="margin-top: 15px;">It's a modern studio flat with separate kitchen (No door in between kitchen and room but it separated by a stairs, please see the photos), separate bathroom.Perfect flat for small families up to 2 people, Bright and quiet studio flat with its own entrance, separate kitchen and bathroom. Double bed, wardrobe, Tv, wifi, fully equipped kitchen, hairdryer,iron etc available. <br />
                                <a href="{{ url ('/property_3') }}"><u>Read More...</u></a>
                                </p>
                            </div> 

                            <div class="col-md-8 rooms-img">
                                <div class="luxury-block">
                                    <img styel="height=50%;" src="images/property3.jpg" alt="" class="img-responsive">  
                                </div>
                            </div>      
                            <div class="clearfix"> </div>
                        </div>
                        
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>

        <!--room end here-->
        
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