<?php
  /*
    Template Name: Front Page Template
  */
?>

<?php get_header(); ?> <!--Navigation-->

<div class="content-container">

  <!--Hero Image-->

      <div id="frontpage-intro">
        <div id="frontpage-intro-left">
          <h1>Conceptual Designer and Creative Marketer</h1>
          <p>Hi, I'm Venessa! I am a multi-disciplinary designer and front-end developer with a love for inspiring and informing users through design.</p>
          <a href="http://baezcreative.co/wp-content/uploads/2018/09/venessa_baez_resume.pdf" target="_new"><button>View Resume</button></a>
          <a href="<?php bloginfo('url'); ?>/blog"><button>Explore My Blog</button></a>
        </div>
      </div> <!--End of Frontpage Intro-->
      <div class="main-portfolio">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
           <?php endwhile; else : ?>
             <p><?php _e( 'Sorry, no page found.' ); ?></p>
           <?php endif; ?>

           <!--Calls the remaining portfolio items-->
        <?php get_template_part('content', 'portfolio'); ?>
     </div> <!--END CLASS MAIN PORTFOLIO-->

<?php get_footer(); ?>
