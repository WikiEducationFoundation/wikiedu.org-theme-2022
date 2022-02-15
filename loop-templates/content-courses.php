<?php
/**
 * Post rendering courses loop
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-md-4">

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <a class="courses_posts__link" href="<?php echo get_permalink($post->ID) ?>"><?php echo get_the_post_thumbnail($post->ID, 'full'); ?></a>
        <small class="courses_posts__date"><?php the_date(); ?></small>
        <a class="courses_posts__link" href="<?php echo get_permalink($post->ID) ?>"><h3 class="blog_posts__ltitle"><?php the_title(); ?></h3></a>
        <a class="courses_posts__link" href="<?php echo get_permalink($post->ID) ?>">Read More...</a>

    </article><!-- #post-## -->

</div>

