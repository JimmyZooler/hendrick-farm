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
    
    <div class="container-fluid fixed-width" id="gallery">

        <div class="row">
            
            <div id="grid" data-columns>
    
                <?php 

                $images = get_field('gallery');

                if( $images ): 
                        
                        $count = 0; ?>

                        <?php foreach( $images as $image ): ?>
                            <div class="gallery-image animated" id="gallery-image-<?php echo $count; ?>">
                                <a href="<?php echo $image['url']; ?>">
                                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                            </div>
                
                        <?php 
                            
                            ++$count;
                
                            endforeach; ?>

                <?php endif; ?>

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
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="<?php the_field('subscribe_placeholder'); ?>" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8942e1308cf86738c7e8fa9fc_7361170b5e" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="<?php the_field('subscribe_button_text'); ?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
        </div>

        <!--End mc_embed_signup-->
        
    </div>
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
