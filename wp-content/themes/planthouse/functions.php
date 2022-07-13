<?php

//theme support
function planthouse_theme_support(){
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'planthouse_theme_support');

//css file link
function theme_css_and_js_file(){

    $Version = wp_get_theme()->get('version');
    //css file link
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), '3.0', false);
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/vendors/linericon/style.css', array(), '1.0', false);
    wp_enqueue_style( 'icon', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.0', false);
    wp_enqueue_style( 'owl_carosol', get_template_directory_uri().'/assets/vendors/owl-carousel/owl.carousel.min.css', array(), '1.0', false);
    wp_enqueue_style( 'magnific', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0', false);
    wp_enqueue_style( 'niche_select', get_template_directory_uri().'/assets/vendors/nice-select/css/nice-select.css', array(), '1.0', false);
    wp_enqueue_style( 'custom_css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', false);

    //js file link
    wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/jquery-3.2.1.min.js', array(), '30.0', true);
    wp_enqueue_script( 'popper', get_template_directory_uri().'/assets/js/popper.js', array(), '1.0', true);
    wp_enqueue_script( 'bootstarp_min', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script( 'steller', get_template_directory_uri().'/assets/js/stellar.js', array(), '3.0', true);
    wp_enqueue_script( 'ligthbox', get_template_directory_uri().'/assets/vendors/lightbox/simpleLightbox.min.js', array(), '1.0', true);
    wp_enqueue_script( 'niche_select', get_template_directory_uri().'/assets/vendors/nice-select/js/jquery.nice-select.min.js', array(), '1.0', true);
    wp_enqueue_script( 'isotop', get_template_directory_uri().'/assets/vendors/isotope/imagesloaded.pkgd.min.js', array(), '1.0', true);
    wp_enqueue_script( 'isotop_min', get_template_directory_uri().'/assets/vendors/isotope/isotope-min.js', array(), '1.0', true);
    wp_enqueue_script( 'owl_carosol', get_template_directory_uri().'/assets/vendors/owl-carousel/owl.carousel.min.js', array(), '1.0', true);
    wp_enqueue_script( 'ajaxchimp', get_template_directory_uri().'/assets/js/jquery.ajaxchimp.min.js', array(), '1.0', true);
    wp_enqueue_script( 'mail_script', get_template_directory_uri().'/assets/js/mail-script.js', array(), '1.0', true);
    wp_enqueue_script( 'theme_js', get_template_directory_uri().'/assets/js/theme.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts','theme_css_and_js_file');

// register nav menus
function planthuse_my_menus() {
    register_nav_menus(
      array(
        'header' => __( 'Header Menu' ),
        'footer' => __( 'Footer Menu' )
       )
     );
   }
   add_action( 'init', 'planthuse_my_menus' );
   
   function planthouse_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'planthouse' ),
        'id'            => 'sidebar',
        'before_widget' => '<aside id="%1$s" class="single_sidebar_widget search_widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'footer', 'planthouse' ),
        'id'            => 'footer',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action('widgets_init','planthouse_widgets_init');

// redux theme files

require('inc/redux-core/framework.php');
require('inc/sample/sample-config.php');











?>