<?php
/**
 * Template Name: Parks Page Template
 *
 * This is the template that displays the Parks and Trails page.
 *
 * @package understrap
 */

get_header();

?>

<div id="page-wrapper">

    <header class="page-header dark" style="background-image: url('<?php the_field('header_image') ?>'); ">
    
        <div class="heading-wrap">
            
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        
            <h3 class="page-subtitle hidden-md-down"><?php the_field('header_subtitle'); ?></h3>
            
        </div>
    
    </header>
    
    <div class="container-fluid">

        
        <div class="row page-block-wrapper">

            <div class="col-lg-7 page-block write-up">
                
                <p><?php the_field('first_paragraph'); ?></p>

                <p class="block-quote"><?php the_field('first_quote'); ?></p>

            </div>
            
            <div class="col-lg-5 page-block">

                <div class="image-block solo-image" style="background-image: url('<?php the_field( 'image_1' ); ?>');"></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-6 col-lg-3 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_2' ); ?>');"></div>

            </div>

            <div class="col-6 col-lg-3 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_3' ); ?>');"></div>

            </div>
            
            <div class="col-lg-6 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_4' ); ?>');"></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper">

            <div class="col-12 page-block write-up">
                
                <div class="para-section"><?php the_field('second_paragraph'); ?></div>

                <div class="link-section text-right"><a href="#" class="green-link"><?php the_field('first_link_text'); ?>&nbsp;&nbsp;<span class="green-arrow">></span></a></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-lg-7 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_5' ); ?>');"></div>

            </div>
            
            <div class="col-lg-5 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_6' ); ?>');"></div>

            </div>
    
        </div>
        
        
    </div>
    
    <div class="button-bar">
    
        <a href="#" class="button" id="community-map-button">View Community Map</a>
    
    </div>
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
