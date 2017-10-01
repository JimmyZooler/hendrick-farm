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

    <header class="page-header dark image-higher" style="background-image: url('<?php the_field('header_image') ?>'); ">
    
        <div class="heading-wrap">
            
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        
            <h3 class="page-subtitle hidden-md-down"><?php the_field('header_subtitle'); ?></h3>
            
        </div>
    
    </header>
    
    <div class="container-fluid fixed-width">

        
        <div class="row page-block-wrapper">

            <div class="col-lg-8 page-block write-up">
                
                <p><?php the_field('first_paragraph'); ?></p>

                <p class="block-quote"><?php the_field('first_quote'); ?></p>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block solo-image image-right" style="background-image: url('<?php the_field( 'image_1' ); ?>');"></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_2' ); ?>');"></div>

            </div>

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block image-left" style="background-image: url('<?php the_field( 'image_3' ); ?>');"></div>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block image-right image-lower" style="background-image: url('<?php the_field( 'image_4' ); ?>');"></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper">

            <div class="col-12 page-block write-up">
                
                <div class="para-section"><?php the_field('second_paragraph'); ?></div>

                <div class="link-section green-link-wrap"><a href="<?php $currenturl = get_home_url();
                            $urlArray = explode('?', $currenturl);
                             echo $urlArray[0] . "/lifestyle/adaptive-development/?" . $urlArray[1]; ?>" class="green-link"><?php the_field('first_link_text'); ?>&nbsp;&nbsp;<span class="green-arrow">></span></a></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-lg-7 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_5' ); ?>');"></div>

            </div>
            
            <div class="col-lg-5 page-block">

                <div class="image-block image-bottom" style="background-image: url('<?php the_field( 'image_6' ); ?>');"></div>

            </div>
    
        </div>
        
        
    </div>
    
    <div class="button-bar">
    
        <a href="<?php echo $urlArray[0] . "/listings/currently-available/?" . $urlArray[1]; ?>" class="button" id="community-map-button"><?php the_field('view_map_button'); ?></a>
    
    </div>
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
