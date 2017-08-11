<?php
/**
 * Template Name: Single Family Page Template
 *
 * This is the template that displays the Single Family Homes page.
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
        
        <div class="row page-block-wrapper">
            
            <div class="hidden-md-down col-lg-4 page-block">

                <h2 class="homes-title">Lindenlea</h2>

                <p class="square-footage"><?php the_field('lindenlea_square_footage'); ?></p>

                <div class="rooms-wrap">
                
                    <p class="rooms">3 bedroom<br>2.5 bathroom</p>
                
                </div>

                <p class="price"><?php the_field('lindenlea_price'); ?></p>

                <div class="floorplans">
                
                    <a href="#" class="button">Floorplans</a>
                
                </div>

                <a href="#" class="button">Inquire</a>

            </div>
            
            <div class="col-lg-8 page-block">

                <div class="homes-image-block" style="background-image: url('<?php the_field('lindenlea_image') ?>'); ">
                </div>
                
                <div class="hidden-md-down homes-description">
                    
                    <?php the_field('lindenlea_description'); ?>
                
                    <a href="#" class="green-link">View Lot Availabilities ></a>
                
                </div>

            </div>
            
            <div class="hidden-lg-up page-block">

                <h2 class="homes-title">Lindenlea</h2>

                <p class="square-footage"><?php the_field('lindenlea_square_footage'); ?></p>

                <div class="rooms-wrap">
                
                    <p class="rooms">3 bedroom<br>2.5 bathroom</p>
                
                </div>

                <p class="price"><?php the_field('lindenlea_price'); ?></p>

                <div class="floorplans">
                
                    <a href="#" class="button">Floorplans</a>
                
                </div>

                <a href="#" class="button">Inquire</a>
                
                <div class="hidden-lg-up homes-description">
                    
                    <?php the_field('lindenlea_description'); ?>
                
                    <a href="#" class="green-link">View Lot Availabilities ></a>
                
                </div>

            </div>
        
        </div> <!-- Lindenlea block -->
        
        <div class="row page-block-wrapper"> <!-- Kingsmere block -->
            
                
            <div class="col-lg-8 page-block">

                <div class="homes-image-block" style="background-image: url('<?php the_field('kingsmere_image') ?>'); ">
                </div>
                
                <div class="hidden-md-down homes-description">
                    
                    <?php the_field('kingsmere_description'); ?>
                
                    <a href="#" class="green-link">View Lot Availabilities ></a>
                
                </div>

            </div>
            
            <div class="col-lg-4 page-block">

                <h2 class="homes-title">Kingsmere</h2>

                <p class="square-footage"><?php the_field('kingsmere_square_footage'); ?></p>

                <div class="rooms-wrap">
                
                    <p class="rooms">3 bedroom<br>2.5 bathroom</p>
                
                </div>

                <p class="price"><?php the_field('kingsmere_price'); ?></p>

                <div class="floorplans">
                
                    <a href="#" class="button">Floorplans</a>
                
                </div>

                <a href="#" class="button">Inquire</a>
                
                <div class="hidden-lg-up homes-description">
                    
                    <?php the_field('kingsmere_description'); ?>
                
                    <a href="#" class="green-link">View Lot Availabilities ></a>
                
                </div>

            </div>
        
        </div>
    
        <div class="row page-block-wrapper"> <!-- Blackburn block -->

                <div class="hidden-md-down col-lg-4 page-block">

                    <h2 class="homes-title">Blackburn</h2>

                    <p class="square-footage"><?php the_field('blackburn_square_footage'); ?></p>

                    <div class="rooms-wrap">

                        <p class="rooms">3 bedroom<br>2.5 bathroom</p>

                    </div>

                    <p class="price"><?php the_field('blackburn_price'); ?></p>

                    <div class="floorplans">

                        <a href="#" class="button">Floorplans</a>

                    </div>

                    <a href="#" class="button">Inquire</a>

                </div>

                <div class="col-lg-8 page-block">

                    <div class="homes-image-block" style="background-image: url('<?php the_field('blackburn_image') ?>'); ">
                    </div>

                    <div class="hidden-md-down homes-description">

                        <?php the_field('blackburn_description'); ?>

                        <a href="#" class="green-link">View Lot Availabilities ></a>

                    </div>

                </div>

                <div class="hidden-lg-up page-block">

                    <h2 class="homes-title">Blackburn</h2>

                    <p class="square-footage"><?php the_field('blackburn_square_footage'); ?></p>

                    <div class="rooms-wrap">

                        <p class="rooms">3 bedroom<br>2.5 bathroom</p>

                    </div>

                    <p class="price"><?php the_field('blackburn_price'); ?></p>

                    <div class="floorplans">

                        <a href="#" class="button">Floorplans</a>

                    </div>

                    <a href="#" class="button">Inquire</a>

                    <div class="hidden-lg-up homes-description">

                        <?php the_field('blackburn_description'); ?>

                        <a href="#" class="green-link">View Lot Availabilities ></a>

                    </div>

                </div>

            </div>  <!-- Blackburn block -->
    
        <div class="row page-block-wrapper"> <!-- Sawmill block -->
                
            <div class="col-lg-8 page-block">

                <div class="homes-image-block" style="background-image: url('<?php the_field('sawmill_image') ?>'); ">
                </div>
                
                <div class="hidden-md-down homes-description">
                    
                    <?php the_field('sawmill_description'); ?>
                
                    <a href="#" class="green-link">View Lot Availabilities ></a>
                
                </div>

            </div>
            
            <div class="col-lg-4 page-block">

                <h2 class="homes-title">Sawmill</h2>

                <p class="square-footage"><?php the_field('sawmill_square_footage'); ?></p>

                <div class="rooms-wrap">
                
                    <p class="rooms">3 bedroom<br>2.5 bathroom</p>
                
                </div>

                <p class="price"><?php the_field('sawmill_price'); ?></p>

                <div class="floorplans">
                
                    <a href="#" class="button">Floorplans</a>
                
                </div>

                <a href="#" class="button">Inquire</a>
                
                <div class="hidden-lg-up homes-description">
                    
                    <?php the_field('sawmill_description'); ?>
                
                    <a href="#" class="green-link">View Lot Availabilities ></a>
                
                </div>

            </div>
        
        </div> <!-- Sawmill block -->
        
    </div>
    
    <div class="button-bar">
        
        <h3>Get into the nitty gritty.</h3>
    
        <a href="#" class="button">Compare Our Homes</a>
    
    </div>
    
    <div class="container-fluid" id="more-details">

        <div class="row page-block-wrapper">
        
            <div class="page-block">
                
                <h2>More Details</h2>
            
                <div class="col-lg-8">
                
                    <p><?php the_field('content_block_1'); ?></p>
                
                </div>            
                <div class="col-lg-4 image-block" style="background-image: url('<?php the_field('more_details_image_1') ?>'); ">
                
                </div>
                
                <div class="col-lg-8">
                
                    <p><?php the_field('content_block_2'); ?></p>
                
                </div>            
                <div class="col-lg-4 image-block" style="background-image: url('<?php the_field('more_details_image_2') ?>'); ">
                
                </div>
            
            </div>
        
        </div>
    </div>
    
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
