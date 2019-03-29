<!--Blog Content Loop -->

<?php
  $num_posts = (is_front_page() ) ? 5 : -1;

  $args = array(
       'post_type' => 'post',
       'posts_per_page' => $num_posts
     );
  $query = new WP_Query( $args );
?>

<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

   <div class="recent-post-list">
     <div class="recent-post-item">
      <br>
        <a href=<?php the_permalink(); ?>><p><?php the_title(); ?></p></a>
      </div>
  </div>

 <?php endwhile; endif; wp_reset_postdata(); ?>
