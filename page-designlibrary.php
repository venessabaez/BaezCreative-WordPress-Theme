<?php
  /*
    Template Name: Design Library
  */
?>

<?php get_header(); ?>


<div class="library-hero">
    <h2>Brand Design System</h2>
</div>


<div class="content-container">
  <div class="library-container">

  <?php include_once("library-nav.php") ?>

  <div class="library-main-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="with-header"><?php the_post_thumbnail('full'); ?></div>

        <h1><?php the_title(); ?></h1>
        <hr>
        <p><?php the_content(); ?></p>

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no pages found.' ); ?></p>
    <?php endif; ?>

    </div> <!--END CLASS LIBRARY MAIN CONTENT-->
  </div> <!--END LIBRARY CONTAINER-->
</div> <!--END CLASS CONTENT CONTAINER-->

</div> <!--end website-container-->

<?php get_footer(); ?>
