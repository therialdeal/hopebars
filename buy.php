<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Hope A Social & People Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hope Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
       <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                });
            });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
                /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
                */
        $().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
</head>
<body>
<!-- header -->
    <div class="header">
        <div class="logo">
            <h1><a href="index.html">Hope Bars</a></h1>
        </div>  
<!-- start header menu -->
            <div class="header-top">
                <div class="head-nav">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.html">About Us</a></li>
                                    <li><a href="buy.php">Buy</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="search-box">
                    <div id="sb-search" class="sb-search">
                        <form>
                            <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search"> </span>
                            </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <!-- search-scripts -->
                    <script src="js/classie.js"></script>
                    <script src="js/uisearch.js"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                <!-- //search-scripts -->
            </div>
        <div class="clearfix"> </div>
    </div>
<!-- header -->
<!-- start banner -->
    <div class="banner">
        <div class="container">
            <div class="donate">
                <h1>MAKE A CONTRIBUTION TODAY!!!</h1>
                
                    <form name="_xclick" action="https://www.paypal.com/us/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_xclick" />
                    <input type="hidden" name="business" value="morrowalyssa@gmail.com" />
                    <input type="hidden" name="currency_code" value="USD" />
                    <input type="hidden" name="item_name" value="Hope Bars" />
                    <input type="hidden" name="amount" value="35" placeholder="Number of Boxes" />
                    <input type="text" name="quantity" value="1" placeholder="Number of Boxes" />
                    <input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
                    </form>
            </div>
        </div>
    </div>
<!-- end banner -->
<div class= "SMS">
  <?php 
    require_once('twilio-php-master/Services/Twilio.php');
    $client = new Services_Twilio("{{ michelle.becerra8@gmail.com }}", "{{ Dolphin1! }}");
    $client->account->messages->sendMessage("+17036786802", "+17039658010", "There’s something strange in my neighborhood. I don’t know who to call. Send help!"); ?>
</div>

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-left">
            <h3>E-Mail Us</h3>
            <p>Email : <a href="mailto:info@example.com">support@em2d.com</a></p>
        </div>
        <div class="col-md-3 footer-left">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="https://www.facebook.com/em2dproject"><i class="facebok"> </i></a></li>
                <li><a href="https://twitter.com/em2dproject"><i class="twiter"> </i></a></li>
                    <div class="clearfix"></div>    
            </ul>
        </div>
            <div class="clearfix"></div>
            <div class="foot-bottom">
                <p>Copyrights © 2015 Marss. All rights reserved</a></p>
            </div>
    </div>
</div>
<!-- footer -->
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
</body>
</html>