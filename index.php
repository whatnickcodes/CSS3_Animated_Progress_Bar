<!doctype html>
<html>
<head>
	<!-- Begin Meta -->
	<meta charset=utf-8>
	<meta name=author content="Nicholas Cerminara">
	<meta name=description content="An Open-Source and Free Animated Progress Bar made entirely in pure CSS3">
	<meta name=apple-mobile-web-app-status-bar-style content="black">
	<!-- End Meta -->
	
	<!-- Begin CSS -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
	<link href="progressbar.css" rel=stylesheet>
	<!-- End CSS -->

	<!-- Begin JS -->
		<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script<![endif]-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<!-- End JS -->
	
	<title>Pure CSS3 Progress Bar that's Open-Source and Free</title>
</head>

<body>

	<?php 
		$percent = '33';
	?>
		
	<style>
		.width { width: <?php echo $percent; ?>%; }
		
		@keyframes boomshakalaka {
			from 	{ width: 0%; }
			to 		{ width: <?php echo $percent; ?>%; }	
		}
		
		/* Safari Chrome */
		@-webkit-keyframes boomshakalaka {
			from 	{ width: 0%; }
			to 		{ width: <?php echo $percent; ?>%; }	
		}
		
		/* FireFox */
		@-moz-keyframes boomshakalaka {
			from 	{ width: 0%; }
			to 		{ width: <?php echo $percent; ?>%; }	
		}
		
		/* Opera */
		@-o-keyframes boomshakalaka {
			from 	{ width: 0%; }
			to 		{ width: <?php echo $percent; ?>%; }	
		}
		
		/* IE 10 */
		@-ms-keyframes boomshakalaka {
			from 	{ width: 0%; }
			to 		{ width: <?php echo $percent; ?>%; }	
		}
	</style>
	
	<div class="bar_shell">
		<span class="bar aesthetics boomshakalaka width"></span>
	</div>
	
</body>
</html>




