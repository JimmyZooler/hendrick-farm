<?php
/**
 * Template Name: Landlab Page Template
 *
 * This is the template that displays the Landlab page.
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
    
    <div class="container-fluid fixed-width" id="landlab">
        
        <div class="row">
        
            <div id="landlab-logo-helper" class="col-md-6">
        
                <img src="<?php the_field('landlab_logo'); ?>" />

            </div>
        
        </div>
            
        <div class="row">

            <div class="col-lg-8 page-block write-up">

                <p><?php the_field('paragraph_text'); ?></p>

                <div class="link-section">
                    <a href="http://www.landlab.ca/" class="green-link">
                        <?php the_field('link_text'); ?>&nbsp;&nbsp;<span class="green-arrow">></span>
                    </a>
                </div>

            </div>

            <div class="col-lg-4 page-block">

                <div class="image-block solo-image" style="background-image: url('<?php the_field( 'image_1' ); ?>');">
                
                </div>

            </div>

        </div>
        
    </div>
    
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
