<?php get_header(); ?>

<div class="container latest">


  <div class="page-content separator-container">
    <div class="separator"></div>
  </div>

  <h2><?php the_title(); ?></h2>

<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array( 'posts_per_page' => 1, 'paged' => $paged,'post_type' => 'post' );
    $postslist = new WP_Query( $args );

    if ( $postslist->have_posts() ) :
        while ( $postslist->have_posts() ) : $postslist->the_post(); 
?>
      <div class="news-item">
        <div class="row">
          <div class="col-md">
            <div class="news">
              <span class="date">
                <?php the_time( get_option( 'date_format' ) ); ?>
              </span>
              <span class="headline">
                <?php 
                  $categories = get_the_category();
                   
                  if ( ! empty( $categories ) ) {
                      echo esc_html( $categories[0]->name );   
                  }
                ?>
              </span>
              <span class="post-title">
                <a href="<?php the_permalink() ?>">
                  <?php the_title(); ?>
                </a>
              </span>
            </div>
          </div>
        </div>

        <div class="row news-content">
          <div class="col-md">
            <div class="news">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
      </div>


<?php endwhile; ?>

  <div class="news-nav">
    <?php 
        next_posts_link( '前へ', $postslist->max_num_pages );
        previous_posts_link( '次へ' ); 
        wp_reset_postdata();
      endif;
    ?>
  </div>

</div>

<?php get_footer(); ?>
