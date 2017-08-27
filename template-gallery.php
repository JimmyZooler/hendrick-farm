<?php
/**
 * Template Name: Gallery Page Template
 *
 * This is the template that displays the gallery page.
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
            
            <div id="grid" data-columns>
    
                <?php 

                $images = get_field('gallery');

                if( $images ): ?>

                        <?php foreach( $images as $image ): ?>
                            <div class="gallery-image animated fadeInUp">
                                <a href="<?php echo $image['url']; ?>">
                                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                            </div>
                        <?php endforeach; ?>

                <?php endif; ?>

            </div>
            
        </div>
        
    </div>
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
