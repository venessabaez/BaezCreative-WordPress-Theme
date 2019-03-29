<?php
  /*
    Template Name: Portfolio Page
  */
?>
<?php get_header(); ?>

<div class="content-container">

  <div id="portfolio-hero">
      <h1><?php the_title(); ?></h1>
  </div>

    <div class="main-portfolio">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

         <?php endwhile; else : ?>
           <p><?php _e( 'Sorry, no page found.' ); ?></p>
         <?php endif; ?>

         <!--Calls the remaining portfolio items-->
      <?php get_template_part('content', 'portfolio'); ?>


   </div> <!--END CLASS MAIN PORTFOLIO-->
  </div> <!--END CLASS CONTENT CONTAINER-->


</div> <!--end website-container-->

<?php get_footer(); ?>
