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
                <div class="col-sm-6 col-md-4 col-xl-2 column">
                    <a href="#">
                        <h4 class="heading-sitemap">Lifestyle</h4>
                    </a>
                    <ul class="hidden-xs-down">
                        <li>Village Centre</li>
                        <li>Farm</li>
                        <li>Hendrick Foundation</li>
                        <li>Parks &amp; Trails</li>
                        <li>Adaptive Urbanism</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 column">
                    <a href="#">
                        <h4 class="heading-sitemap">Listings</h4>
                    </a>
                    <ul class="hidden-xs-down">
                        <li>Single Family</li>
                        <li>Townhouses</li>
                        <li>Commercial</li>
                        <li>Currently Available</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 column">
                    <a href="#">
                        <h4 class="heading-sitemap">Gallery</h4>
                    </a>
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
                    <a href="#">
                        <h4 class="heading-sitemap">Contact</h4>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 column">
                    <a href="#">
                        <h4 class="heading-sitemap">FAQ</h4>
                    </a>
                    <h4 class="heading-sitemap">Model Home Hours</h4>
                    <ul>
                        <li>Wed-Fri 11am-6pm</li>
                        <li>Sat-Sun 12pm-5pm</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 column">
                    <a href="#" id="footer-subscribe-button">Subscribe</a>
                    <ul id="footer-social">
                        <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
            <div class="row footer-bottom-row">
                <div class="col-sm-6">
                        <div class="site-info">
                            <p>193 ch Ladyfield, Chelsea, QC j9B 0B3 • sales@hendrickfarm.ca</p>
                            <p>© Hendrick Farm • Privacy &amp;Terms</p>
                        </div>
                </div><!--col end -->
                <div class="col-sm-6">
                    <div class="landlab">
                        <img src="http://localhost/wp/hendrick/wp-content/uploads/2017/06/LandlabLogo_400.png" />
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

