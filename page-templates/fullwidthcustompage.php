<?php
/**
 * Template Name: Full Width Custom Page
 *
 * Template for displaying a Full Width Custom Page
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
			<h1 class="entry-header__title"><?php the_title(); ?></h1>
		</div>
    </header><!-- .entry-header -->

    <main class="site-main" id="main" role="main">

        <?php
        while ( have_posts() ) {
            the_post();
            get_template_part( 'loop-templates/content', 'fullwidth' );
        }
        ?>

    </main><!-- #main -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
