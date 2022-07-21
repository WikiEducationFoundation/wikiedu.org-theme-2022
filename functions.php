<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

// Override the excerpt "Read More" format from understrap's inc/extras.php
// This format matches the previous one from Wiki Education's 2015 theme:
// https://github.com/WikiEducationFoundation/WikiEduWebsite2015/blob/master/lib/extras.php#L31
function understrap_all_excerpts_get_more_link( $post_excerpt ) {
    if ( ! is_admin() ) {
            $post_excerpt = $post_excerpt . ' ... <a class="btn btn-secondary understrap-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">Continued</a>';
    }
    return $post_excerpt;
}

// Add excerpt support to Page type, so that we can control Twitter card text
add_post_type_support( ‘page’, ‘excerpt’ );

# Try to fix upload limit
@ini_set( 'upload_max_size' , '16M' );
@ini_set( 'post_max_size', '16M');
