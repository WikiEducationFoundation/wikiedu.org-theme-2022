<?php
/**
 * Partial template for the Impact Page
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">
		<section class="impact-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="impact-intro__heading"><?php the_field('impact_intro') ?></h3>
						<p class="impact-intro__description"><?php the_field('impact_intro_description') ?></p>
					</div>
					<div class="col-md-6">
						<img class="green-purple-border" src="<?php the_field('impact_intro_image') ?>" alt="">
					</div>
				</div>
			</div>
		</section>
		<section class="impact-stats">
			<div class="container">
				<h4 class="impact-stats__heading-intro-1"><?php the_field('impact_stats_heading_intro_1') ?></h4>
				<div class="row">
					<div class="col-md-6">
						<h2 class="impact-stats__heading-1"><?php the_field('impact_stats_heading_1') ?></h2>
						<p class="impact-stats__description-1"><?php the_field('impact_stats_description_1') ?></p>
					</div>
					<div class="col-md-6">
						<h2 class="impact-stats__heading-2"><?php the_field('impact_stats_heading_2') ?></h2>
						<p class="impact-stats__description-2"><?php the_field('impact_stats_description_2') ?></p>
					</div>
				</div>
				<h3 class="impact-stats__heading-intro-2"><?php the_field('impact_stats_heading_intro_2') ?></h3>
				<div class="impact-stats__since"><?php the_field('impact_stats_since') ?></div>	
				<div class="row">
					<div class="col-md-4">
					  <a class="card-counter-link" href="<?php the_field('impact_stats_card_1_link') ?>" title="<?php the_field('impact_stats_card_1_link_title') ?>">
							<div class="impact-stats__card-wrapper-1">
								<div class="impact-stats__card-counter">
									<div class="impact-stats__card-counter-number"><?php the_field('impact_stats_card_1_number') ?></div>
									<img class="impact-stats__card-counter-icon" src="<?php the_field('impact_stats_card_1_icon') ?>" alt="">
								</div>
								<div class="impact-stats__card-type"><?php the_field('impact_stats_cart_1_type') ?></div>
								<div class="impact-stats__card-description"><?php the_field('impact_stats_card_1_description') ?></div>
              </a>
						</div>
					</div>
					<div class="col-md-4">
					  <a class="card-counter-link" href="<?php the_field('impact_stats_card_2_link') ?>" title="<?php the_field('impact_stats_card_2_link_title') ?>">
							<div class="impact-stats__card-wrapper-2">
								<div class="impact-stats__card-counter">
									<div class="impact-stats__card-counter-number"><?php the_field('impact_stats_card_2_number') ?></div>
									<img class="impact-stats__card-counter-icon" src="<?php the_field('impact_stats_card_2_icon') ?>" alt="">
								</div>
								<div class="impact-stats__card-type"><?php the_field('impact_stats_cart_2_type') ?></div>
								<div class="impact-stats__card-description"><?php the_field('impact_stats_card_2_description') ?></div>
							</div>
            </a>
					</div>
					<div class="col-md-4">
					  <a class="card-counter-link" href="<?php the_field('impact_stats_card_3_link') ?>" title="<?php the_field('impact_stats_card_3_link_title') ?>">
							<div class="impact-stats__card-wrapper-3">
								<div class="impact-stats__card-counter">
									<div class="impact-stats__card-counter-number"><?php the_field('impact_stats_card_3_number') ?></div>
									<img class="impact-stats__card-counter-icon" src="<?php the_field('impact_stats_card_3_icon') ?>" alt="">
								</div>
								<div class="impact-stats__card-type"><?php the_field('impact_stats_cart_3_type') ?></div>
								<div class="impact-stats__card-description"><?php the_field('impact_stats_card_3_description') ?></div>
							</div>
            </a>
					</div>
				</div>
				<div class="row p-5">
					<div class="col-md-6 d-flex justify-content-center">
						<div class="impact-stats__percentage-wrapper">
							<div class="impact-stats__percentage-bar-1"></div>
							<h2 class="impact-stats__percentage-heading"><?php the_field('impact_stats_percentage_heading_1') ?></h2>
							<div class="impact-stats__percentage-number-1"><?php the_field('impact_stats_percentage_number_1') ?></div>
							<img class="impact-stats__percentage-image" src="<?php the_field('impact_stats_percentage_image_1') ?>" alt="">
						</div>
					</div>
					<div class="col-md-6 d-flex justify-content-center">
						<div class="impact-stats__percentage-wrapper">
							<div class="impact-stats__percentage-bar-2"></div>
							<h2 class="impact-stats__percentage-heading"><?php the_field('impact_stats_percentage_heading_2') ?></h2>
							<div class="impact-stats__percentage-number-2"><?php the_field('impact_stats_percentage_number_2') ?></div>
							<img class="impact-stats__percentage-image" src="<?php the_field('impact_stats_percentage_image_2') ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="impact-stats__how">
			<div class="container">
			  <h2 class="impact-stats__how-title"><?php the_field('impact_how_heading') ?></h3>
				<p class="impact-stats__how-description"><?php the_field('impact_how_description') ?></p>
			</div>
		</section>
		<section class="impact-stats__boxes">
			<div class="container">
				<h2 class="impact-stats__boxes-title"><?php the_field('impact_stats_boxes_title') ?></h2>
				<h3 class="impact-stats__boxes-subtitle"><?php the_field('impact_stats_boxes_subtitle') ?></h3>
				<div class="row">
					<div class="col-md-6">
						<div class="impact-stats__boxes-wrap">
							<img class="impact-stats__boxes-icon" src="<?php the_field('impact_stats_boxes_icon_1') ?>" alt="">
							<h3 class="impact-stats__boxes-heading"><?php the_field('impact_stats_boxes_heading_1') ?></h3>
							<p class="impact-stats__boxes-description"><?php the_field('impact_stats_boxes_description_1') ?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="impact-stats__boxes-wrap">
							<img class="impact-stats__boxes-icon" src="<?php the_field('impact_stats_boxes_icon_2') ?>" alt="">
							<h3 class="impact-stats__boxes-heading"><?php the_field('impact_stats_boxes_heading_2') ?></h3>
							<p class="impact-stats__boxes-description"><?php the_field('impact_stats_boxes_description_2') ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="impact-stats__boxes-wrap">
							<img class="impact-stats__boxes-icon" src="<?php the_field('impact_stats_boxes_icon_3') ?>" alt="">
							<h3 class="impact-stats__boxes-heading"><?php the_field('impact_stats_boxes_heading_3') ?></h3>
							<p class="impact-stats__boxes-description"><?php the_field('impact_stats_boxes_description_3') ?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="impact-stats__boxes-wrap">
							<img class="impact-stats__boxes-icon" src="<?php the_field('impact_stats_boxes_icon_4') ?>" alt="">
							<h3 class="impact-stats__boxes-heading"><?php the_field('impact_stats_boxes_heading_4') ?></h3>
							<p class="impact-stats__boxes-description"><?php the_field('impact_stats_boxes_description_4') ?></p>
						</div>
					</div>
				</div>
			</div>
			<img class="impact-stats__boxes-sstones" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/stepping-stones-with-grid-2.svg" alt="">
		</section>
		<section class="impact-stats__slider">
			<div class="container">
				<h3 class="impact-stats__slider-heading"><?php the_field('impact_stats_slider_title') ?></h3>
				<div class="row">
					<div class="col-md-12">
						<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
							<!-- <ol class="carousel-indicators">
								<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
							</ol> -->
							<!-- Carousel controls -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="carousel-caption d-md-block">
										<h5><?php the_field('impact_stats_slider_title_1') ?></h5>
										<p><?php the_field('impact_stats_slider_description_1') ?></p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="carousel-caption d-md-block">
										<h5><?php the_field('impact_stats_slider_title_2') ?></h5>
										<p><?php the_field('impact_stats_slider_description_2') ?></p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="carousel-caption d-md-block">
										<h5><?php the_field('impact_stats_slider_title_3') ?></h5>
										<p><?php the_field('impact_stats_slider_description_3') ?></p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="carousel-caption d-md-block">
										<h5><?php the_field('impact_stats_slider_title_4') ?></h5>
										<p><?php the_field('impact_stats_slider_description_4') ?></p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="carousel-caption d-md-block">
										<h5><?php the_field('impact_stats_slider_title_5') ?></h5>
										<p><?php the_field('impact_stats_slider_description_5') ?></p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="carousel-caption d-md-block">
										<h5><?php the_field('impact_stats_slider_title_6') ?></h5>
										<p><?php the_field('impact_stats_slider_description_6') ?></p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="carousel-caption d-md-block">
										<h5><?php the_field('impact_stats_slider_title_7') ?></h5>
										<p><?php the_field('impact_stats_slider_description_7') ?></p>
									</div>
								</div>
							</div>
							<div class="carousel-control">
								<a class="carousel-control-prev" href="#carouselExampleCaptions" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								</a>
								<a class="carousel-control-next" href="#carouselExampleCaptions" data-slide="next">
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
