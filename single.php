<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$hero_img = get_field('hero_image');
?>

<div class="wrapper" id="single-wrapper">

	<?php if (!$hero_img) { ?>
		<header class="entry-header">
			<div class="entry-header-wrapper">
        		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
    	</header><!-- .entry-header -->
	<?php } ?>
    
	<?php if ($hero_img) { ?>
		<header class="entry-header-hero">
			<div class="entry-header-hero-wrapper" style="background-image: url(<?php echo $hero_img ?>); background-size: cover; background-repeat: no-repeat; background-position: center;">
				<div class="entry-title-wrapper">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>
			</div>
		</header><!-- .entry-header -->
	<?php } ?>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
