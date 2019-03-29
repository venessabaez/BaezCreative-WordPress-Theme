<?php get_header(); ?>


<div class="content-container">
  <div class="main-content">
    <div class="single-portfolio-item">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <div class="portfolio-header">
            <h1 class="portfolio-title"><?php the_title();?></h1>

            <p class="portfolio-intro">
              <strong>THE BRIEF:</strong>
              <?php the_field('brief') ?>
            </p>
        </div> <!--End Portfolio Header-->

        <div class="project-scope">
          <hr>
             <p><strong>PROJECT SCOPE:</strong>
             <br class="mobile-break">
             <?php the_field('project-scope') ?>
             </p>
        </div><!--End Project Scope-->

        <div class="portfolio-content">
           <hr>
            <?php the_content(); ?>

         </div> <!--End of Portfolio Content-->

         <p class="clear-both">&nbsp;</p>
         <div class="portfolio-services-crosssell">
           <h3>Let's do business.</h3>
           <p>Like what you see? If you&rsquo;re interested in having Baez Creative Co. work on a project for you, check out our services page and fill out the project questionnaire.</p>

          <center>
            <a href="<?php bloginfo('url'); ?>/portfolio">
                <button class="gray-button">
                  Back to Portfolio
                </button></a>


            <a href="<?php bloginfo('url'); ?>/services">
               <button>
                  View All Services
                </button></a>

          </center>

          </div>

        <?php endwhile; endif; ?>
    </div> <!--END SINGLE PORTFOLIO ITEM-->
   </div> <!--END CLASS MAIN CONTENT-->
  </div> <!--END CLASS CONTENT CONTAINER-->

</div> <!--end website-container-->

<?php get_footer(); ?>
