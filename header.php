<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php global $post; wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> <?php if( is_front_page() ): ?>| <?php bloginfo('description'); ?><?php endif;?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url	'); ?>">
	
	<?php wp_head();?>
</head>
<body<?php body_class();?>>
	
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->
    
	<header class="site_header">
    	<a href="<?php bloginfo('url')?>" class="site_logo"><?php bloginfo('title');?></a>
    	<p><?php bloginfo('description');?></p>
    	
    	<nav class="site_nav">
    		<?php wp_nav_menu(array(
					'theme_location' => 'main_nav',
					'container'	=> false,
					'link_before' => '<span>',
					'link_after' => '</span>'
			));?>
    	</nav>
    	
	</header>
	
	<div class="site_main">