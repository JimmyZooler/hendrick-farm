<?php
/**
 * Template Name: Townhomes Page Template
 *
 * This is the template that displays the Townhomes page.
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

                <h2 class="homes-title"><?php the_field('white_model_title'); ?></h2>

                <?php the_field('white_model_square_footage'); ?>

                <div class="rooms-wrap">
                
                    <p class="rooms"><?php the_field('white_model_rooms'); ?></p>
                
                </div>

                <p class="price"><?php the_field('white_model_price'); ?></p>

                <div class="floorplans">
                
                    <a href="<?php the_field('white_model_floorplan'); ?>" target="_blank" class="button"><?php the_field('floorplan_button'); ?></a>
                
                </div>

                <a href="mailto:sales@hendrickfarm.ca?subject=White&nbsp;Model&nbsp;Inquiry" class="button"><?php the_field('inquire_button'); ?></a>

            </div>
            
            <div class="col-lg-8 page-block">

                <div class="homes-image-block" style="background-image: url('<?php the_field('white_model_image') ?>'); ">
                </div>
                
                <div class="hidden-md-down homes-description">
                    
                    <?php the_field('white_model_description'); ?>
                
                    <a href="<?php echo get_home_url(); ?>/listings/currently-available" class="green-link"><?php the_field('view_lot_text'); ?>&nbsp;<span class="green-arrow">></span></a>
                
                </div>

            </div>
            
            <div class="hidden-lg-up page-block">

                <h2 class="homes-title"><?php the_field('white_model_title'); ?></h2>

                <?php the_field('white_model_square_footage'); ?>

                <div class="rooms-wrap">
                
                    <p class="rooms"><?php the_field('white_model_rooms'); ?></p>
                
                </div>

                <p class="price"><?php the_field('white_model_price'); ?></p>

                <div class="floorplans">
                
                    <a href="<?php the_field('white_model_floorplan'); ?>" target="_blank" class="button"><?php the_field('floorplan_button'); ?></a>
                
                </div>

                <a href="#" class="button"><?php the_field('inquire_button'); ?></a>
                
                <div class="hidden-lg-up homes-description">
                    
                    <?php the_field('white_model_description'); ?>
                
                    <a href="<?php echo get_home_url(); ?>/listings/currently-available" class="green-link"><?php the_field('view_lot_text'); ?>&nbsp;<span class="green-arrow">></span></a>
                
                </div>

            </div>
        
        </div> <!-- White Model block -->
        
    </div>
    
    <div class="button-bar">
        
        <h3><?php the_field('compare_homes_heading'); ?></h3>
    
        <a href="<?php the_field('community_map'); ?>" class="button"><?php the_field('compare_homes_button'); ?></a>
    
    </div>
    
    <div class="container-fluid hidden-md-down" id="more-details">

        <div class="row page-block-wrapper fixed-width">
        
               
                <div class="col-12 page-block">
                
                    <h2><?php the_field('more_details_heading'); ?></h2>
                
                </div>
            
                <div class="col-lg-8 page-block pad-top-zero">
                
                    <p><?php the_field('content_block_1'); ?></p>
                
                </div>            
                <div class="col-lg-4" style="overflow: hidden;">
                    
                    <div class="image-block" style="background-image: url('<?php the_field('more_details_image_1') ?>'); ">
                
                    </div>
                    
                </div>
        </div>
        <div class="row page-block-wrapper fixed-width">
                
                <div class="col-lg-8 page-block pad-top-zero">
                
                    <p><?php the_field('content_block_2'); ?></p>
                
                </div>            
                <div class="col-lg-4" style="overflow: hidden;">
                
                    <div class="image-block" style="background-image: url('<?php the_field('more_details_image_2') ?>'); ">
                
                    </div>
                    
                </div>
            
                <div class="col-lg-8" style="padding-left: 0;">
            
                    <p class="more-details-copyright"><?php the_field('copyright_text'); ?></p>
                
                </div>
        
        </div>
    </div>
    
    <div class="button-bar" id="subscribe-bar">

        <h2><?php the_field('subscribe_title'); ?></h2>
        
        <h4><?php the_field('subscribe_subtitle'); ?></h4>
        
        <!-- Begin MailChimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup{ clear:left; width:100%;}
            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed_signup">
            <form action="//hendrickfarm.us2.list-manage.com/subscribe/post?u=8942e1308cf86738c7e8fa9fc&amp;id=f68324a569" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="<?php the_field('email_placeholder'); ?>" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8942e1308cf86738c7e8fa9fc_7361170b5e" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="<?php the_field('email_button'); ?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
        </div>

        <!--End mc_embed_signup-->
        
    </div>
    
    <div class="container-fluid more-padding">

        <div class="row">
        
            <div class="col-lg-6 link-block-column-wrap">
            
                <div class="link-block">
                
                    <h3><?php the_field('linkblock_text_left'); ?></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.svg" />
                    <div class="sect-background" style="background-image: url('<?php the_field("link_image_1"); ?>');"></div>
                    <a class="available-link" href="<?php echo get_home_url(); ?>/lifestyle/"></a>
                </div>
            </div>
            
            <div class="col-lg-6 link-block-column-wrap">
                
                <div class="link-block">
                    
                    <h3><?php the_field('linkblock_text_right'); ?></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.svg" />
                    <div class="sect-background" style="background-image: url('<?php the_field("link_image_2"); ?>');"></div>
                    <a class="available-link" href="<?php echo get_home_url(); ?>/listings/single-family/"></a>
                </div>
            
            </div>
        
        </div>
        
    </div>
    
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
