<?php
/**
 * Single course partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">
		<div class="row">
			<div class="col-md-8">
				<?php the_content(); ?>
			</div>
			<div class="col-md-4">
				<div class="course__heading">
					<div class="course__heading-cost">Cost</div>
					<div class="course__heading-price">$ <?php the_field('course_price'); ?></div>
					<div class="course__heading-user"><?php the_field('course_users'); ?></div>
				</div>
				<div class="course__body">
					<a class="btn btn-primary course__body-btn" href="<?php the_field('course_enroll_now_button')?>">ENROLL NOW</a>
					<h3 class="course__body-heading">Course Dates</h3>
					<div class="course__body-content"><?php the_field('course_dates'); ?></div>
					<h3 class="course__body-heading">Class Meeting Time</h3>
					<div class="course__body-content"><?php the_field('course_class_meeting_time'); ?></div>
					<h3 class="course__body-heading">Application Deadline</h3>
					<div class="course__body-content"><?php the_field('course_application_deadline'); ?></div>
					<!-- <h3 class="course__body-heading">Time Commitment per week</h3>
					<div class="course__body-content"><?php the_field('course_time_commitment_per_week'); ?></div>
					<h3 class="course__body-heading">Goal</h3>
					<div class="course__body-content"><?php the_field('course_goal'); ?></div> -->
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
