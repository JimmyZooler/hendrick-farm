<?php
/**
 * Template Name: Farm Page Template
 *
 * This is the template that displays the farm page.
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

            <div class="col-lg-4 page-block">

                <div class="image-block image-higher solo-image" style="background-image: url('<?php the_field( 'image_1' ); ?>');"></div>

            </div>

            <div class="col-lg-8 page-block write-up">
                
                <p><?php the_field('first_paragraph'); ?></p>

                <p class="block-quote"><?php the_field('first_quote'); ?></p>
                
                <div class="green-link-wrap"><a href="<?php $currenturl = get_home_url();
                            $urlArray = explode('?', $currenturl);
                             echo $urlArray[0] . "/lifestyle/hendrick-foundation/?" . $urlArray[1]; ?>" class="green-link"><?php the_field('first_link_text'); ?>&nbsp;&nbsp;<span class="green-arrow">></span></a></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block image-top" style="background-image: url('<?php the_field( 'image_2' ); ?>');"></div>

            </div>

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block image-right" style="background-image: url('<?php the_field( 'image_3' ); ?>');"></div>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block image-top" style="background-image: url('<?php the_field( 'image_4' ); ?>');"></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper">

            <div class="col-12 page-block write-up">
                
                <div class="para-section"><?php the_field('second_paragraph'); ?></div>
                
                <div class="para-section"><?php the_field('third_paragraph'); ?></div>

                <div class="link-section"><a href="<?php echo $urlArray[0] . "/contact/?" . $urlArray[1]; ?>" class="green-link"><?php the_field('second_link_text'); ?>&nbsp;&nbsp;<span class="green-arrow">></span></a></div>
                
                <div class="para-section"><?php the_field('fourth_paragraph'); ?></div>
                
                <div class="button-section text-center"><a href="https://shop.hendrickfarm.ca/" class="button"><?php the_field('shop_csa'); ?></a></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-lg-8 page-block">

                <div class="image-block image-left" style="background-image: url('<?php the_field( 'image_5' ); ?>');"></div>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block image-higher" style="background-image: url('<?php the_field( 'image_6' ); ?>');"></div>

            </div>
    
        </div>
        
        <div class="row page-block-wrapper">

            <div class="col-lg-8 page-block write-up">
                
                <p><?php the_field('fifth_paragraph'); ?></p>

                <p class="block-quote"><?php the_field('second_quote'); ?></p>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block image-higher solo-image" style="background-image: url('<?php the_field( 'image_7' ); ?>');"></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block image-left image-bottom" style="background-image: url('<?php the_field( 'image_8' ); ?>');"></div>

            </div>

            <div class="col-6 col-lg-4 page-block">

                <div class="image-block image-lower" style="background-image: url('<?php the_field( 'image_9' ); ?>');"></div>

            </div>
            
            <div class="col-lg-4 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_10' ); ?>');"></div>

            </div>

        </div>
        
        <div class="row page-block-wrapper image-row">

            <div class="col-lg-7 page-block">

                <div class="image-block" style="background-image: url('<?php the_field( 'image_11' ); ?>');"></div>

            </div>

            <div class="col-lg-5 page-block">

                <div class="image-block image-right image-lower" style="background-image: url('<?php the_field( 'image_12' ); ?>');"></div>

            </div>
            <div class="col-12 page-block green-link-wrap">
        
                <a href="<?php echo $urlArray[0] . "/lifestyle/parks-trails/?" . $urlArray[1]; ?>" class="green-link"><?php the_field('discover_parks_link_text'); ?>&nbsp;&nbsp;<span class="green-arrow">></span></a>

            </div>

        </div>
        
    </div>
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
