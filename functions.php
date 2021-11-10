<?php
wp_enqueue_style( 'style', get_stylesheet_uri() );

function boyen_theme() {
    wp_enqueue_style( 'style', get_template_directory_uri() );
  }
add_action( 'wp_enqueue_scripts', 'boyen_theme' );
?>
