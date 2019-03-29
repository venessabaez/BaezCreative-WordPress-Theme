<?php
  /*
    Template Name: Freebies Page
  */
?>
<?php get_header(); ?>

<div class="content-container">
     <div class="main-freebies">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <hr>
        <div class="freebie-list">

<!--wp query loop - do not move-->
           <?php endwhile; else : ?>
             <p><?php _e( 'Sorry, no page found.' ); ?></p>
           <?php endif; ?>

           <?php
              $args = array(
                  'post_type' => 'freebies'
                );
              $query = new WP_Query( $args );
           ?>

           <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
<!--End wp query loop-->

          <!--repeating single freebie-item-->
         <div class="freebie-item">
           <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
           <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
         </div><!--End of single freebie item-->

          <?php endwhile; endif; wp_reset_postdata(); ?>

      </div><!--End of Freebie List-->
    </div><!--END CLASS MAIN-FREEBIES-->
   </div> <!--END CLASS CONTENT CONTAINER-->

</div> <!--end website-container-->

<?php get_footer(); ?>
