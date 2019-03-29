<!-- Portfolio Loop -->
<?php
  $num_posts = (is_front_page() ) ? 3 : -1;

   $args = array(
       'post_type' => 'portfolio',
       'posts_per_page' => $num_posts
     );
   $query = new WP_Query( $args );
?>

<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <div class="homepageportfolio-item-container">

     <a href="<?php the_permalink(); ?>">
       <div class="homepage-portfolio-image"><?php the_post_thumbnail(); ?></div>
       <div class="homepage-portfolio-overlay"></div>
     </a>

   </div>

 <?php endwhile; endif; wp_reset_postdata(); ?>
