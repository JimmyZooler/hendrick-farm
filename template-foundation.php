<?php
/**
 * Template Name: Foundation Page Template
 *
 * This is the template that displays the hendrick foundation page.
 *
 * @package understrap
 */

get_header();

?>

<div id="page-wrapper">

    <header class="page-header image-bottom dark" style="background-image: url('<?php the_field('header_image') ?>'); ">
    
        <div class="heading-wrap">
            
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        
            <h3 class="page-subtitle hidden-md-down"><?php the_field('header_subtitle'); ?></h3>
            
        </div>
    
    </header>
    
    <div class="container-fluid fixed-width">

        <div class="row page-block-wrapper image-row">

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block image-right image-bottom" style="background-image: url('<?php the_field( 'image_1' ); ?>');">
                
                </div>

            </div>

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block image-top image-left" style="background-image: url('<?php the_field( 'image_2' ); ?>');">
                
                </div>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block image-higher" style="background-image: url('<?php the_field( 'image_3' ); ?>');">
                
                </div>

            </div>

        </div>
        
        <div class="row page-block-wrapper">

            <div class="col-12 page-block write-up">

                <p><?php the_field('first_paragraph'); ?></p>

                <div class="green-link-wrap hidden-sm-up"><a href="<?php echo get_home_url(); ?>/lifestyle/farm" class="green-link">Learn more about our<br>certified organic farm&nbsp;&nbsp;<span class="green-arrow">></span></a></div>
                
                <div class="green-link-wrap hidden-xs-down"><a href="<?php echo get_home_url(); ?>/lifestyle/farm" class="green-link">Learn more about our certified organic farm&nbsp;&nbsp;<span class="green-arrow">></span></a></div>
                
            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-lg-8 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_4' ); ?>');"></div>

            </div>

            <div class="col-lg-4 page-block">

                <div class="image-block image-right" style="background-image: url('<?php the_field( 'image_5' ); ?>');"></div>

            </div>
            

        </div>
        
        <div class="row page-block-wrapper">

            <div class="col-lg-8 page-block write-up">
                
                <p><?php the_field('second_paragraph'); ?></p>
                
                <p class="text-right"><a href="#" class="green-link hide"><?php the_field('link_text_2'); ?>&nbsp;&nbsp;<span class="green-arrow">></span></a></p>

                <p class="block-quote"><?php the_field('second_quote'); ?></p>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block image-left solo-image" style="background-image: url('<?php the_field( 'image_6' ); ?>');"></div>

            </div>

        </div>
    
    </div>
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
