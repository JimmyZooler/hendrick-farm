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

<div class="hero-section hero-section-1" style="background-image: url('<?php the_field('hero_image_1') ?>'); ">
    <div class="hero-content-1">
        <h2><?php the_field('hero_title_1'); ?></h2>
        <a href="#"><?php the_field('hero_link_text_1'); ?></a>
    </div>
</div>
<?php 
get_footer();