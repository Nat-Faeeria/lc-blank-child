<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title><?php if(is_front_page()) { echo 'PSCORE'; } else {wp_title('&laquo;', true, 'right').bloginfo('name');} ; ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<header>
		<div class="top-nav">
			<section class="header-logo-container">
	            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
	                <img class="header-logo" src="<?php header_image(); ?>" alt="site's logo" />
		            <h1><?php echo bloginfo('name') ?></h1>
	            </a>
	        </section>
	        <nav class="header-menu-container">
		        <?php wp_nav_menu(array('theme_location' => 'header')); ?>
	        </nav>
			<div onclick="toggle()" class="toggle-btn"></div>
		</div>
		<nav id="hidden-nav">
			<?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?>
		</nav>
	</header>
    <main>