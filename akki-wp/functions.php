<?php
/**
 * Akki WP and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package  Akka WP
 */

// Register Customizer
require_once get_template_directory() . '/inc/customizer.php';

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// tgm-plugin
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

require_once get_template_directory() . '/inc/required-plugins.php';

function akka_scripts()
{
    //Bootstrap javascript and CSS files
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/main.js', array(), '4.3.1', true);
    wp_enqueue_script('typed-js', get_template_directory_uri() . '/js/typed.min.js', array(), '4.3.1', true);
    
    wp_enqueue_style('bootstrap',  'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    
    // Theme's main  and bootstrap stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), (get_template_directory() . '/style.css'), 'all');
	
	// Font-awesome
	wp_enqueue_script('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js', array(), '4.3.1', true);
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Oswald|Rambla|Staatliches&display=swap');
  wp_enqueue_script('popper-ks', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', true );

   
}



add_action('wp_enqueue_scripts', 'akka_scripts');


function akka_config(){

        // This theme uses wp_nav_menu() in two locations.
     register_nav_menus(
        array(
            'akka_main_menu'   => esc_html__('Akka Main Menu', 'akka-wp'),
            'akka_footer_menu' => esc_html__('Akka Footer Menu', 'akka-wp'),
        )
    );

    add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}

add_theme_support( 'custom-logo');

add_action('after_setup_theme', 'akka_config', 0);
add_image_size( 'akka-reference', 324, 216, array( 'center', 'center' ) );
add_image_size( 'akka-blog', 324, 183, array( 'center', 'center' ) );
add_image_size( 'akka-portfolio', 324, 288, array( 'center', 'center' ) );


add_action('init', 'akka_wp_skills_post_type', 0 );

function akki_wp_skills_post_type() {

      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'Skill', 'Post Type General Name', 'akka-wp' ),
      'singular_name'       => _x( 'Skill', 'Post Type Singular Name', 'akka-wp' ),
      'menu_name'           => __( 'Skills', 'akka-wp' ),
      'parent_item_colon'   => __( 'Parent Skill', 'akka-wp' ),
      'all_items'           => __( 'All Skill', 'akka-wp' ),
      'view_item'           => __( 'View Skill', 'akka-wp' ),
      'add_new_item'        => __( 'Add New Skill', 'akka-wp' ),
      'add_new'             => __( 'Add New Skill', 'akka-wp' ),
      'edit_item'           => __( 'Edit Skill', 'akka-wp' ),
      'update_item'         => __( 'Update Skill', 'akka-wp' ),
      'search_items'        => __( 'Search Skill', 'akka-wp' ),
      'not_found'           => __( 'No Skills found', 'akka-wp' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'akka-wp' ),
    );

    // Another Customizations
    $args = array(
        'label'   => __('Skills','akka-wp' ),
        'description' => __('Akka WP Skills', 'akka-wp'),
        'labels'  => $labels,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-tools',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );

    // register the post Type
    register_post_type( 'skills', $args);
}

add_action('init', 'akka_wp_services_post_type', 0 );

function akki_wp_services_post_type() {

      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'Services', 'Post Type General Name', 'akka-wp' ),
      'singular_name'       => _x( 'Services', 'Post Type Singular Name', 'akka-wp' ),
      'menu_name'           => __( 'Services', 'akka-wp' ),
      'parent_item_colon'   => __( 'Parent Services', 'akka-wp' ),
      'all_items'           => __( 'All Services', 'akka-wp' ),
      'view_item'           => __( 'View Services', 'akka-wp' ),
      'add_new_item'        => __( 'Add New Services', 'akka-wp' ),
      'add_new'             => __( 'Add New Services', 'akka-wp' ),
      'edit_item'           => __( 'Edit Services', 'akka-wp' ),
      'update_item'         => __( 'Update Services', 'akka-wp' ),
      'search_items'        => __( 'Search Services', 'akka-wp' ),
      'not_found'           => __( 'No Servicess found', 'akka-wp' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'akka-wp' ),
    );

    // Another Customizations
    $args = array(
        'label'   => __('Services','akka-wp' ),
        'description' => __('Akki WP Services', 'akka-wp'),
        'labels'  => $labels,
        'supports' => array('title', 'editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-tools',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );

    // register the post Type
    register_post_type( 'services', $args);
}



add_action('init', 'akka_wp_reference_post_type', 0 );

function akki_wp_reference_post_type() {

      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'References', 'Post Type General Name', 'akka-wp' ),
      'singular_name'       => _x( 'References', 'Post Type Singular Name', 'akka-wp' ),
      'menu_name'           => __( 'References', 'akka-wp' ),
      'parent_item_colon'   => __( 'Parent References', 'akka-wp' ),
      'all_items'           => __( 'All References', 'akka-wp' ),
      'view_item'           => __( 'View References', 'akka-wp' ),
      'add_new_item'        => __( 'Add New References', 'akka-wp' ),
      'add_new'             => __( 'Add New References', 'akka-wp' ),
      'edit_item'           => __( 'Edit References', 'akka-wp' ),
      'update_item'         => __( 'Update References', 'akka-wp' ),
      'search_items'        => __( 'Search References', 'akka-wp' ),
      'not_found'           => __( 'No Servicess found', 'akka-wp' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'akka-wp' ),
    );

    // Another Customizations
    $args = array(
        'label'   => __('References','akka-wp' ),
        'description' => __('Akki WP References', 'akka-wp'),
        'labels'  => $labels,
        'supports' => array('thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-tools',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );

    // register the post Type
    register_post_type( 'reference', $args);
}


add_action('init', 'akka_wp_portfolio_post_type', 0 );

function akki_wp_portfolio_post_type() {

      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'Portfolio', 'Post Type General Name', 'akka-wp' ),
      'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'akka-wp' ),
      'menu_name'           => __( 'Portfolio', 'akka-wp' ),
      'parent_item_colon'   => __( 'Parent Portfolio', 'akka-wp' ),
      'all_items'           => __( 'All Portfolio', 'akka-wp' ),
      'view_item'           => __( 'View Portfolio', 'akka-wp' ),
      'add_new_item'        => __( 'Add New Portfolio', 'akka-wp' ),
      'add_new'             => __( 'Add New Portfolio', 'akka-wp' ),
      'edit_item'           => __( 'Edit Portfolio', 'akka-wp' ),
      'update_item'         => __( 'Update Portfolio', 'akka-wp' ),
      'search_items'        => __( 'Search Portfolio', 'akka-wp' ),
      'not_found'           => __( 'No Servicess found', 'akka-wp' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'akka-wp' ),
    );

    // Another Customizations
    $args = array(
        'label'   => __('Portfolio','akka-wp' ),
        'description' => __('Akka WP Portfolio', 'akka-wp'),
        'labels'  => $labels,
        'supports' => array('title','editor','thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-tools',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );

    // register the post Type
    register_post_type( 'portfolio', $args);
}