<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('stylesheet_directory'); ?>/images/shared/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/boilerplate/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/boilerplate/main.css">          		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bs4.0.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive-bs4.0.css" type="text/css" media='all and (max-width: 800px)' title="no title" charset="utf-8"/>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/jquery-2.1.1.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>


	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/jquery.headhesive/headhesive.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/jquery.headhesive/headhesive.min.js"></script>

	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/jquery.lazyload/jquery.lazyload.min.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Kaushan+Script' rel='stylesheet' type='text/css'>
	

	<?php $shortname = "unit_theme"; ?>
	

</head>
<body <?php body_class($class); ?>>

	<a href="#" class="go-top-link animate-this">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/shared/bs4.0-scroll-top.gif" />
	</a>

	<header class="main-header clearfix">

		<a class="logo" href="<?php bloginfo('url'); ?>">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/header/bs4.0-logo-header.png" class="logo" alt="logo" />
		</a>

		<a class="nav-toggle" href="#"><span></span></a>

		<div class="header-search-nav clearfix">
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
				<input type="text" name="s" id="s" class="animate-this" placeholder="Search..."/>
				<input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/header/search-icon.png"  border="0" alt="Submit Search">
			</form>
			<nav class="main-nav">
				<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id=main_header_menu'); ?>
			</nav>		
		</div>
	</header>


<script>
        // Set options
        var options = {
            //offset: '#showHere',
            classes: {
                clone:   'main-header-clone',
                stick:   'main-header-stick',
                unstick: 'main-header-unstick'
            }
        };

        // Initialise with options
        var banner = new Headhesive('.main-header', options);

        // Headhesive destroy
        // banner.destroy();

</script>

