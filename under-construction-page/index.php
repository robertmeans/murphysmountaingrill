<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Murphy's Mountain Grill - Evergreen, Colorado</title>
	<link rel="icon" type="image/ico" href="_images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Courgette|Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcS8gagJkuoY6gB3utE1iyZnWk4JG5Suw&callback=initMap"></script>
	<script src="js/google-map.js"></script>
	
</head>
<body>
<?php include_once("_includes/analyticstracking.php") ?>

<div id="top-of-page"></div>
<!-- <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a> -->

<nav>
	<ul>
		<li><a href="#menu" class="main-nav no-active-nav">Menu</a></li>
		<li><a href="#contact" class="main-nav">Directions</a></li>
	</ul>
		<div class="phone large-gone">
			<a class="phone-nav" tabIndex="-1" href="tel:(720)%20524-8621">(720) 524-8621</a>
		</div>
</nav>

<section id="intro">
	<div class="uc">
		<img src="_images/under-construction.png">
		<div class="uc-dark">
				<p>Our Website is under construction but the</p>
				<h2>Restaurant is Open!</h2>
				<p>&nbsp;</p>
				<p>Please find our menu and directions below</p>
				<p>and check us out on social media!</p>
				<div class="social-links">
					<a class="reset" href="https://www.facebook.com/MurphysMountainGrill/" target="_blank"><img src="_images/facebook.png" alt="Follow us on Facebook"></a><a class="reset" href="https://www.instagram.com/murphysmountaingrill/" target="_blank"><img src="_images/instagram.png" alt="Follow us on Instagram"></a>
				</div>
			</div>
	</div>
</section><!-- #intro -->

<article id="menu">
	<h2>Click for larger image</h2><br />
<div class="menu-wrap cf">

	<a class="reset" href="_images/murphys-apps.gif" target="_blank"><img src="_images/murphys-apps-thumbnail.gif" alt="Appetizers"></a>
	<a class="reset" href="_images/murphys-drinks.gif" target="_blank"><img src="_images/murphys-drinks-thumbnail.gif" alt="Drinks"></a>
	<a class="reset" href="_images/murphys-entrees.gif" target="_blank"><img src="_images/murphys-entrees-thumbnail.gif" alt="Entreés"></a>

</div><!-- .instruction-wrap -->

</article><!-- #instructions -->

<footer id="contact" class="cf">
	<div class="overlay" onClick="style.pointerEvents='none'"><!-- prevent wheel zoom over map --></div>
	<div id="map"></div>

	<div class="location">
		<p><span class="sm-gone"><i class="fa fa-map-marker"></i></span><a class="loc" tabIndex="-1" href="https://www.google.com/maps/place/39%C2%B038'02.1%22N+105%C2%B019'00.4%22W/@39.633908,-105.3173192,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d39.633907!4d-105.316772?hl=en-US" target="_blank">27906 Highway 74<span class="sm-gone">, </span><br class="lg-gone">Evergreen, CO 80439</a></p>
		<p><span class="sm-gone"><i class="fa fa-phone-square"></i></span><a class="loc" tabIndex="-1" href="tel:(720)%20524-8621">(720) 524-8621</a></p>
	</div>


	<?php
		function ewd_copyright($startYear) {
			$currentYear = date('Y');
			if ($startYear < $currentYear) {
				$currentYear = date('y');
				return "&copy; $startYear&ndash;$currentYear";
			} else {
				return "&copy; $startYear";
			}
		}
	 ?>	
	<div class="copyright cf">
		<p><?= ewd_copyright(2017); ?> Murphy's Mountain Grill | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>
	</div>
</footer>

<section id="h-space"></section>


<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="js/flexslider.js"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>