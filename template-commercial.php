<?php
/**
 * Template Name: Commercial Page Template
 *
 * This is the template that displays the Commercial page.
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
        
            <div class="page-block">
            
                <p class="homes-quote"><?php the_field('first_quote'); ?></p>
                
                <div>
                
                    <?php the_field('first_paragraph'); ?>
                
                </div>
            
            </div>
        
        </div>
        
        <div class="row page-block-wrapper house-block">
            
            <div class="hidden-md-down col-lg-4 page-block">

                <h2 class="homes-title">Commercial Spaces</h2>

                <p class="square-footage"><?php the_field('commercial_square_footage'); ?></p>

                <a href="#" class="button">Inquire</a>

            </div>
            
            <div class="col-lg-8 page-block">

                <div class="homes-image-block" style="background-image: url('<?php the_field('white_model_image') ?>'); ">
                </div>
                
                <div class="hidden-md-down homes-description">
                    
                    <?php the_field('white_model_description'); ?>
                
                    <a href="#" class="green-link">Learn more about the Village Centre&nbsp;&nbsp;<span class="green-arrow">></span></a>
                
                </div>

            </div>
            
            <div class="hidden-lg-up page-block">

                <h2 class="homes-title">White Model</h2>

                <p class="square-footage"><?php the_field('white_model_square_footage'); ?></p>

                <div class="rooms-wrap">
                
                    <p class="rooms">3 bedroom / 2 bedroom + loft<br>2.5 bathroom</p>
                
                </div>

                <p class="price"><?php the_field('white_model_price'); ?></p>

                <div class="floorplans">
                
                    <a href="#" class="button">Floorplans</a>
                
                </div>

                <a href="#" class="button">Inquire</a>
                
                <div class="hidden-lg-up homes-description">
                    
                    <?php the_field('white_model_description'); ?>
                
                    <a href="#" class="green-link">View Lot Availabilities&nbsp;&nbsp;<span class="green-arrow">></span></a>
                
                </div>

            </div>
        
        </div> <!-- White Model block -->
        
    </div>
    
    <div class="button-bar">
        
        <h3>Get into the nitty gritty.</h3>
    
        <a href="#" class="button">Compare Our Homes</a>
    
    </div>
    
    <div class="container-fluid hidden-md-down" id="more-details">

        <div class="row page-block-wrapper">
        
               
                <div class="col-12 page-block">
                
                    <h2>More Details</h2>
                
                </div>
            
                <div class="col-lg-8 page-block">
                
                    <p><?php the_field('content_block_1'); ?></p>
                
                </div>            
                <div class="col-lg-4" style="overflow: hidden;">
                    
                    <div class="image-block" style="background-image: url('<?php the_field('more_details_image_1') ?>'); ">
                
                    </div>
                    
                </div>
                
                <div class="col-lg-8 page-block">
                
                    <p><?php the_field('content_block_2'); ?></p>
                
                </div>            
                <div class="col-lg-4" style="overflow: hidden;">
                
                    <div class="image-block" style="background-image: url('<?php the_field('more_details_image_2') ?>'); ">
                
                    </div>
                    
                </div>
            
        
        </div>
    </div>
    
    <div class="button-bar" id="subscribe-bar">

        <h2><?php the_field('subscribe_title'); ?></h2>
        
        <h4><?php the_field('subscribe_subtitle'); ?></h4>
        
    </div>
    
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
