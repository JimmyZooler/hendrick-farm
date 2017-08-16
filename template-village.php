<?php
/**
 * Template Name: Village Centre Page Template
 *
 * This is the template that displays the village centre page.
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

            <div class="col-lg-8 page-block write-up">

                <p><?php the_field('left_column_paragraph'); ?></p>

                <p class="block-quote"><?php the_field('left_column_quote'); ?></p>

            </div>

            <div class="col-lg-4 page-block">

                <div class="image-block solo-image" style="background-image: url('<?php the_field( 'image_1' ); ?>');">
                
                </div>

            </div>

        </div>
            
        <div class="row page-block-wrapper image-row">

            <div class="col-lg-8 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_2' ); ?>');">
                
                </div>

            </div>

            <div class="col-lg-4 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_3' ); ?>');">
                
                </div>

            </div>

        </div>
        
        <div class="row page-block-wrapper">

            <div class="col-lg-3 page-block">

                <div class="image-block solo-image" style="background-image: url('<?php the_field( 'image_4' ); ?>');"></div>

            </div>

            <div class="col-lg-9 page-block write-up">
                
                <p><?php the_field('right_column_paragraph'); ?></p>

                <p class="block-quote"><?php the_field('right_column_quote'); ?></p>
                
                <p class="text-right"><a href="#" class="green-link">Learn about our community planning&nbsp;&nbsp;<span class="green-arrow">></span></a></p>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_5' ); ?>');"></div>

            </div>

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_6' ); ?>');"></div>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_7' ); ?>');"></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-lg-8 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_8' ); ?>');"></div>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_9' ); ?>');"></div>

            </div>

        </div>
    
    </div>
    
    <div class="button-bar">
    
        <a href="#" class="button" id="community-map-button">View Community Map</a>
    
    </div>
    
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
