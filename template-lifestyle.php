<?php
/**
 * Template Name: Lifestyle Landing Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header(); ?>

<div class="hero-section" id="life-section-1" style="background-image: url('<?php the_field('life_image_1') ?>'); ">
    <div class="hero-content">
        <h2><?php the_field('life_title_1'); ?></h2>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" /></a>
    </div>
</div>
<div class="hero-section" id="life-section-2" style="background-image: url('<?php the_field('life_image_2') ?>'); ">
    <div class="hero-content animated">
        <h2><?php the_field('life_title_2'); ?></h2>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" /></a>
    </div>
</div>
<div class="hero-section" id="life-section-3" style="background-image: url('<?php the_field('life_image_3') ?>'); ">
    <div class="hero-content animated">
        <h2><?php the_field('life_title_3'); ?></h2>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" /></a>
    </div>
</div>
<div class="hero-section" id="life-section-4" style="background-image: url('<?php the_field('life_image_4') ?>'); ">
    <div class="hero-content animated">
        <h2><?php the_field('life_title_4'); ?></h2>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" /></a>
    </div>
</div>
<div class="hero-section" id="life-section-5" style="background-image: url('<?php the_field('life_image_5') ?>'); ">
    <div class="hero-content animated">
        <h2><?php the_field('life_title_5'); ?></h2>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" /></a>
    </div>
</div>
<ul class="hero--pager">
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#life-section-1">
            <span id="indicator-1" class="active"></span>
        </a>
    </li>
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#life-section-2">
            <span id="indicator-2"></span>
        </a>
    </li>
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#life-section-3">
            <span id="indicator-3"></span>
        </a>
    </li>
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#life-section-4">
            <span id="indicator-4"></span>
        </a>
    </li>
</ul>
<?php 
get_footer();