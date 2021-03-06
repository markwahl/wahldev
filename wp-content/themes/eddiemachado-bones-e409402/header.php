<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header class="header" role="banner">
			
				<div id="inner-header" class="wrap clearfix">
					
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<!--<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>-->
					
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
					
					
					<nav role="navigation">
						<div id="logo"><img src="<?php bloginfo('siteurl'); ?>/assets/images/wahl_w.png" alt="Wahldev"></div>
						<div id="title">WAHLDEV</div>
						<?php bones_main_nav(); ?>
						<div id="social">
							<a href="https://plus.google.com/106646942468287477218/posts?tab=XX" target="_blank"><div style="background-image: url(<?php bloginfo('url'); ?>/assets/images/soc-icon_google.png);"></div></a>
							<a href="https://twitter.com/MarkAWahl" target="_blank"><div style="background-image: url(<?php bloginfo('url'); ?>/assets/images/soc-icon_twitter.png);"></div></a>
							<a href="http://www.linkedin.com/pub/mark-wahl/4/74a/430/" target="_blank"><div style="background-image: url(<?php bloginfo('url'); ?>/assets/images/soc-icon_linkedin.png);"></div></a>
						</div>
					</nav>
				
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->
