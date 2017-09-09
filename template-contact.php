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

    <header class="page-header dark" style="background-image: url('<?php the_field('header_image') ?>'); ">
    
        <div class="heading-wrap">
            
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        
            <h3 class="page-subtitle hidden-md-down"><?php the_field('header_subtitle'); ?></h3>
            
        </div>
    
    </header>
    
    <div class="container-fluid">
            
        <div class="row">

            <div class="col-md-6 tile">

                <?php get_sidebar( 'right' ); ?>

            </div>
            
            <div class="col-md-6 get-in-touch tile">

                <div class="tile-content-wrap">

                    <h2><?php the_field('left_column_title'); ?></h2>

                    <?php the_field('left_column_info'); ?>

                    <?php the_field('left_column_address'); ?>

                </div>

            </div>

        </div>
    
    </div>
    
    <div id="google-map">
    
<!--        <?php the_field('google_map'); ?>-->
        
        <a href="https://www.google.ca/maps/dir/''/hendrick+farm+google+map/@45.5014719,-75.8732151,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x4cce1d6347f129df:0x5ff06b1b50de43a8!2m2!1d-75.8031753!2d45.5014933" target="_blank" ></a>
    
    </div>
    
    <div id="other-details">
    
        <div class="content-wrap">
        
            <h2>Other Details</h2>
            <div class="row">

                <div class="col-md-6">

                    <h3>Model Home Hours</h3>

                    <p class="hidden-xs-down">Wednesday – Friday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:00 am – 6:00 pm<br>Saturday &amp; Sunday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:00 pm – 5:00 pm</p>

                    <p class="hidden-sm-up">Wednesday – Friday:<br>11:00 am – 6:00 pm<br>Saturday &amp; Sunday:<br>12:00 pm – 5:00 pm</p>

                </div>

                <div class="col-md-6">

                    <h3>Farm Stand Hours (Fall)</h3>

                    <p class="hidden-xs-down">Tuesday – Friday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:00 am – 5:30 pm<br>Saturday –
 Monday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closed</p>

                    <p class="hidden-sm-up">Tuesday – Friday:<br>11:00 am – 5:30 pm<br>Saturday – Monday:<br>Closed</p>

                </div>

            </div>
        
        </div>
    
    </div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
