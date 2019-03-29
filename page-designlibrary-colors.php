<?php
  /*
    Template Name: Design Library - Colors
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
        <div id="color-container">

          <div class="color-molecule">
            <div class="color-molecule-sample" style="background-color: #144635;"></div>
              <h2>Tropic Teal</h2>
              <p><strong>Hex: </strong>#144635<br>
              <strong>RBG: </strong>#00829a<br>
          </div>

          <div class="color-molecule">
            <div class="color-molecule-sample" style="background-color: #0c2a20;"></div>
              <h2>Palm Green</h2>
              <p><strong>Hex: </strong>#0c2a20<br>
              <strong>RBG: </strong>#00829a<br>
          </div>

          <div class="color-molecule">
            <div class="color-molecule-sample" style="background-color: #ffbe86;"></div>
              <h2>Citrine</h2>
              <p><strong>Hex: </strong>#ffbe86<br>
              <strong>RBG: </strong>#00829a<br>
          </div>

          <div class="color-molecule">
            <div class="color-molecule-sample" style="background-color: #fffcf1;"></div>
              <h2>Linen</h2>
              <p><strong>Hex: </strong>#fffcf1<br>
              <strong>RBG: </strong>#00829a<br>
          </div>

          <div class="color-molecule">
            <div class="color-molecule-sample" style="background-color: #ffa676;"></div>
              <h2>Salmon</h2>
              <p><strong>Hex: </strong>#ffa676<br>
              <strong>RBG: </strong>#00829a<br>
          </div>

          <div class="color-molecule">
            <div class="color-molecule-sample" style="background-color: #112C37;"></div>
              <h2>Midnight</h2>
              <p><strong>Hex: </strong>#112C37<br>
              <strong>RBG: </strong>#00829a<br>
          </div>

        </div>


    <?php endwhile; else : ?>s
      <p><?php _e( 'Sorry, no pages found.' ); ?></p>
    <?php endif; ?>

    </div> <!--END CLASS LIBRARY MAIN CONTENT-->
  </div> <!--END LIBRARY CONTAINER-->
</div> <!--END CLASS CONTENT CONTAINER-->

</div> <!--end website-container-->

<?php get_footer(); ?>
