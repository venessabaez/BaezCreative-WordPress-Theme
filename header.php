<!DOCTYPE html>
<html>
<head>

<title><?php wp_title( '|', TRUE, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
   <?php wp_head(); ?>
</head>

<body>
  <?php include_once("analyticstracking.php") ?>

  <div class="website-container"> <!--Contains everything-->
    
    <header class="main-header">
        <a class="site-logo" href="<?php bloginfo('url'); ?>">
          <h2><?php bloginfo('name'); ?></h2>
          <!--<p><?php bloginfo('description');?></p>-->
        </a>

        <?php
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => 'nav'
          );
          wp_nav_menu( $defaults);

        ?>
    </header> <!--END CLASS MAIN HEADER-->
