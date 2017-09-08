<?php
/**
 * Template Name: Who We Are Template
 *
 * Template for displaying the "Who We Are" landing page.
 *
 * @package understrap
 */

get_header(); ?>

<div class="hero-section white-border who-section" id="who-section-1">
    <div class="sect-background" style="background-image: url('<?php the_field('background_image_1') ?>'); "></div>
    <div class="hero-content animated fadeInUp">
        <h2>Landlab</h2>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" />
        </div>
        <a class="life-link" href="<?php echo get_home_url(); ?>/landlab/"></a>
    </div>
</div>
<div class="hero-section white-border who-section" id="who-section-2">
    <div class="sect-background" style="background-image: url('<?php the_field('background_image_2') ?>'); "></div>
    <div class="hero-content animated">
        <h2>team</h2>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" />
        </div>
        <a class="life-link" href="<?php echo get_home_url(); ?>/team/"></a>
    </div>
</div>

<ul class="hero--pager">
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#who-section-1">
            <span id="indicator-1" class="active"></span>
        </a>
    </li>
    <li class="pager--indicator">
        <a class="pager--indicator-link" href="#who-section-2">
            <span id="indicator-2"></span>
        </a>
    </li>
</ul>
<?php 
get_footer();