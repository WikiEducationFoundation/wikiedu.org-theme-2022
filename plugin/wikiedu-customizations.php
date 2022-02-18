<?php
/**
 * Plugin Name:       Wiki Education Customizations
 * Plugin URI:        https://wikiedu.org/
 * Description:       Custom functionalities for the website
 * Version:           1.2.0
 * Author:            Charles Cifuentes
 * Author URI:        https://charles-dev.netlify.app/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

 /* Courses Post Type */
function register_courses_post_type() {
    $labels = array(
        'name'                  => _x( 'Courses', 'Post type general name', 'understrap' ),
        'singular_name'         => _x( 'Course', 'Post type singular name', 'understrap' ),
        'menu_name'             => _x( 'Courses', 'Admin Menu text', 'understrap' ),
        'name_admin_bar'        => _x( 'Course', 'Add New on Toolbar', 'understrap' ),
        'add_new'               => __( 'Add New', 'understrap' ),
        'add_new_item'          => __( 'Add New course', 'understrap' ),
        'new_item'              => __( 'New course', 'understrap' ),
        'edit_item'             => __( 'Edit course', 'understrap' ),
        'view_item'             => __( 'View course', 'understrap' ),
        'all_items'             => __( 'All courses', 'understrap' ),
        'search_items'          => __( 'Search courses', 'understrap' ),
        'parent_item_colon'     => __( 'Parent courses:', 'understrap' ),
        'not_found'             => __( 'No courses found.', 'understrap' ),
        'not_found_in_trash'    => __( 'No courses found in Trash.', 'understrap' ),
        'featured_image'        => _x( 'Course Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'understrap' ),
        'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'understrap' ),
        'remove_featured_image' => _x( 'Remove featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'understrap' ),
        'use_featured_image'    => _x( 'Use as featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'understrap' ),
        'archives'              => _x( 'Course archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'understrap' ),
        'insert_into_item'      => _x( 'Insert into course', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'understrap' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this course', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'understrap' ),
        'filter_items_list'     => _x( 'Filter courses list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'understrap' ),
        'items_list_navigation' => _x( 'Courses list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'understrap' ),
        'items_list'            => _x( 'Courses list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'understrap' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Courses custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'courses', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Courses', $args );
}
add_action( 'init', 'register_courses_post_type' );

/* Testimonials Post Type */
function register_testimonials_post_type() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'understrap' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'understrap' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'understrap' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'understrap' ),
        'add_new'               => __( 'Add New', 'understrap' ),
        'add_new_item'          => __( 'Add New testimonial', 'understrap' ),
        'new_item'              => __( 'New testimonial', 'understrap' ),
        'edit_item'             => __( 'Edit testimonial', 'understrap' ),
        'view_item'             => __( 'View testimonial', 'understrap' ),
        'all_items'             => __( 'All testimonials', 'understrap' ),
        'search_items'          => __( 'Search testimonials', 'understrap' ),
        'parent_item_colon'     => __( 'Parent testimonials:', 'understrap' ),
        'not_found'             => __( 'No testimonials found.', 'understrap' ),
        'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'understrap' ),
        'featured_image'        => _x( 'Testimonial Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'understrap' ),
        'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'understrap' ),
        'remove_featured_image' => _x( 'Remove featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'understrap' ),
        'use_featured_image'    => _x( 'Use as featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'understrap' ),
        'archives'              => _x( 'Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'understrap' ),
        'insert_into_item'      => _x( 'Insert into testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'understrap' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'understrap' ),
        'filter_items_list'     => _x( 'Filter testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'understrap' ),
        'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'understrap' ),
        'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'understrap' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Testimonials custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Testimonials', $args );
}
add_action( 'init', 'register_testimonials_post_type' );

/* Testimonials Shortcode */
function testimonials_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'nposts' => '3',
        'category' => null
    ), $atts );

    $html = '<div class="row">';
    $html .= '<div class="col-sm-12">';
    $html .= '<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">';
    //$html .= '<!-- Carousel indicators -->';
    //$html .= '<ol class="carousel-indicators">';
    //$html .= '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
    //$html .= '<li data-target="#myCarousel" data-slide-to="1"></li>';
    //$html .= '<li data-target="#myCarousel" data-slide-to="2"></li>';
    //$html .= '</ol>';   
    $html .= '<!-- Wrapper for carousel items -->';
    $html .= '<div class="carousel-inner">';

    $args = array(
        'numberposts' => $a['nposts'],
        'post_type' => 'testimonials',
        'meta_query' => array( array( 'key' => 'category', 'value' => $a['category']))
    );

    $testimonials = get_posts( $args );
    $img = get_stylesheet_directory_uri()."/src/img/testimonials_quote.svg";

    foreach ($testimonials as $testimonial) :

        $html .= '  <div class="carousel-item">';
        $html .= '      <div class="media">';
        $html .=            get_the_post_thumbnail( $testimonial->ID, 'full', array( 'class' => 'mr-3' ) );
        $html .= '              <div class="media-body">';
        $html .= '                  <div class="testimonial">';
        $html .= '                      <img src="'.$img.'" alt="">';
        $html .= '                      <p class="testimonial__description">'.$testimonial->post_content.'</p>';
        $html .= '                      <div class="testimonial__author--name">'.$testimonial->post_title.'</div>';
        $html .= '                      <div class="testimonial__author--company">'.get_field('testimonial_author_company', $testimonial->ID).'</div>';
        $html .= '                  </div>';
        $html .= '              </div>';
        $html .= '      </div>';			
        $html .= '  </div>';

    endforeach;
    $html .= '      <!-- Carousel controls -->';
	$html .= '          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">';
	$html .= '	            <i class="fa fa-angle-left"></i>';
	$html .= '          </a>';
	$html .= '          <a class="carousel-control-next" href="#myCarousel" data-slide="next">';
	$html .= '	            <i class="fa fa-angle-right"></i>';
	$html .= '          </a>';
    $html .= '      </div>';
    $html .= '  </div>';
    $html .= ' </div>';
    $html .= '</div>';

    $html .= '<script>';
    $html .= 'document.getElementsByClassName("carousel-item")[0].classList.add("active");';
    $html .= '</script>';

    return $html;
}

add_shortcode( 'testimonials', 'testimonials_shortcode' );

/* Add a Search form and Mobile close button */
function add_mobile_close_button($items, $args) {
    if( $args->theme_location == 'primary' ){
        $search_form .= '<li class="menu-item search-form-item">'
                  . '<form role="search" method="get" class="search-form" action="'.home_url( '/' ).'">'
                  . '<label>'
                  . '<span class="screen-reader-text">' . _x( 'Search for:', 'label' ) . '</span>'
                  . '<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Search …', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />'
                  . '</label>'
                  . '<input type="submit" class="search-submit" value="'. esc_attr_x('Search', 'submit button') .'" />'
                  . '</form>'
                  . '</li>';
        
        $close_button =  '<li class="menu-item close-button-item">'
                      . '<a href="javascript:void(0)" class="closebtn" id="hamburguer-close-btn">×</a>'
                      . '</li>';
    
        return  $close_button . $search_form . $items;
    }
}
add_filter('wp_nav_menu_items', 'add_mobile_close_button', 10, 2);

