<?php
/**
 * Template Name: Currently Available Template
 *
 * This is the template that displays the Currently Available page.
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

        <div class="row">
        
            <div class="col-lg-8" id="map-column">
            
                <img src="<?php the_field('currently_available_map'); ?>" />
            
            </div>
            
            <div class="col-lg-4 legend-column">
            
                <img src="<?php the_field('currently_available_legend'); ?>" />
                
                <div class="text-center contact-sales-wrap">
                
                    <a href="mailto:sales@hendrickfarm.ca?subject=Currently&nbsp;Available&nbsp;Inquiry" class="button">Contact Sales</a>
                
                </div>
            
            </div>
        
        </div>
        
    </div>
    
    <div class="container-fluid more-padding">

        <div class="row">
        
            <div class="col-lg-6 link-block-column-wrap">
            
                <div class="link-block">
                
                    <h3>Explore<br>Townhomes</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.svg" />
                    <div class="sect-background" style="background-image: url('<?php the_field("link_image_1"); ?>');"></div>
                    <a class="available-link" href="<?php echo get_home_url(); ?>/listings/townhomes/"></a>
                </div>
            </div>
            
            <div class="col-lg-6 link-block-column-wrap">
                
                <div class="link-block">
                    
                    <h3>Explore Single<br>Family Homes</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.svg" />
                    <div class="sect-background" style="background-image: url('<?php the_field("link_image_2"); ?>');"></div>
                    <a class="available-link" href="<?php echo get_home_url(); ?>/listings/single-family/"></a>
                </div>
            
            </div>
        
        </div>
        
    </div>
    
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
