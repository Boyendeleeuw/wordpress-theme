<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>Boyen</title>
	<?php endif; ?>
	<?php wp_head(); ?>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png">
	<link rel="shortcut icon" href="<?php the_field('header_logo', 'options'); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/fonts.css" type="text/css" media="screen" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>

	<header id="page-header">
	  <div class="container">
	    <div class="header-left">
	      <a href="<?php echo home_url(); ?>">
	        <img src="<?php the_field('header_logo', 'options'); ?>" alt="Logo">
	      </a>
	    </div>
	    <div class="header-center">
	      <?php
	      if (have_rows('header_menu', 'options')) {
	        while (have_rows('header_menu', 'options')) {
	          the_row(); ?>
	          <a href="<?php the_sub_field('menu_item_link', 'options') ?>"><?php the_sub_field('menu_item', 'options'); ?></a>
	        <?php }
	      }
	      ?>
	    </div>
	    <div class="header-right">
	      <a href="<?php the_field('header_button_link', 'options'); ?>"><?php the_field('header_button', 'options'); ?></a>
	    </div>
	  </div>
	</header>
