<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="blog__post-date"><?php the_date(); ?><span> / </span><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php the_author() ?></a></div>

	<div class="entry-content">

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<h3 class="blog__categories"><i class="fa fa-th-list" aria-hidden="true"></i>
</i> Categories</h3>
	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

	<div class="blog__author">
		<div class="blog__author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
		</div>
		<div class="blog__author-info">
			<h3 class="blog__author-name"><?php the_author_meta('display_name'); ?></h3>
			<p class="blog__author-bio"><?php the_author_meta('description'); ?></p>
		</div>
	</div>

</article><!-- #post-## -->
