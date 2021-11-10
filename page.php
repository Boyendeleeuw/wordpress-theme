<!--
Template name: Content page
-->

<?php get_header(); ?>

<?php

  if (have_posts()) {

    while (have_posts()) {
 ?>
<div class="page" id="page">
  <div class="breadcrumb">
    <div class="container">
      <a href="<?php echo home_url(); ?>">Home</a>
      <p>|</p>
      <p class="active"><?php the_title(); ?></p>
    </div>
  </div>
  <div class="container">
            <h1><?php the_title(); ?></h1> <?php
            the_post();
            the_content();
          }
        }
      ?>
  </div>
</div>

<?php get_footer(); ?>
