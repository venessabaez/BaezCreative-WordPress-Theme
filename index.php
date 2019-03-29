<?php get_header(); ?>


<div class="content-container">
  <div class="main-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

   </div> <!--END CLASS MAIN CONTENT-->
  </div> <!--END CLASS CONTENT CONTAINER-->

</div> <!--end website-container-->

<?php get_footer(); ?>
