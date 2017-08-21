<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper fixed-width-page" id="404-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="">

							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.',
							'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">

							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
							'understrap' ); ?></p>
                            
                            <p><a href="<?php echo get_home_url(); ?>">Return to the Home Page</a> or choose a link from the Site Map Below</p>

							<?php get_search_form(); ?>
                            
                            <div class="row">
                                <div class="col-sm-6 col-md-4 column">
                                    <a href="<?php echo get_home_url(); ?>/lifestyle/">
                                        <h4 class="heading-sitemap">Lifestyle</h4>
                                    </a>
                                    <ul class="list-style-none">
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
                                    <ul class="list-style-none">
                                        <li><a href="<?php echo get_home_url(); ?>/listings/single-family/">Single Family</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/listings/townhomes/">Townhomes</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/listings/commercial/">Commercial</a></li>
                                    </ul>
                                    <a href="<?php echo get_home_url(); ?>/contact/">
                                        <h4 class="heading-sitemap">Contact</h4>
                                    </a>
                                </div>
                                
                            </div>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
