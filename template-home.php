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

<div class="hero-section white-border" id="hero-section-1">
    <div class="sect-background" style="background-image: url('<?php the_field('hero_1_image') ?>'); "></div>
    <div class="hero-content animated fadeInUp">
        <h2><?php the_field('hero_title_1'); ?></h2>
        <div>
            <?php the_field('hero_link_text_1'); ?><img src="wp-content/themes/hendrick-farm/img/arrow_black.svg" />
        </div>
        <a href="<?php echo get_home_url(); ?>/listings/" class="hero-link"></a>
    </div>
</div>
<div class="hero-section white-border" id="hero-section-2" >
    <div class="sect-background" style="background-image: url('<?php the_field('hero_image_2') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('hero_2_title'); ?></h2>
        <div>
            <?php the_field('hero_2_link_text'); ?><img src="wp-content/themes/hendrick-farm/img/arrow_white.svg" />
        </div>
        <a href="<?php echo get_home_url(); ?>/lifestyle/" class="hero-link"></a>
    </div>
</div>
<div class="hero-section white-border" id="hero-section-3">
    <div class="sect-background" style="background-image: url('<?php the_field('hero_image_3') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('hero_3_title'); ?></h2>
        <div>
            <?php the_field('hero_3_link_text'); ?><img src="wp-content/themes/hendrick-farm/img/arrow_white.svg" />
        </div>
        <a href="<?php echo get_home_url(); ?>/listings/townhomes/" class="hero-link"></a>
    </div>
</div>
<div class="hero-section" id="hero-section-4">
    <div class="sect-background" style="background-image: url('<?php the_field('hero_image_4') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('hero_4_title'); ?></h2>
        <div>
        <?php the_field('hero_4_link_text'); ?><img src="wp-content/themes/hendrick-farm/img/arrow_white.svg" />
        </div>
        <a href="<?php echo get_home_url(); ?>/lifestyle/adaptive-development/" class="hero-link"></a>
    </div>
</div>
<div id="home-section-5">
    <div class="row">
        <div class="col-3 col-md-2 column-1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hendrick_art_1.svg" />
        </div>
        <div class="col-9 col-md-10 column-2">
            <div class="text-column">
                <h3><?php the_field('section_5_heading'); ?></h3>
                <p><?php the_field('section_5_subheading'); ?></p>
            </div>
        </div>
    </div>
</div>
<ul class="hero--pager">
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#hero-section-1">
            <span id="indicator-1" class="active"></span>
        </a>
    </li>
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#hero-section-2">
            <span id="indicator-2"></span>
        </a>
    </li>
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#hero-section-3">
            <span id="indicator-3"></span>
        </a>
    </li>
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#hero-section-4">
            <span id="indicator-4"></span>
        </a>
    </li>
</ul>
<?php 
get_footer();