<?php
/**
 * Template Name: Sidebar Layout
 *
 * Template for displaying a page with a dynamic sidebar
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$subtitle = get_field('subtitle_page');
$hero_img = get_the_post_thumbnail();

?>

<div class="wrapper" id="sidebar-layout">
    
    <?php if (!$hero_img) { ?>
    <header class="entry-header">
        <div class="entry-header-wrapper">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <?php echo (!empty($subtitle)) ? "<div class='entry-subtitle'>" . $subtitle . "</div>" : ''; ?>
        </div>
    </header><!-- .entry-header -->
	<?php } ?>
    
	<?php if ($hero_img) { ?>
    <header class="entry-header-hero">
        <div class="entry-header-hero-wrapper" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-size: cover; background-repeat: no-repeat; background-position: center;">
            <div class="entry-title-wrapper">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <?php echo (!empty($subtitle)) ? "<div class='entry-subtitle'>" . $subtitle . "</div>" : ''; ?>
            </div>
        </div>
    </header><!-- .entry-header -->
	<?php } ?>

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-8 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

            <div class="col-md-4 widget-area">
                <aside class="widget">
                    <h3 class="widget-title">Latest Posts</h3>

                    <?php
                    $categories = get_field('featured_categories');
                    $args = array(
                        'category' => $categories
                    );
                    
                    $latest_posts = get_posts( $args );
                    
                    ?>

                    <ul>
                    <?php foreach ($latest_posts as $latest_post) { ?>
                        <li>
                            <a href="<?php echo $latest_post->guid; ?>"><?php echo $latest_post->post_title; ?></a> 
                        </li>
                    <?php } ?>
                    </ul>
                </aside>
            </div>

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
