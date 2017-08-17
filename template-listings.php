<?php
/**
 * Template Name: Listings Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header(); ?>

<div class="hero-section white-border list-section" id="list-section-1">
    <div class="sect-background" style="background-image: url('<?php the_field('list_image_1') ?>'); "></div>
    <div class="hero-content animated fadeInUp">
        <h2><?php the_field('list_title_1'); ?></h2>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" />
        </div>
        <a class="life-link" href="<?php echo get_home_url(); ?>/listings/single-family/"></a>
    </div>
</div>
<div class="hero-section white-border list-section" id="list-section-2">
    <div class="sect-background" style="background-image: url('<?php the_field('list_image_2') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('list_title_2'); ?></h2>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.svg" />
        </div>
        <a class="life-link" href="<?php echo get_home_url(); ?>/listings/townhomes/"></a>
    </div>
</div>
<div class="hero-section white-border list-section" id="list-section-3">
    <div class="sect-background" style="background-image: url('<?php the_field('list_image_3') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('list_title_3'); ?></h2>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.svg" />
        </div>
        <a class="life-link" href="<?php echo get_home_url(); ?>/listings/commercial/"></a>
    </div>
</div>
<div class="hero-section list-section hide" id="list-section-4">
    <div class="sect-background" style="background-image: url('<?php the_field('list_image_4') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('list_title_4'); ?></h2>
       <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.svg" />
        </div>
        <a class="life-link" href="#"></a>
    </div>
</div>

<ul class="hero--pager">
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#list-section-1">
            <span id="indicator-1" class="active"></span>
        </a>
    </li>
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#list-section-2">
            <span id="indicator-2"></span>
        </a>
    </li>
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#list-section-3">
            <span id="indicator-3"></span>
        </a>
    </li>
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#list-section-4">
            <span id="indicator-4"></span>
        </a>
    </li>
</ul>
<?php 
get_footer();