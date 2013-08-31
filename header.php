<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title><? bloginfo('name') ?> - <? wp_title() ?></title>      
        <link rel="stylesheet" href="<? bloginfo('stylesheet_url'); ?>" media="screen" />
        <!--[if lt IE 9]>
            <script src="<?= get_template_directory_uri(); ?>/js/html5shiv.js"></script>
        <![endif]-->
        <? wp_head() ?>
    
    <body>
		<a href="<?= get_option( 'home' ) ?>"><? bloginfo( 'name' ) ?></a>

		<section id="content">