<!DOCTYPE html>
<html>
    <head>    
        <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>      
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <!--[if lt IE 9]>
			<script src="<?php echo get_template_directory(); ?>/js/html5shiv.js"></script>
		<![endif]-->
        <?php wp_head(); ?>
    
    <body>
		<a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>

		<section id="content">