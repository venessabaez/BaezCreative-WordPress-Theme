<?php
  /*
    Template Name: Blog Listing Page
  */
?>

<?php get_header(); ?>

<div class="content-container">
  <div class="main-content">
    <div class="article-list">
      <div class="leader">
        <h1><?php wp_title(''); ?> | BLOG POSTS</h1>
      </div>
      <hr>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="article-preview">
          <a href="<?php the_permalink();?>">
            <h3><?php the_title(); ?></h3></a>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink();?>">
            <button class="btn-blog-readmore">
              Read More
            </button>
          </a>
        </div>

        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        <br><br>
    </div><!--End article list-->
   </div> <!--END CLASS MAIN CONTENT-->
  </div> <!--END CLASS CONTENT CONTAINER-->

</div> <!--end website-container-->

<?php get_footer(); ?>
