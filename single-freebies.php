<?php get_header(); ?>


<div class="content-container">
  <div class="main-content">
    <div class="single-freebie-item">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <center><h1><?php the_title();?></h1></center>

        <div class="single-freebie-container">
          <div class="single-freebie-left">
              <h2><?php the_field('free_subheadline'); ?></h2>
              <p><?php the_field('free_description'); ?></p>

              <button class="btn-freebie-download">
                Download Now
              </button>

          </div>

          <div class="single-freebie-right">
            <?php the_field('free_supportingimage'); ?>
           </div>
        </div>

       <?php endwhile; endif; ?>
    </div> <!--END SINGLE PORTFOLIO ITEM-->
   </div> <!--END CLASS MAIN CONTENT-->
  </div> <!--END CLASS CONTENT CONTAINER-->

</div> <!--end website-container-->

<?php get_footer(); ?>
