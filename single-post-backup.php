<?php
  /*
  * Template Name: Blog - BACKUP
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

        <div class="recent-posts">
          <h2>POPULAR POSTS</h2>
            <hr>
            <div class="recent-post-list">
              <div class="recent-post-item">
                <a href=""><img src="http://lorempixel.com/output/food-q-c-200-200-8.jpg"></a>
                <a href=""><p>BUILDING A PORTFOLIO</p></a>
               </div>
               <div class="recent-post-item">
                 <img src="http://lorempixel.com/output/food-q-c-200-200-8.jpg">
                 <p>Why designers should code.</p>
                </div>
                <div class="recent-post-item">
                  <center><img src="http://lorempixel.com/output/food-q-c-200-200-8.jpg"></center>
                  <p>WHY DESIGNERS NEED MORE THAN JUST A PORTFOLIO SITE.
                  </p>
                 </div>

           </div>
        </div>

    </div> <!--End Class Single Post-->
   </div> <!--END CLASS MAIN CONTENT-->
  </div> <!--END CLASS CONTENT CONTAINER-->
</div> <!--end website-container-->

<?php get_footer(); ?>
