<!DOCTYPE html><html>
<head>
  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <title><? wp_title() ?></title>
  <link rel="stylesheet" href="<? bloginfo('stylesheet_url') ?>" media="screen" />
  <? wp_head() ?>

<body>
  <a href="<?= get_option( 'home' ) ?>"><? bloginfo( 'name' ) ?></a>
  <main id="main" role="main">
