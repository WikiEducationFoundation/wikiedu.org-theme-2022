<?php
/**
 * Template for displaying the homepage
 * 
 * @package Understrap
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="hero__heading"><?php the_field('hero_heading') ?></h1>
                <p class="hero__description"><?php the_field('hero_description') ?></p>
                <a class="btn btn-secondary hero__button" href="<?php the_field('hero_button_url') ?>" role="button"><?php the_field('hero_button_text') ?></a>
            </div>
            <div class="col-md-6">
                <img class="hero__image" src="<?php the_field('hero_image') ?>" alt="">
            </div>
        </div>
    </div>
    <img class="hero__sstones" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/stepping+stones1.svg" alt="">
</section>
<section class="cta">
    <div class="container">
        <h1 class="cta__heading"><?php the_field('cta_heading') ?></h1>
        <div class="row">
            <div class="col-md-4">
                <div class="cta__wrapper">
                    <img class="cta__image" src="<?php the_field('cta1_image') ?>" alt="">
                    <p class="cta__description"><?php the_field('cta1_description') ?></p>
                    <a class="btn cta__btn1" href="<?php the_field('cta1_button_url') ?>"><?php the_field('cta1_button_text') ?></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cta__wrapper">
                    <img class="cta__image" src="<?php the_field('cta2_image') ?>" alt="">
                    <p class="cta__description"><?php the_field('cta2_description') ?></p>
                    <a class="btn cta__btn2" href="<?php the_field('cta2_button_url') ?>"><?php the_field('cta2_button_text') ?></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cta__wrapper">
                    <img class="cta__image" src="<?php the_field('cta3_image') ?>" alt="">
                    <p class="cta__description"><?php the_field('cta3_description') ?></p>
                    <a class="btn cta__btn3" href="<?php the_field('cta3_button_url') ?>"><?php the_field('cta3_button_text') ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="latest_posts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest_posts__wrapper">
                    <h2 class="latest_posts__title"><?php the_field('latest_posts_title') ?></h2>
                    <h3 class="latest_posts__subtitle"><?php the_field('latest_posts_subtitle') ?></h3>
                    <p class="latest_posts__description"><?php the_field('latest_posts_description') ?></p>
                </div>
            </div>
        </div>
        <div class="latest_posts__loop">
            <div class="row">
            <?php
            $recent_posts = wp_get_recent_posts( array(
                'numberposts' => 3, 
                'post_status' => 'publish'   
            ));

            foreach( $recent_posts as $recent ) { ?>
                <div class="col-md-4">
                    <a class="latest_posts__link" href="<?php echo get_permalink($recent['ID']) ?>"><?php echo get_the_post_thumbnail($recent['ID'], 'full'); ?></a>
                    <small class="latest_posts__date"><?php echo date('M d Y', strtotime( $recent['post_date'] ) ) ?></small>
                    <a class="latest_posts__link" href="<?php echo get_permalink($recent['ID']) ?>"><h3 class="latest_posts__ltitle"><?php echo $recent['post_title'] ?></h3></a>
                    <a class="latest_posts__link" href="<?php echo get_permalink($recent['ID']) ?>">Read More...</a>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="latest_posts__btn">
            <a class="btn btn-secondary" href="<?php the_field('latest_posts_button_url') ?>"><?php the_field('latest_posts_button_name') ?></a>
        </div>
    </div>
    <img class="latest_posts__sstones" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/stepping+stones2.svg" alt="">
</section>
<section class="featured_courses">
    <div class="container">
            <?php
                $args = array(
                    'numberposts' => 3,
                    'post_type' => 'courses'
                );

                $latest_courses = get_posts( $args );
            ?>

            <?php foreach ($latest_courses as $lcourse) { ?>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo get_the_post_thumbnail($lcourse->ID, 'full'); ?>
                    </div>
                    <div class="col-md-6">
                        <h2 class="featured_courses__category"><?php echo the_field('category', $lcourse->ID) ?></h2>
                        <h3 class="featured_courses__title"><?php echo $lcourse->post_title ?></h3>
                        <p class="featured_courses__excerpt"><?php echo $lcourse->post_excerpt ?></p>
                        <a class="btn btn-secondary featured_courses__btn" href="<?php echo get_permalink($lcourse->ID) ?>">LEARN MORE</a>
                    </div>
                </div>
            <?php } ?>
        <div class="featured_courses__btn--more">
            <a class="btn btn-secondary" href="<?php the_field('featured_courses_button_url') ?>"><?php the_field('featured_courses_button_name') ?></a>
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <?php the_field('testimonials_shortcode') ?>
    </div>
</section>
<section class="featured_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="featured_content__wrapper">
                    <h2 class="featured_content__title"><?php the_field('featured_content_title') ?></h2>
                    <h3 class="featured_content__subtitle"><?php the_field('featured_content_subtitle') ?></h3>
                    <p class="featured_content__description"><?php the_field('featured_content_description') ?></p>
                </div>
            </div>
         </div>
        <div class="featured_content__loop">
            <div class="row">

                <?php $featured_content = get_field('featured_content_selection'); ?>

                <?php if( $featured_content ) : ?>
                    <?php foreach( $featured_content as $featured) : ?>
                        <div class="col-md-4">
                            <a class="featured_content__link" href="<?php echo get_permalink($featured->ID) ?>"><?php echo get_the_post_thumbnail($featured->ID, 'full'); ?></a>
                            <small class="featured_content__date"><?php echo date('M d Y', strtotime( $featured->post_date )) ?></small>
                            <a class="featured_content__link" href="<?php echo get_permalink($featured->ID) ?>"><h3 class="featured_content__ltitle"><?php echo $featured->post_title ?></h3></a>
                            <a class="featured_content__link" href="<?php echo get_permalink($featured->ID) ?>">Read More</a>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
                
                
            </div>
        </div>
    </div>
    <img class="featured_content__sstones" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/stepping+stones3.svg" alt="">
</section>
<!-- <section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <button class="accordion"><?php the_field('faq_question_1') ?></button>
                <div class="panel">
                    <p><?php the_field('faq_answer_1') ?></p>
                </div>
                <button class="accordion"><?php the_field('faq_question_1') ?></button>
                <div class="panel">
                    <p><?php the_field('faq_answer_1') ?></p>
                </div>
                <button class="accordion"><?php the_field('faq_question_1') ?></button>
                <div class="panel">
                    <p><?php the_field('faq_answer_1') ?></p>
                </div>
                <button class="accordion"><?php the_field('faq_question_1') ?></button>
                <div class="panel">
                    <p><?php the_field('faq_answer_1') ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="faq__subtitle"><?php the_field('faq_subtitle') ?></h2>
                <h3 class="faq__title"><?php the_field('faq_title') ?></h3>
                <p class="faq__description"><?php the_field('faq_description') ?></p>
                      <img class="faq__image" src="<?php the_field('faq_image') ?>" alt="">
            </div>
        </div>
    </div>
</section> -->

<?php the_content();
