<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'recentpost-thumb', 235, 153, true ); // Hard Crop Mode
//add_theme_support( 'post-formats', array('image', 'quote') );

function register_theme_menus() {

   register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' )
      )
    );
}
add_action( 'init', 'register_theme_menus' );


function bcc_theme_styles() {

/*Calling styles*/
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'base_css', get_template_directory_uri() . '/css/base.css' );
  wp_enqueue_style( 'blog_css', get_template_directory_uri() . '/css/blog.css' );
  wp_enqueue_style( 'portfolio_css', get_template_directory_uri() . '/css/portfolio.css' );
  wp_enqueue_style( 'services_css', get_template_directory_uri() . '/css/services.css' );
  wp_enqueue_style( 'freebies_css', get_template_directory_uri() . '/css/freebies.css' );
  wp_enqueue_style( 'front_page_css', get_template_directory_uri() . '/css/front-page.css' );
  wp_enqueue_style( 'resume_css', get_template_directory_uri() . '/css/resume.css' );
  wp_enqueue_style( 'library_css', get_template_directory_uri() . '/css/library.css' );

/*Calls in fonts*/
  wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Merriweather|Oswald');
/*Calls in main style sheet with metadata*/
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css'  );
}

/*Generates the above code*/
add_action('wp_enqueue_scripts' , 'bcc_theme_styles');

?>
