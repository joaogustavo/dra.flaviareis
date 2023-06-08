<?php ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- 20/09/2015 -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?=get_template_directory_uri()?>/js/jquery.matchHeight.js"></script>
<?php favicon(); ?>
<?php wp_head(); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body <?php body_class(); ?>>
<?php get_template_part( 'inc/topo' ); ?>
<main class="col-sm-12 col-md-12 col-lg-12 clearfix wrap corpo">