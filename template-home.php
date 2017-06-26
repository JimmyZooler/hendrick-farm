<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header(); ?>

<div class="hero-section" id="hero-section-1" style="background-image: url('<?php the_field('hero_1_image') ?>'); ">
    <div class="hero-content">
        <h2><?php the_field('hero_title_1'); ?></h2>
        <a href="#"><?php the_field('hero_link_text_1'); ?></a>
    </div>
</div>
<div class="hero-section" id="hero-section-2" style="background-image: url('<?php the_field('hero_image_2') ?>'); ">
    <div class="hero-content">
        <h2><?php the_field('hero_2_title'); ?></h2>
        <a href="#"><?php the_field('hero_2_link_text'); ?></a>
    </div>
</div>
<div class="hero-section" id="hero-section-3" style="background-image: url('<?php the_field('hero_image_3') ?>'); ">
    <div class="hero-content">
        <h2><?php the_field('hero_3_title'); ?></h2>
        <a href="#"><?php the_field('hero_3_link_text'); ?></a>
    </div>
</div>
<div class="hero-section" id="hero-section-4" style="background-image: url('<?php the_field('hero_image_4') ?>'); ">
    <div class="hero-content">
        <h2><?php the_field('hero_4_title'); ?></h2>
        <a href="#"><?php the_field('hero_4_link_text'); ?></a>
    </div>
</div>
<div id="home-section-5">
    <div class="row">
        <div class="col-2">
            <img src="<?php the_field('section_5_image'); ?>" />
        </div>
        <div class="col-8 text-column">
            <h3><?php the_field('section_5_heading'); ?></h3>
            <p><?php the_field('section_5_subheading'); ?></p>
        </div>
    </div>
</div>
<?php 
get_footer();