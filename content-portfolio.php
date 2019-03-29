<!-- Portfolio Loop -->
<?php
/*  $num_posts = (is_front_page() ) ? 3 : -1;*/

   $args = array(
       'post_type' => 'portfolio',
       'posts_per_page' => -1
     );

   $query = new WP_Query( $args );
?>

<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

   <div class="portfolio-item-container">
      <a href=<?php the_permalink(); ?>>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
        <a href="<?php the_permalink(); ?>">
          <div class="portfolio-item-overlay">
            <h3><?php the_title(); ?></h3>
          </div>
        </a>
      </a>
    </div> <!--end of portfolio item container-->

 <?php endwhile; endif; wp_reset_postdata(); ?>
