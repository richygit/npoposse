<?php get_header(); ?>

  <?php

    /* Start the Loop */
    while ( have_posts() ) :
      the_post();
      $page_title = get_the_title();
      $image_page = get_page_by_title(str_replace(' ', '-', $page_title) . '-image', OBJECT, 'post');
      $marquee_image = apply_filters( 'the_content', $image_page->post_content );
  ?> 
    <div class="marquee">
      <?php  echo $marquee_image ?><!-- marquee image -->
      <div class="overlay"></div>
      <h1 class="marquee-text"><?php echo $page_title ?></h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

  <?php endwhile; // End of the loop.
  ?>

<?php get_footer(); ?>
