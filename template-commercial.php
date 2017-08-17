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
    
    <div class="container-fluid fixed-width">

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

                <h2 class="homes-title">Commercial Spaces</h2>

                <p class="square-footage"><?php the_field('commercial_square_footage'); ?></p>

                <a href="mailto:sales@hendrickfarm.ca?subject=Commercial&nbsp;Spaces&nbsp;Inquiry" class="button">Inquire</a>

            </div>
        
        </div>
        
    </div>
    
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
