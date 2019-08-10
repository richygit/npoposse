<?php get_header(); ?>

<div class="container latest">

  <div class="page-content separator-container">
    <div class="separator"></div>
  </div>


  <?php

    /* Start the Loop */
    while ( have_posts() ) :
      the_post();

?>
  <h2><?php the_title(); ?></h2>

  <div class="row">
    <div class="content">
      <?php 
// Declare global $more (before the loop).
global $more;
 
// Set (inside the loop) to display all content, including text below more.
$more = 1;

the_content(); 
?>
    </div>
  </div>

  <?php endwhile; // End of the loop.
  ?>

</div>

<?php get_footer(); ?>
