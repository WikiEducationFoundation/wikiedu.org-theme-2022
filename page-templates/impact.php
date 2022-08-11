<?php
/**
 * Template Name: Impact
 *
 * Template for displaying the Impact Page
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="impact-page-wrapper">
    
    <header class="entry-header">
		<div class="entry-header-wrapper">
			<h1 class="entry-header__title">A small nonprofit <br> with a big impact to <span>Wikipedia</span></h1>
            <img class="hero__sstones" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/stepping+stones1.svg" alt="">
		</div>
    </header><!-- .entry-header -->

    <main class="site-main" id="main" role="main">

        <?php
        while ( have_posts() ) {
            the_post();
            get_template_part( 'loop-templates/content', 'impact' );
        }
        ?>

    </main><!-- #main -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
