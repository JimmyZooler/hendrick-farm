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
<!-- mailchimp signup for to popup -->
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup_2{background:#fff; clear:left; font:14px rm_proregular,Arial,sans-serif; width:100%;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup_2" class="mfp-hide">
    <form action="//hendrickfarm.us2.list-manage.com/subscribe/post?u=8942e1308cf86738c7e8fa9fc&amp;id=f68324a569" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
        <h2>Subscribe to our newsletter.</h2>
        <h4>Enter your email address to get the latest updates on new products and phases.</h4>
        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8942e1308cf86738c7e8fa9fc_f68324a569" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
    </form>
</div>

<!--End mc_embed_signup-->
<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">
        
        <footer class="site-footer" id="colophon">
            <div class="row">
                <div class="col-sm-4 col-md-3 column">
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
                <div class="col-sm-4 col-md-3 column">
                    <a href="<?php echo get_home_url(); ?>/listings/">
                        <h4 class="heading-sitemap">Listings</h4>
                    </a>
                    <ul class="hidden-xs-down">
                        <li><a href="<?php echo get_home_url(); ?>/listings/single-family/">Single Family Homes</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/listings/townhomes/">Townhomes</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/listings/commercial/">Commercial</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/listings/currently-available/">Currently Available</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 column">
                    <a href="<?php echo get_home_url(); ?>/gallery/">
                        <h4 class="heading-sitemap" id="sitemap-gallery">Gallery</h4>
                    </a>
                    <a href="#" class="inactiveLink" id="who-we-are-footer">
                        <h4 class="heading-sitemap">Who We Are</h4>
                    </a>
                    <ul class="hidden-xs-down">
                        <li><a href="<?php echo get_home_url(); ?>/team/">Team</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/landlab/">Landlab</a></li>
                    </ul>
                    <a href="<?php echo get_home_url(); ?>/contact/">
                        <h4 class="heading-sitemap">Contact</h4>
                    </a>
                </div>
<!--
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
                        <h4 class="heading-sitemap hide">Contact</h4>
                    </a>
                    <a href="#">
                        <h4 class="heading-sitemap hide">FAQ</h4>
                    </a>
                </div>
-->
                <div class="col-md-3 column">
                    <a href="#mc_embed_signup_2" id="footer-subscribe-button">Subscribe</a>
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
                            <p>© Hendrick Farm • <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy &amp; Terms</a> • <a href="http://fermehendrick.ca/?lang=fr">FR</a></p>
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

