<?php
/**
 * Partial template for content in courses
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<section class="courses__description">
			<div class="container">
				<?php the_field('courses_description') ?>
			</div>
		</section>	

		<section class="open__courses">
			<div class="container">
				<h2 class="open__courses-title">Open Courses</h2>

				<div class="open__courses-loop">
					<div class="row">
					<?php
					$args = array(
						'numberposts' => 6,
						'post_type' => 'courses',
						'order' => 'ASC'
					);

					$open_courses = get_posts( $args );

					foreach( $open_courses as $courses ) { ?>
						<div class="col-md-4">
							<div class="open__courses-loop-wrapper">
								<a class="open__courses-loop-thumb" href="<?php echo get_permalink($courses->ID) ?>"><?php echo get_the_post_thumbnail($courses->ID, 'full'); ?></a>
								<div class="open__courses-loop-content">
									<small class="open__courses-loop-dates"><?php echo get_field('course_dates', $courses->ID) ?></small>
									<a class="open__courses-loop-link" href="<?php echo get_permalink($courses->ID) ?>"><h3 class="open__courses-loop-title"><?php echo $courses->post_title ?></h3></a>
									<div class="open__courses-loop-excerpt"><?php echo $courses->post_excerpt ?></div>
									<a class="btn btn-secondary open__courses-loop-btn" href="<?php echo get_permalink($courses->ID) ?>">ENROLL NOW</a>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</section>
		
		<section class="course__offering">
			<div class="container">
				<h2 class="course__offering-title">Course Offerings</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="course__offering-wrapper">
							<img class="course__offering-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/course-offering1.svg" alt="">
							<h3 class="course__offering-heading"><?php the_field('courses_offering_title_1'); ?></h3>
							<div class="course__offering-body"><?php the_field('courses_offering_content_1'); ?></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="course__offering-wrapper">
							<img class="course__offering-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/course-offering2.svg" alt="">
							<h3 class="course__offering-heading"><?php the_field('courses_offering_title_2'); ?></h3>
							<div class="course__offering-body"><?php the_field('courses_offering_content_2'); ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="course__offering-wrapper">
							<img class="course__offering-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/course-offering3.svg" alt="">
							<h3 class="course__offering-heading"><?php the_field('courses_offering_title_3'); ?></h3>
							<div class="course__offering-body"><?php the_field('courses_offering_content_3'); ?></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="course__offering-wrapper">
							<img class="course__offering-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/course-offering4.svg" alt="">
							<h3 class="course__offering-heading"><?php the_field('courses_offering_title_4'); ?></h3>
							<div class="course__offering-body"><?php the_field('courses_offering_content_4'); ?></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="testimonials">
			<div class="container">
				<?php the_field('testimonials_shortcode') ?>
			</div>
		</section>

		<section class="courses__cta">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="courses__cta-heading"><?php the_field('courses_cta_heading'); ?></h2>
						<div class="courses__cta-content"><?php the_field('courses_cta_content'); ?></div>
						<a href="<?php the_field('courses_cta_button_url'); ?>" class="btn btn-primary courses__cta-btn"><?php the_field('courses_cta_button_name'); ?></a>
					</div>
				</div>
			</div>
		</section>

		<section class="courses__carousel">
			<div class="container">
				<h2 class="courses__carousel-title">How our courses inspire scholars and scientists</h2>

				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block courses__carousel_image" src="<?php the_field('carousel_image_1') ?>" alt="First slide">
							<h3 class="courses__carousel-ltitle"><?php the_field('carousel_title_1') ?></h3>
							<div class="courses__carousel-content"><?php the_field('carousel_content_1') ?></div>
						</div>
						<div class="carousel-item">
							<img class="d-block courses__carousel_image" src="<?php the_field('carousel_image_2') ?>" alt="Second slide">
							<h3 class="courses__carousel-ltitle"><?php the_field('carousel_title_2') ?></h3>
							<div class="courses__carousel-content"><?php the_field('carousel_content_2') ?></div>
						</div>
						<div class="carousel-item">
							<img class="d-block courses__carousel_image" src="<?php the_field('carousel_image_3') ?>" alt="Third slide">
							<h3 class="courses__carousel-ltitle"><?php the_field('carousel_title_3') ?></h3>
							<div class="courses__carousel-content"><?php the_field('carousel_content_3') ?></div>
						</div>
					</div>
					<div class="carousel-control-wrapper">
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</section>

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
