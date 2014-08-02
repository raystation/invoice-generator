<?php
	require_once "functions.php";
	// require_once "info.php";
	require_once "history/wired-norton-illustrations.php";
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	
	<meta charset="utf-8">
	<title>invoice-<?php echo downcase_space($projectName);?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>
<body>

	<div class="container">
		
		<div class="eight columns">
			<h1 class="logo"><a href="<?php echo $your_company["url"];?>" target='_blank'><?php echo $your_company["name"];?></a><br><?php echo $your_company["subtitle"];?></h1>
		</div>

		<section class="eight columns">
			<h6>INVOICE</h6>
			<p><?php get_date("date");?></p>
		</section>

		<div class="clear"></div>

		<section class="four columns">
			<hr>
			<h6>Project</h6>
			<?php html("p","$projectName<br>completed: $completed");?>
		</section>	

 		<section class="four columns">
			<hr>
			<h6>Client</h6>
			<?php 
				if ( is_null($contactName) ) { html("p",$company); }
				elseif ( is_null($company) ) { html("p",$contactName); } 
				else { html("p","$contactName<br>$company"); }
			?>
		</section>
		
		<section class="eight columns">
			<hr>
			<h6>Please send payment to</h6>
			<?php html("p","$your_name<br>$your_address_1<br>$your_address_2");?>
		</section>

		<div class="clear"></div>

		<section class="eight columns">
			<hr>
			<h6>Description</h6>
			<?php html("p",$description);?>
		</section>	


		<section class="eight columns">
			<hr>
			<h6>Total</h6>
			<?php 
			// html("p","$".get_total());
			echo get_total(false,5000);
			?>
		</section>	

		<div class="clear"></div>


		<section class="eight columns">
			<hr>
			<?php echo $message; ?>
		</section>
	
		<section class="eight columns">
			<hr>
			
			<li><a href="<?php echo $your_company["url"];?>"><?php echo $your_company["name"]; ?></a>

			<li class="social"><img src="img/icon/fb_icon.svg" alt=""><a target='_blank' href="<?php echo $facebook["url"];?>"><?php echo $facebook["display"];?></a>

			<li class="social"><img src="img/icon/tw_icon.svg" alt=""><a target='_blank' href="<?php echo $twitter["url"];?>"><?php echo $twitter["display"];?></a>

		</section>
	</div><!-- container -->
	

	<!-- DEBUG 
	==================================================-->
	<div class="responsive-indicator"></div>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>