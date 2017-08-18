<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">
        
        <footer class="site-footer" id="colophon">
            <div class="row">
                <div class="col-sm-6 col-md-4 column">
                    <a href="<?php echo get_home_url(); ?>/lifestyle/">
                        <h4 class="heading-sitemap">Lifestyle</h4>
                    </a>
                    <ul class="hidden-xs-down">
                        <li><a href="<?php echo get_home_url(); ?>/lifestyle/village-centre/">Village Centre</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/lifestyle/Farm/">Farm</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/lifestyle/hendrick-foundation/">Hendrick Foundation</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/lifestyle/parks-trails/">Parks &amp; Trails</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/lifestyle/adaptive-development/">Adaptive Development</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 column">
                    <a href="<?php echo get_home_url(); ?>/listings/">
                        <h4 class="heading-sitemap">Listings</h4>
                    </a>
                    <ul class="hidden-xs-down">
                        <li><a href="<?php echo get_home_url(); ?>/listings/single-family/">Single Family</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/listings/townhomes/">Townhomes</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/listings/commercial/">Commercial</a></li>
<!--                        <li>Currently Available</li>-->
                    </ul>
                    <a href="<?php echo get_home_url(); ?>/contact/">
                        <h4 class="heading-sitemap">Contact</h4>
                    </a>
                </div>
<!--
                <div class="col-sm-6 col-md-4 col-xl-2 column">
                    <a href="#">
                        <h4 class="heading-sitemap">Who We Are</h4>
                    </a>
                    <ul class="hidden-xs-down">
                        <li>Landlab</li>
                        <li>Team</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 column">
                    <a href="#">
                        <h4 class="heading-sitemap">News</h4>
                    </a>
                    <ul class="hidden-xs-down">
                        <li>Upcoming Events</li>
                        <li>Blog</li>
                        <li>Media</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3 column">
                    <a href="#">
                        <h4 class="heading-sitemap hide">Gallery</h4>
                    </a>
                    <a href="#">
                        <h4 class="heading-sitemap hide">Contact</h4>
                    </a>
                    <a href="#">
                        <h4 class="heading-sitemap hide">FAQ</h4>
                    </a>
                </div>
-->
                <div class="col-md-4 column">
                    <a href="#" id="footer-subscribe-button">Subscribe</a>
                    <ul id="footer-social">
                        <li><a href="https://www.facebook.com/HendrickFarm/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/hendrickfarm"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/HendrickFarm"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                    <h4 class="heading-sitemap">Model Home Hours</h4>
                    <ul>
                        <li>Wed-Fri 11am-6pm</li>
                        <li>Sat-Sun 12pm-5pm</li>
                    </ul>
                </div>
            </div>
            <div class="row footer-bottom-row">
                <div class="col-sm-6 col-md-8">
                        <div class="site-info">
                            <p class="hidden-sm-down">193 ch Ladyfield, Chelsea, QC J9B 0B3<span id="info-dot"> • </span>info@hendrickfarm.ca</p>
                            <p class="hidden-md-up">193 ch Ladyfield, Chelsea, QC<br>J9B 0B3<span id="info-dot"> • </span>info@hendrickfarm.ca</p>
                            <p>© Hendrick Farm • Privacy &amp; Terms</p>
                        </div>
                </div><!--col end -->
                <div class="col-sm-6 col-md-4">
                    <div class="landlab">
                        <a href="http://www.landlab.ca/"><img src="<?php echo get_template_directory_uri(); ?>/img/LandlabLogo_400.png" /></a>
                    </div>
                    
                </div><!--col end -->
            </div><!-- row end -->
            
        </footer><!-- #colophon -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

