<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- jQuery UI Widget and Effects Core (custom download)
	     You can make your own at: http://jqueryui.com/download -->
	<script src="js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
	
	<!-- Latest version (3.0.6) of jQuery Mouse Wheel by Brandon Aaron
	     You will find it here: http://brandonaaron.net/code/mousewheel/demos -->
	<script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>

	<!-- jQuery Kinectic (1.5) used for touch scrolling -->
	<script src="js/jquery.kinetic.js" type="text/javascript"></script>

	<!-- Smooth Div Scroll 1.3 minified-->
	<script src="js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>

	<!-- If you want to look at the uncompressed version you find it at
	     js/jquery.smoothDivScroll-1.3.js -->

	<!-- Plugin initialization -->
	<script type="text/javascript">
		// Initialize the plugin with no custom options
		$(document).ready(function () {
			// None of the options are set
			$("div#makeMeScrollable").smoothDivScroll({
				autoScrollingMode: "onStart"
			});
		});
	</script>
<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
	
	<!-- Styles for my specific scrolling content -->
	<style type="text/css">

		#makeMeScrollable
		{
			width:100%;
			height: 330px;
			position: relative;
		}
		
		/* Replace the last selector for the type of element you have in
		   your scroller. If you have div's use #makeMeScrollable div.scrollableArea div,
		   if you have links use #makeMeScrollable div.scrollableArea a and so on. */
		#makeMeScrollable div.scrollableArea img
		{
			position: relative;
			float: left;
			margin: 0;
			padding: 0;
			/* If you don't want the images in the scroller to be selectable, try the following
			   block of code. It's just a nice feature that prevent the images from
			   accidentally becoming selected/inverted when the user interacts with the scroller. */
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-o-user-select: none;
			user-select: none;
		}
	</style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
			<div class="container custom-container">
			<div class="row-fluid">
				<div class="span1"><img src="./img/logo.png"/></div>
				<div class="span11">
					<img class="banner-image-height margin-right10" src="./img/banner.jpg">
					<img class="banner-image-height margin-right10" src="./img/banner2.jpg">
					<img class="banner-image-height margin-right10" src="./img/banner3.jpg">
					<img class="banner-image-height" src="./img/banner4.jpg">
				</div>
			</div>
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="row-fluid">
            	<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">Go on... hover over me!</marquee>
                
            </div>
            <div class="row-fluid background-color-black">
            	<div class="span1 links-seperators font-color-black"><a class="margin-left5" href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
                <div class="span1 links-seperators font-color-black"><a href="">Home</a></div>
            </div>

            <!-- Example row of columns -->
            <div class="row-fluid">
               <div class="span2">
               	<img style="height: 315px;width:145px;" src='http://www.idlebrain.com/images5/sky-sahasam2.jpg'>
               </div>
               <div class="span8 image-width margin-left0">
               		<img style="height: 315px;" alt="lorempixum" src="./img/banner.jpg" id="rotator">
               </div>
               <div class="span2 margin-left0 right-image-width">
               	<img style="height: 315px;width:145px;" src='http://www.idlebrain.com/images5/sky-balupu2.jpg'>
               </div>
            </div>
            <img src="http://www.idlebrain.com/images5/strip-somethingsomething.jpg" style="height:100px;">
            <img src="http://www.idlebrain.com/images5/main-pkc6.jpg" style="height:100px;">
            <div class="row-fluid margin-img100">
            	<?php
include("marquee.html");
            	?>

            </div>
            <img src="http://www.idlebrain.com/images5/strip-aaos.jpg" style="height:100px;">
            <div class="row-fluid margin-movie">
<div class="span4">
	<div class="card">
	<h6 class="align-center">Ready To Relase</h6>
	<p><img style="width:144px;height: 144px;" src="./img/s1.jpg"/><img style="width:144px;height: 144px;" src="./img/s1.jpg"/><img style="width:144px;height: 144px;" src="./img/s1.jpg"/></p>
</div>
</div>
<div class="span4">
	<div class="card">
	<h6 class="align-center">Now Playing</h6>

	
	<p><img style="width:144px;height: 144px;" src="./img/s1.jpg"/><img style="width:144px;height: 144px;" src="./img/s1.jpg"/><img style="width:144px;height: 144px;" src="./img/s1.jpg"/></p>
</div>
</div>
<div class="span4">
	<div class="card">
	<h6 class="align-center">Movie Collections</h6>
	<p><img style="width:144px;height: 144px;" src="./img/s1.jpg"/><img style="width:144px;height: 144px;" src="./img/s1.jpg"/><img style="width:144px;height: 144px;" src="./img/s1.jpg"/></p>
</div></div>
            </div>
        <img src="http://www.idlebrain.com/images5/strip-amat.jpg" style="height:100px;">
           <div class="row-fluid margin-top100">
				<div class="span4">
					<div class="card">
						<h6 class="align-center">Sports News.<img src="img/new.gif"></h6>
						<p><a href="http://full2bindasss.blogspot.com/2013/06/manabalam.html">ఈ రోజుల్లో సాయం చేయడం అన్నా ...</a></p>
					</div>
					<div class="row-fluid margin-top5">
						 <div class="span6 border-colored">
						 	<h5 class="align-center">Hot News</h5>
						 	<img style="width:144px;height: 144px;" src="./img/s1.jpg"/>
						 	<p class="padding-left5">Awesome Awesome Awesome Awesome</p>
						 </div>
						 <div class="span6 border-colored">
						 	<h5 class="align-center">Qucik Links</h5>
						 	<img style="width:144px;height: 144px;" src="./img/k1.jpg"/>
						 	<p class="padding-left5">Awesome Awesome Awesome Awesome</p>
						 </div>
						 
					</div>
				</div>
				<div class="span4">
					<div class="card">
						<h6 class="align-center">Political News.</h6>
						<p>This is awesome.This is awesome.This is awesome.This is awesome.This is awesome.This is awesome.</p>
					</div>
					<img class="margin-top5"  alt="lorempixum" src="./img/small1.jpg" id="smallImages">
				</div>
				<div class="span4">
					<div class="card">
						<h6 class="align-center">Cinema News.</h6>
						<p>This is awesome.This is awesome.This is awesome.This is awesome.This is awesome.This is awesome.</p>
					</div>
					<div class="pagination">
					  <ul>
					    <li><a href="#">Prev</a></li>
					    <li><a href="#"><iframe  src="http://www.youtube.com/embed/QJK1x4KekZw" frameborder="0" id="videoRotatr" allowfullscreen></iframe></a></li>
					    <li><a href="#">Next</a></li>
					  </ul>
					</div>
				</div>
			</div>
            <footer>
                <p>&copy; Company 2012</p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <script type="text/javascript">
			(function() {

				var rotator = document.getElementById('rotator');
				// change to match image ID
				var imageDir = './img/';
				// change to match images folder
				var delayInSeconds = 5;
				// set number of seconds delay
				// list image names
				var images = ['banner2.jpg', 'banner3.jpg'];
				// don't change below this line
				var num = 0;
				var changeImage = function() {
					var len = images.length;
					rotator.src = imageDir + images[num++];
					if (num == len) {
						num = 0;
					}
				};
				setInterval(changeImage, delayInSeconds * 1000);
			})();
		</script>
		<script type="text/javascript">
			(function() {

				var rotator = document.getElementById('smallImages');
				// change to match image ID
				var imageDir = './img/';
				// change to match images folder
				var delayInSeconds = 5;
				// set number of seconds delay
				// list image names
				var images = ['small2.jpg', 'small3.jpg'];
				// don't change below this line
				var num = 0;
				var changeImage = function() {
					var len = images.length;
					rotator.src = imageDir + images[num++];
					if (num == len) {
						num = 0;
					}
				};
				setInterval(changeImage, delayInSeconds * 1000);
			})();
		</script>
    </body>
</html>
