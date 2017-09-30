<!DOCTYPE html>
<html>
	<head>
		<title>Zeipher Agency | web, email and branding agency for doctors and healthcare in Los Angeles, California.</title>
		<meta charset="UTF-8">
		<meta name="description" content="Zeipher Agency | A web agency that services the web and digital needs of those in healthcare">
		<meta name="keywords" content="Web Development, Web Design, email marketing, branding, graphic design, healtcare, medicine, doctors, Los Angeles, LA, California">
		<meta name="author" content="Entei Amaré">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" type="text/css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css" type="text/css" rel="stylesheet">
		<link href="css/main.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<?php include 'zeipher-analytics.php' ?>
		<?php include 'header.php' ?>
		<?php include 'main.php' ?>
		<?php include 'footer.php' ?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/parallax.min.js"></script>
		<script>//Parallax script
			$('.parallax-mirror').parallax({
				imageSrc: './img/hero.png'
			});
		</script>
		<script src="js/jquery.nav-min.js"></script>
		<script>//Jquery Nav script
			$(document).ready(function() {
				$('.main-nav').onePageNav({
					scrollThreshold: -20
				});
			});
		</script>
	</body>
</html>
