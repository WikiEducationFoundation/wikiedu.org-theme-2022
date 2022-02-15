<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

    <header class="archive__header">
        <div class="archive__header-wrapper">
            <h1 class="archive__header-title"><?php the_archive_title(); ?></h1>
            <div class="archive__header-subtitle"><?php the_archive_description(); ?></div>
        </div>
    </header><!-- .entry-header -->

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

            <main class="site-main" id="main">
                <div class="archive__loop">
                    <div class="row">

                    <?php
                    if ( have_posts() ) {
                        // Start the Loop.
                        while ( have_posts() ) {
                            the_post();

                            /*
                            * Include the Post-Format-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                            */
                            get_template_part( 'loop-templates/content', get_post_format() );
                        }
                    } else {
                        get_template_part( 'loop-templates/content', 'none' );
                    }
                    ?>
                    </div>
                </div>
            </main><!-- #main -->

            <!-- The pagination component -->
            <?php understrap_pagination(); ?>

    </div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
