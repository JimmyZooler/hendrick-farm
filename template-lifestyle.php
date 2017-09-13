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

<div class="hero-section white-border life-section" id="life-section-1">
    <div class="sect-background" style="background-image: url('<?php the_field('life_image_1') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('life_title_1'); ?></h2>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" />
        </div>
        <a class="life-link" href="<?php echo get_home_url(); ?>/village-centre/"></a>
    </div>
</div>
<div class="hero-section white-border life-section" id="life-section-2">
    <div class="sect-background" style="background-image: url('<?php the_field('life_image_2') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('life_title_2'); ?></h2>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" />
        </div>
        <a class="life-link" href="<?php echo get_home_url(); ?>/farm/"></a>
    </div>
</div>
<div class="hero-section white-border life-section" id="life-section-3">
    <div class="sect-background" style="background-image: url('<?php the_field('life_image_3') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('life_title_3'); ?></h2>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" />
        </div>
        <a class="life-link" href="<?php echo get_home_url(); ?>/hendrick-foundation/"></a>
    </div>
</div>
<div class="hero-section white-border life-section" id="life-section-4">
    <div class="sect-background" style="background-image: url('<?php the_field('life_image_4') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('life_title_4'); ?></h2>
       <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" />
        </div>
        <a class="life-link" href="<?php echo get_home_url(); ?>/lifestyle/parks-trails"></a>
    </div>
</div>
<div class="hero-section life-section" id="life-section-5" >
    <div class="sect-background" style="background-image: url('<?php the_field('life_image_5') ?>'); "></div>
    <div class="hero-content animated">
        <h2><?php the_field('life_title_5'); ?></h2>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" />
        </div>
        <a class="life-link" href="<?php echo get_home_url(); ?>/lifestyle/adaptive-development"></a>
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
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#life-section-5">
            <span id="indicator-5"></span>
        </a>
    </li>
</ul>
<?php 
get_footer();