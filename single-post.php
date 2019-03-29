<?php
  /*
  * Template Name: Blog - Standard
  * Template Post Type: post
  */
?>


<?php get_header(); ?>

<div class="content-container">
  <div class="main-content">
    <div class="single-post">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <p>Article by <?php the_author(); ?> | <?php the_time('F j, Y'); ?></p>
        <p class="single-post-excerpt"><?php echo get_the_excerpt(); ?></p>
        <hr>
        <?php the_content(); ?>

        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        <hr>

        <div class="popular-posts">
          <h2>POPULAR POSTS</h2>
          <hr>
          <div class="popular-post-list">
            <?php get_template_part('content', 'popular'); ?>
          </div>
       </div>

    </div> <!--End Class Single Post-->
   </div> <!--END CLASS MAIN CONTENT-->
  </div> <!--END CLASS CONTENT CONTAINER-->
</div> <!--end website-container-->

<?php get_footer(); ?>
