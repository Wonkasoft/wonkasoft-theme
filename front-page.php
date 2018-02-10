<?php
/**
 * The front-page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WonkasoftTheme
 */

$header_media = ( !get_theme_mod( 'featured_media' ) ) ? get_template_directory_uri() . '/assets/img/default.jpg': get_theme_mod( 'featured_media' );
$featured_fallback_media = ( !get_theme_mod( 'featured_fallback_media' ) ) ? get_template_directory_uri() . '/assets/img/default.jpg': get_theme_mod( 'featured_fallback_media' );
get_header(); ?>
<main id="main">
	<section id="above-fold">
		<div class="container-fluid">
			<div class="row">
				<div id="header-media-wrap" class="col-sm-12">
					<div class="main-img">
						<?php
						if ( !get_theme_mod( 'featured_media' ) && !get_theme_mod( 'featured_fallback_media' ) ) : ?>
							<img class="default-img" src="<?php echo $header_media; ?>" />
						
						<?php elseif ( !get_theme_mod( 'featured_media' ) && get_theme_mod( 'featured_fallback_media' ) ) : ?>
							<img class="custom-img" src="<?php echo get_theme_mod( 'featured_fallback_media' ); ?>" />

						<?php else : ?>
							<video id="video" preload="none" loop muted autoplay poster="<?php echo $featured_fallback_media; ?>" class="fullscreen-bg__video">
	        			<source src="<?php echo wp_get_attachment_url( $header_media ); ?>" type="video/mp4">
	    				</video>
						<?php endif; ?>
					</div> <!-- /main-img -->
					<div class="col-xs-12 col-md-4 header-message text-center pull-right"><p><?php echo get_theme_mod( 'main_section_message' ); ?></p>
						<?php
						$header_cta_link = get_permalink( get_theme_mod( 'main_section_cta_link' ) );
						$header_cta_text = get_theme_mod( 'main_section_cta_text' );
						?>
						<a href="<?php echo $header_cta_link; ?>" class="btn btn-light wonka-btn"><?php echo $header_cta_text; ?><?php echo $header_cta_text; ?></a>
					</div><!-- /col-xs-4 header-message text-center -->
				</div> <!-- /col-xs-12 -->
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- /above-fold -->
	
	<section id="product-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm">
					<div class="row">
					<div class="col-4 product-icon product-icon-left">
						<i class="fa fa-wordpress"></i>
					</div> <!-- /product-icon -->
			
					<div class="col-8 product-copy">
					<?php 
						$first_product_title = ( get_theme_mod( 'first_product_title' ) ) ? get_theme_mod( 'first_product_title' ) : 'WordPress Themes'; 
						$first_product_copy = ( get_theme_mod( 'first_product_copy' ) ) ? get_theme_mod( 'first_product_copy' ) : 'Message here'; 
					?>
						<h2 class="product-title"><?php echo $first_product_title; ?></h2>
						<p class="copy-body"><?php echo $first_product_copy; ?></p>
					</div> <!-- /product-copy -->
				</div> <!-- /row -->
				</div> <!-- /col-sm -->
				
				<div class="col-sm">
					<div class="row">
					<div class="col-4 product-icon product-icon-middle">
						<i class="fa fa-plug"></i>
					</div> <!-- /product-icon -->
					
					<div class="col-8 product-copy">
					<?php
						$second_product_title = ( get_theme_mod( 'second_product_title' ) ) ? get_theme_mod( 'second_product_title' ) : 'WordPress Plugins'; 
						$second_product_copy = ( get_theme_mod( 'second_product_copy' ) ) ? get_theme_mod( 'second_product_copy' ) : 'Message here'; 
					?>
						<h2 class="product-title"><?php echo $second_product_title; ?></h2>
						<p class="copy-body"><?php echo $second_product_copy; ?></p>
					</div> <!-- /product-copy -->
				</div> <!-- /row -->
				</div> <!-- /col-sm -->
				
				<div class="col-sm">
					<div class="row">
					<div class="col-4 product-icon product-icon-right">
						<i class="fa fa-pencil-square-o"></i>
					</div> <!-- /product-icon -->
					
					<div class="col-8 product-copy">
					<?php 
						$third_product_title = ( get_theme_mod( 'third_product_title' ) ) ? get_theme_mod( 'third_product_title' ) : 'Custom Development'; 
						$third_product_copy = ( get_theme_mod( 'third_product_copy' ) ) ? get_theme_mod( 'third_product_copy' ) : 'Message here'; 
						?>
						<h2 class="product-title"><?php echo $third_product_title; ?></h2>
						<p class="copy-body"><?php echo $third_product_copy; ?></p>
					</div> <!-- /product-copy -->
				</div> <!-- /row -->
				</div> <!-- /col-sm -->
			</div> <!-- /row -->
		</div> <!-- /container -->
	</section> <!-- #product-section -->
	<section id="logos-section">
	</section> <!-- #logo-section -->
	<section id="services-section">
	</section> <!-- #services-section -->
	<section id="team-section">
	</section> <!-- #team-section -->
	<section id="work-section">
	</section> <!-- #work-section -->
	<section id="responsive-section">
	</section> <!-- #responsive-section -->
	<section id="vision-section">
	</section> <!-- #vision-section -->
	<section id="testimonals-section">
	</section> <!-- #testimonals-section -->
	<section id="recent-post-section">
		<div class="container-fluid">
			<div class="row">
				<div class="section-title"><h2>Recent Posts</h2></div>
			</div> <!-- /row -->
			<div class="row">
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- #recent-post-section -->
	<section id="newsletter-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-4 align-self-center text-center"><h2>Get News and Updates!</h2></div>
				<div class="col-7 newsletter-form"><?php echo do_shortcode( get_theme_mod( 'newsletter_form' ) ); ?></div>
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- #newsletter-section -->
</main><!-- /#main -->
<?php
get_footer();