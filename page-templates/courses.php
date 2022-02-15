<?php
/**
 * Template Name: Courses
 *
 * Template for displaying the courses landing page
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$subtitle = get_field('subtitle_page');

?>

<div class="wrapper" id="courses-wrapper">
    
	<header class="courses__header">
		<div class="courses__header-wrapper">
			<h1 class="courses__header-subtitle">Customized Wikipedia & Wikidata training courses</h1>
		</div>
	</header><!-- .entry-header -->

		<main class="site-main" id="main" role="main">

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'loop-templates/content', 'courses-landing' );
			}
			?>

		</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
