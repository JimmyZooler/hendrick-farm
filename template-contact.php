<?php
/**
 * Template Name: Contact Page Template
 *
 * This is the template that displays the contact page.
 *
 * @package understrap
 */

get_header();

?>

<div id="page-wrapper">

    <header class="page-header">
    
        <div class="heading-wrap">
            
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        
            <h3 class="page-subtitle hidden-md-down"><?php the_field('header_subtitle'); ?></h3>
            
        </div>
    
    </header>
    
    <div class="row">
    
        <div class="col-md-6 get-in-touch tile">
        
            <h2><?php the_field('left_column_title'); ?></h2>
            
            <?php the_field('left_column_info'); ?>
            
            <?php the_field('left_column_address'); ?>
        
        </div>
        
        <div class="col-md-6 tile">
        
            <?php get_sidebar( 'right' ); ?>
        
        </div>
        
    </div>
    
    <div id="google-map">
    
        
    
    </div>
    
    <div id="other-details">
    
        
    
    </div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
