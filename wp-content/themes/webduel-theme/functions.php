<?php

function theme_files() {
  wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array('jquery'), '1.0', true );
  wp_enqueue_script( 'gsap-trigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js', array('jquery'), '1.0', true );

  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  if(strstr($_SERVER['SERVER_NAME'], 'localhost')){ 
    wp_enqueue_script('main-webduel-js', 'http://localhost:3000/bundled.js', array("jquery"), '1.0', true);
  }
  else{
    wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/undefined' ), array("jquery"), '1.0', true);
    wp_enqueue_script('main-webduel-js', get_theme_file_uri('/bundled-assets/scripts.df4e319f8e567219c26b.js' ), array("jquery"), '1.0', true);
    wp_enqueue_style( 'our-main-styles', get_theme_file_uri('/bundled-assets/styles.df4e319f8e567219c26b.css'));
  }

}

add_action('wp_enqueue_scripts', 'theme_files');

function university_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');


 //add nav menu
 function fig_config(){ 
    register_nav_menus( 
       array(
          "fig_main_menu" => "Fig & Honey Main Menu",
          'fig_footer_menu' => "Fig & Honey Footer Menu"
       )
       );  

       add_theme_support( "title-tag");   
  }
 
  add_action("after_setup_theme", "fig_config", 0);

  //custom post type
  add_action('init', 'register_cpt'); 
  function register_cpt(){ 
      register_post_type( 'reviews', array(
        'labels'=> array(
            'name' => ('Reviews'), 
            'singular_name'=>('Review')
        ), 
        'public'=>true, 
        'has_archive' => true, 
        'menu_icon' => 'dashicons-format-quote'
      ) );
  }

  add_theme_support( 'post-thumbnails' );