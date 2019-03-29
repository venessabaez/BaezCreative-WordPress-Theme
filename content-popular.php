<!--Blog Content Loop -->
<?php

  $num_posts = (is_single() ) ? 3 : -1;

  $args = array(
       'post_type' => 'post',
       'posts_per_page' => $num_posts
     );

  $query = new WP_Query( $args );

?>

<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
 <div class="popular-post-item">
    <a href=<?php the_permalink(); ?>>
      <?php the_post_thumbnail('recentpost-thumb'); ?>
    </a>

    <a href=<?php the_permalink(); ?>>
      <p><?php the_title(); ?></p>
    </a>
 </div>

 <?php endwhile; endif; wp_reset_postdata(); ?>
