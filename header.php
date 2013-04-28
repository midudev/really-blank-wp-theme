<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>      
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
        <!--[if lt IE 9]>
            <script src="<?= get_template_directory_uri(); ?>/js/html5shiv.js"></script>
        <![endif]-->
        <?php wp_head() ?>
    
    <body>
		<a href="<?php echo get_option('home'); ?>"><?php bloginfo('name') ?></a>

		<section id="content">