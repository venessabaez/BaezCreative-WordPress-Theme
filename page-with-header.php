<?php
  /*
    Template Name: Default - With Header
  */
?>

<?php get_header(); ?>


<div class="content-container">
  <div class="main-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="with-header"><?php the_post_thumbnail('full'); ?></div>

        <h1><?php the_title(); ?></h1>
        <hr>
        <p><?php the_content(); ?></p>

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no pages found.' ); ?></p>
    <?php endif; ?>

   </div> <!--END CLASS MAIN CONTENT-->
  </div> <!--END CLASS CONTENT CONTAINER-->

</div> <!--end website-container-->

<?php get_footer(); ?>
