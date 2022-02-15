<?php
/**
 * The template for displaying all single courses
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-course-wrapper">

	<header class="entry-header">
		<div class="entry-header-wrapper">
			<h2 class="entry-subtitle">Courses</h2>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'loop-templates/content', 'single-course' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			}
			?>

		</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
