<!DOCTYPE html>
<html>
	<head>
		<title>CarService - Mechanic Auto Shop Template</title>
		<!--meta-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="keywords" content="Mechanic, Car, Auto" />
		<meta name="description" content="Responsive Mechanic Auto Shop Template" />
		<!--slider revolution-->
		<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css">
		<!--style-->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style/reset.css">
		<link rel="stylesheet" type="text/css" href="style/superfish.css">
		<link rel="stylesheet" type="text/css" href="style/prettyPhoto.css">
		<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/animations.css">
		<link rel="stylesheet" type="text/css" href="style/responsive.css">
		<link rel="stylesheet" type="text/css" href="style/odometer-theme-default.css">
		<!--fonts-->
		<link rel="stylesheet" type="text/css" href="fonts/streamline-small/style.css">
		<link rel="stylesheet" type="text/css" href="fonts/template/styles.css">
		<link rel="stylesheet" type="text/css" href="fonts/social/styles.css">
		<link rel="shortcut icon" href="images/favicon.ico">
	</head>
	<!--<body class="image-1">
	<body class="image-1 overlay">
	<body class="image-2">
	<body class="image-2 overlay">
	<body class="image-3">
	<body class="image-3 overlay">
	<body class="image-4">
	<body class="image-4 overlay">
	<body class="image-5">
	<body class="image-5 overlay">
	<body class="pattern-1">
	<body class="pattern-2">
	<body class="pattern-3">
	<body class="pattern-4">
	<body class="pattern-5">
	<body class="pattern-6">
	<body class="pattern-7">
	<body class="pattern-8">
	<body class="pattern-9">
	<body class="pattern-10">-->
	<body class="<?php echo (isset($_COOKIE['cs_layout']) && $_COOKIE['cs_layout']=="boxed" ? (isset($_COOKIE['cs_layout_style']) && $_COOKIE['cs_layout_style']!="" ? $_COOKIE['cs_layout_style'] . ' ' . $_COOKIE['cs_image_overlay'] : 'image-1 overlay') : ''); ?>">
		<div class="site-container<?php echo ($_COOKIE['cs_layout']=="boxed" ? ' boxed' : ''); ?>">
		<!--<div class="site-container boxed">-->
			<div class="header-top-bar-container clearfix">
				<div class="header-top-bar">
					<ul class="contact-details clearfix">
						<li class="template-phone">
							(520) 577 2710
						</li>
						<li class="template-mail">
							<a href="mailto:carservice@mail.com">carservice@mail.com</a>
						</li>
						<li class="template-clock">
							Mon - Fri: 7:30am - 5:30pm
						</li>
					</ul>
					<div class="search-container">
						<a class="template-search" href="#" title="Search"></a>
						<form class="search">
							<input type="text" name="s" placeholder="Search..." value="Search..." class="search-input hint">
							<fieldset class="search-submit-container">
								<span class="template-search"></span>
								<input type="submit" class="search-submit" value="">
							</fieldset>
							<input type="hidden" name="page" value="search">
						</form>
					</div>
					<ul class="social-icons">
						<li>
							<a target="_blank" href="http://facebook.com/QuanticaLabs" class="social-facebook" title="facebook"></a>
						</li>
						<li>
							<a target="_blank" href="https://twitter.com/QuanticaLabs" class="social-twitter" title="twitter"></a>
						</li>
						<li>
							<a href="https://pinterest.com/quanticalabs/" class="social-pinterest" title="pinterest"></a>
						</li>
						<!--<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-google-plus"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-youtube"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-linkedin"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-pinterest"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-dribble"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-skype"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-tumblr"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-instagram"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-xing"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-foursquare"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-rss"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-behance"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-picasa"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-stumbleupon"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-vimeo"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-houzz"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-yelp"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-github"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-reddit"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-soundcloud"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-vk"></a>
						</li>
						<li>
							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-vine"></a>
						</li>
						-->
					</ul>
				</div>
				<a href="#" class="header-toggle template-arrow-up"></a>
			</div>
			<div class="header-container<?php echo (isset($_COOKIE['cs_menu_type']) ? ' ' . $_COOKIE['cs_menu_type'] : '');?>">
			<!--<div class="header-container sticky">-->
				<div class="vertical-align-table column-1-1">
					<div class="header clearfix">
						<div class="logo vertical-align-cell">
							<h1><a href="?page=home" title="CarService">CARSERVICE</a></h1>
						</div>
						<a href="#" class="mobile-menu-switch vertical-align-cell">
							<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span>
						</a>
						<div class="menu-container clearfix vertical-align-cell">
							<?php
							require_once('menu.php');
							?>
						</div>
					</div>
				</div>
			</div>