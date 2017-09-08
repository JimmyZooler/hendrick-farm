<?php
/**
 * Template Name: Team Page Template
 *
 * This is the template that displays the team page.
 *
 * @package understrap
 */

get_header();

?>

<div id="page-wrapper">

    <header class="page-header dark image-lower" style="background-image: url('<?php the_field('header_image') ?>'); ">
    
        <div class="heading-wrap">
            
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        
            <h3 class="page-subtitle hidden-md-down"><?php the_field('header_subtitle'); ?></h3>
            
        </div>
    
    </header>
    
    <div class="container-fluid fixed-width" id="team-page">
        
        <h2>Hendrick Farm</h2>
        
        <div class="row">
        
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('sean_image'); ?>" />
                
                <h3>Sean McAdam</h3>
                
                <p>President / Founder</p>

            </div>
            
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('fred_image'); ?>" />
                
                <h3>Fred Brisco</h3>
                
                <p>Director of Operations</p>

            </div>
            
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('yves_image'); ?>" />
                
                <h3>Yves Allary</h3>
                
                <p>Chief Financial Officer</p>

            </div>
            
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('doug_image'); ?>" />
                
                <h3>Doug Dawson</h3>
                
                <p>Architecture &amp; Design</p>

            </div>
        
        </div>
        
        <div class="row">
        
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('alex_image'); ?>" />
                
                <h3>Alex Barrette</h3>
                
                <p>Sales Manager</p>

            </div>
            
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('julie_image'); ?>" />
                
                <h3>Julie Tremblay Roy</h3>
                
                <p>Director of Marketing</p>

            </div>
            
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('jules_image'); ?>" />
                
                <h3>Jules Ribi</h3>
                
                <p>Marketing Manager</p>

            </div>
            
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('andre_image'); ?>" />
                
                <h3>Andre Spencer</h3>
                
                <p>Architectural Technologist</p>

            </div>
        
        </div>
            
        <h2>Hendrick Foundation</h2>
        
        <div class="row">
        
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('lacroix_image'); ?>" />
                
                <h3>Sean Lacroix</h3>
                
                <p>Organic Farm Manager</p>

            </div>
            
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('sarah_image'); ?>" />
                
                <h3>Sarah Mangos</h3>
                
                <p>Horticulturist</p>

            </div>
            
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('adam_image'); ?>" />
                
                <h3>Adam Berkelmans</h3>
                
                <p>Head of Parks &amp; Trails</p>

            </div>
            
            <div class="col-sm-6 col-lg-3">
                
                <img src="<?php the_field('julio_image'); ?>" />
                
                <h3>Julio Rodriguez</h3>
                
                <p>Groundskeeper</p>

            </div>
        
        </div>
        
        
        <div id="partners">
            
            <h2>Partners</h2>
            
            <div class="row">

                <div class="col-sm-6 col-lg-3">

                    <div class="partner-logo" style="background-image: url('<?php the_field('logo_1'); ?>');">
                    
                        <a href="http://www.landlab.ca/" ></a>
                    
                    </div>

                    <p><?php the_field('partner_1'); ?></p>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <div class="partner-logo" style="background-image: url('<?php the_field('logo_2'); ?>');">
                    
                        <a href="http://www.dpz.com/"></a>
                        
                    </div>

                    <p><?php the_field('partner_2'); ?></p>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <div class="partner-logo" style="background-image: url('<?php the_field('logo_3'); ?>');">
                    
                        <a href="http://www.exp.com/en/home"></a>
                    
                    </div>

                    <p><?php the_field('partner_3'); ?></p>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <div class="partner-logo" style="background-image: url('<?php the_field('logo_4'); ?>');">
                    
                        <a href="http://www.edbrunet.com/home/"></a>
                    
                    </div>

                    <p><?php the_field('partner_4'); ?></p>

                </div>

            </div>

            <div class="row">

                <div class="col-sm-6 col-lg-3">

                    <div class="partner-logo" style="background-image: url('<?php the_field('logo_5'); ?>');">
                    
                    
                    </div>

                    <p><?php the_field('partner_5'); ?></p>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <div class="partner-logo" style="background-image: url('<?php the_field('logo_6'); ?>');">
                    
                        <a href="https://arpenteurgatineau.ca/"></a>
                    
                    </div>

                    <p><?php the_field('partner_6'); ?></p>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <div class="partner-logo" style="background-image: url('<?php the_field('logo_7'); ?>');">
                    
                        <a href="https://www.desjardins.com/ca/index.jsp"></a>
                    
                    </div>

                    <p><?php the_field('partner_7'); ?></p>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <div class="partner-logo" style="background-image: url('<?php the_field('logo_8'); ?>');"></div>

                    <p><?php the_field('partner_8'); ?></p>

                </div>
                
            </div>
        
        </div>
        
        
    </div>
    
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
