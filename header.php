<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); //required for some plugins ?>
	<?php wp_head(); //hook ?>
</head>

<body <?php body_class(); ?>>
	<div id="parappa">
		<header>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
		</header>