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
    
    <div class="container-fluid fixed-width">
            
        <div class="row page-block-wrapper">

            <div class="col-lg-8 page-block write-up">

                <p><?php the_field('left_column_paragraph'); ?></p>

                <p class="block-quote"><?php the_field('left_column_quote'); ?></p>

            </div>

            <div class="col-lg-4 page-block">

                <div class="image-block image-bottom solo-image" style="background-image: url('<?php the_field( 'image_1' ); ?>');">
                
                </div>

            </div>

        </div>
            
        <div class="row page-block-wrapper image-row">

            <div class="col-lg-8 page-block">

                <div class="image-block image-left" style="background-image: url('<?php the_field( 'image_2' ); ?>');">
                
                </div>

            </div>

            <div class="col-lg-4 page-block">

                <div class="image-block image-right" style="background-image: url('<?php the_field( 'image_3' ); ?>');">
                
                </div>

            </div>

        </div>
        
        <div class="row page-block-wrapper">

            <div class="col-lg-4 page-block">

                <div class="image-block image-top solo-image" style="background-image: url('<?php the_field( 'image_4' ); ?>');"></div>

            </div>

            <div class="col-lg-8 page-block write-up">
                
                <p><?php the_field('right_column_paragraph'); ?></p>

                <p class="block-quote"><?php the_field('right_column_quote'); ?></p>
                
                <p class="text-right"><a href="<?php $currenturl = get_home_url();
                            $urlArray = explode('?', $currenturl);
                             echo $urlArray[0] . "/lifestyle/adaptive-development/?" . $urlArray[1]; ?>" class="green-link"><?php the_field('learn_more_link_text'); ?> &nbsp;&nbsp;<span class="green-arrow">></span></a></p>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_5' ); ?>');"></div>

            </div>

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block image-higher" style="background-image: url('<?php the_field( 'image_6' ); ?>');"></div>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_7' ); ?>');"></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-lg-8 page-block">

                <div class="image-block image-higher" style="background-image: url('<?php the_field( 'image_8' ); ?>');"></div>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block image-left" style="background-image: url('<?php the_field( 'image_9' ); ?>');"></div>

            </div>

        </div>
    
    </div>
    
    <div class="button-bar">
    
        <a href="<?php echo $urlArray[0] . "/listings/currently-available/?" . $urlArray[1]; ?>" class="button" id="community-map-button"><?php the_field('view_map_button_text'); ?></a>
    
    </div>
    
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
