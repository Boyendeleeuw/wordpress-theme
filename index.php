<?php get_header(); ?>

<div class="page">
  <div class="container">
    <?php
    if ( have_posts() ) {
    	while ( have_posts() ) { ?>
        <h1><?php the_title(); ?></h1>
    		<?php the_post(); ?>
      <?php }
    }
    ?>
  </div>
</div>

<?php get_footer(); ?>
