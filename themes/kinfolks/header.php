<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#main-nav" style="position: relative;">
<div id="wptime-plugin-preloader"></div>
	<?php get_template_part( 'partials/components/navbar'); ?>