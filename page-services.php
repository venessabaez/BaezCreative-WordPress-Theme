<?php
  /*
    Template Name: Services Page - Unique
  */
?>

<?php get_header(); ?>

<div class="content-container">
  <div class="main-content">
    <div id="services-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <hr>
        <p><?php the_content(); ?></p>

       <div class="typeform-widget" data-url="https://baezcreative.typeform.com/to/UPWW3n" style="width: 100%; height: 500px;" > </div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;" > powered by <a href="https://www.typeform.com/examples/forms/registration-form-template/?utm_campaign=UPWW3n&amp;utm_source=typeform.com-9588284-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-registrationform&amp;utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no pages found.' ); ?></p>
    <?php endif; ?>
    </div>
   </div> <!--END CLASS MAIN CONTENT-->
  </div> <!--END CLASS CONTENT CONTAINER-->

</div> <!--end website-container-->

<?php get_footer(); ?>
