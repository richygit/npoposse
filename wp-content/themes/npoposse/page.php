<?php get_header(); ?>

  <?php

    /* Start the Loop */
    while ( have_posts() ) :
      the_post();
      $page_title = get_the_title();
      $image_page = get_page_by_title(str_replace(' ', '-', $page_title) . '-image', OBJECT, 'post');
      $post_id = get_the_ID();
      $post_meta = get_post_meta($post_id, 'mtm_data')[0];

      $marquee_image = '/wp-content/themes/npoposse/images/default-marquee.jpg';

      if ($post_meta) {
        foreach($post_meta as $index => $property_array) {
          if($property_array['value'] == 'marquee') {
            $marquee_image = $property_array['content'];
          }
        }
      }
  ?> 
    <div class="marquee">
      <img src="<?php  echo $marquee_image ?>" alt="marquee image" />
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
