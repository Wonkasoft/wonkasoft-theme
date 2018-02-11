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
						<a href="<?php echo $header_cta_link; ?>" class="btn btn-light wonka-btn"><?php echo $header_cta_text; ?></a>
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
						<?php $freatured_icon_1 = ( get_theme_mod( 'featured_section_icon_1' ) ) ? get_theme_mod( 'featured_section_icon_1' ) : 'wordpress'; ?>
						<i class="fa fa-<?php echo $freatured_icon_1; ?>"></i>
					</div> <!-- /product-icon -->
			
					<div class="col-8 product-copy">
					<?php 
						$featured_title_1 = ( get_theme_mod( 'featured_title_1' ) ) ? get_theme_mod( 'featured_title_1' ) : 'WordPress Themes'; 
						$featured_message_1 = ( get_theme_mod( 'featured_message_1' ) ) ? get_theme_mod( 'featured_message_1' ) : 'Message here'; 
					?>
						<h2 class="product-title"><?php echo $featured_title_1; ?></h2>
						<p class="copy-body"><?php echo $featured_message_1; ?></p>
					</div> <!-- /product-copy -->
				</div> <!-- /row -->
				</div> <!-- /col-sm -->
				
				<div class="col-sm">
					<div class="row">
					<div class="col-4 product-icon product-icon-middle">
							<?php $freatured_icon_2 = ( get_theme_mod( 'featured_section_icon_2' ) ) ? get_theme_mod( 'featured_section_icon_2' ) : 'plug'; ?>
						<i class="fa fa-<?php echo $freatured_icon_2; ?>"></i>
					</div> <!-- /product-icon -->
			
					<div class="col-8 product-copy">
					<?php 
						$featured_title_2 = ( get_theme_mod( 'featured_title_2' ) ) ? get_theme_mod( 'featured_title_2' ) : 'WordPress Themes'; 
						$featured_message_2 = ( get_theme_mod( 'featured_message_2' ) ) ? get_theme_mod( 'featured_message_2' ) : 'Message here'; 
					?>
						<h2 class="product-title"><?php echo $featured_title_2; ?></h2>
						<p class="copy-body"><?php echo $featured_message_2; ?></p>
					</div> <!-- /product-copy -->
				</div> <!-- /row -->
				</div> <!-- /col-sm -->
				
				<div class="col-sm">
					<div class="row">
					<div class="col-4 product-icon product-icon-right">
								<?php $freatured_icon_3 = ( get_theme_mod( 'featured_section_icon_3' ) ) ? get_theme_mod( 'featured_section_icon_3' ) : 'pencil-square-o'; ?>
						<i class="fa fa-<?php echo $freatured_icon_3; ?>"></i>
					</div> <!-- /product-icon -->
			
					<div class="col-8 product-copy">
					<?php 
						$featured_title_3 = ( get_theme_mod( 'featured_title_3' ) ) ? get_theme_mod( 'featured_title_3' ) : 'Custom Development'; 
						$featured_message_3 = ( get_theme_mod( 'featured_message_3' ) ) ? get_theme_mod( 'featured_message_3' ) : 'Message here'; 
					?>
						<h2 class="product-title"><?php echo $featured_title_3; ?></h2>
						<p class="copy-body"><?php echo $featured_message_3; ?></p>
					</div> <!-- /product-copy -->
				</div> <!-- /row -->
				</div> <!-- /col-sm -->
			</div> <!-- /row -->
		</div> <!-- /container -->
	</section> <!-- #product-section -->
	<section id="logos-section">
		<div class="container-fluid">
			<div class="row">
				<?php
				$brand_section_logo_1 = ( get_theme_mod( 'brand_section_logo_1' ) ) ? get_theme_mod( 'brand_section_logo_1' ) : ''; 
				$brand_section_logo_2 = ( get_theme_mod( 'brand_section_logo_2' ) ) ? get_theme_mod( 'brand_section_logo_2' ) : ''; 
				$brand_section_logo_3 = ( get_theme_mod( 'brand_section_logo_3' ) ) ? get_theme_mod( 'brand_section_logo_3' ) : ''; 
				$brand_section_logo_4 = ( get_theme_mod( 'brand_section_logo_4' ) ) ? get_theme_mod( 'brand_section_logo_4' ) : ''; 
				$brand_section_logo_5 = ( get_theme_mod( 'brand_section_logo_5' ) ) ? get_theme_mod( 'brand_section_logo_5' ) : ''; 
				?>
				<div class="col-sm text-center">
					<img src="<?php echo $brand_section_logo_1; ?>" class="img-responsive block-center" alt="brand-logo" />
				</div> <!-- /leftcol -->
				<div class="col-sm text-center">
					<img src="<?php echo $brand_section_logo_2; ?>" class="img-responsive" alt="brand-logo" />
				</div> <!-- /leftcol -->
				<div class="col-sm text-center">
					<img src="<?php echo $brand_section_logo_3; ?>" class="img-responsive" alt="brand-logo" />
				</div> <!-- /leftcol -->
				<div class="col-sm text-center">
					<img src="<?php echo $brand_section_logo_4; ?>" class="img-responsive" alt="brand-logo" />
				</div> <!-- /leftcol -->
				<div class="col-sm text-center">
					<img src="<?php echo $brand_section_logo_5; ?>" class="img-responsive" alt="brand-logo" />
				</div> <!-- /leftcol -->
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- #logo-section -->
	<section id="services-section">
		<div class="container-fluid">
			<div class="row services-title-row">
				<div class="services-title"><h2>Our Services</h2></div>
			</div> <!-- /row -->
			<div class="row services-items">
				<div class="col-sm"></div>
				<div class="col-sm"></div>
				<div class="col-sm"></div>
				<div class="col-sm"></div>
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- #services-section -->
	<section id="team-section">
		<div class="container-fluid">
			<div class="row bg-row">
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
			</div> <!-- /row -->
			<div class="row team-title-row">
				<div class="team-title"><h2><b>Meet</b> the <b>Team</b></h2></div>
			</div> <!-- /row -->
			<div class="row">
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- #team-section -->
	<section id="work-section">
		<div class="container-fluid">
			<div class="row bg-row justify-content-around">
				<div class="offset-1 bg-col"></div>
				<div class="bg-col"></div>
				<div class="offset-3 bg-col"></div>
				<div class="bg-col"></div>
				<div class="bg-col"></div>
			</div> <!-- /row -->
			<div class="row work-title-row">
				<div class="work-title"><h2>Our Work</b></h2></div>
			</div> <!-- /row -->
			<div class="row">
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
			</div> <!-- /row -->
			<div class="row">
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
			</div> <!-- /row -->
			<div class="row">
				<div class="col"></div>
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- #work-section -->
	<section id="responsive-section">
		<div class="container-fluid">
			<div class="row bg-row justify-content-around">
				<div class="bg-col"></div>
				<div class="bg-col"></div>
				<div class="bg-col"></div>
				<div class="bg-col"></div>
				<div class="bg-col"></div>
				<div class="bg-col"></div>
				<div class="bg-col"></div>
				<div class="bg-col"></div>
				<div class="bg-col"></div>
				<div class="bg-col"></div>
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- #responsive-section -->
	<section id="vision-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm">
					<div class="row vision-title-row">
						<div class="vision-title"><h2>Vision</h2></div>
					</div> <!-- /row -->
					<div class="row vision-copy-row">
						<div class="vision-copy"><p>vision</p></div>
					</div> <!-- /row -->
				</div> <!-- /col-sm -->
				<div class="col-sm">
					<div class="row mission-title-row">
						<div class="mission-title"><h2>Mission</h2></div>
					</div> <!-- /row -->
					<div class="row mission-copy-row">
						<div class="mission-copy"><p>Mission</p></div>
					</div> <!-- /row -->
				</div> <!-- /col-sm -->
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- #vision-section -->
	<section id="testimonials-section">
		<div class="container-fluid">
			<div class="row bg-row justify-content-around">
				<div class="bg-col"></div>
				<div class="bg-col"></div>
				<div class="bg-col"></div>
			</div> <!-- /row -->
			<div class="row testimonials-title-row">
				<div class="testimonials-title"><h2>Testimonials</h2></div>
			</div> <!-- /row -->
			<div class="row">
				<div class="col"></div>
				<div class="col"></div>
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- #testimonals-section -->
	<section id="recent-post-section">
		<div class="container-fluid">
			<div class="row">
				<div class="section-title"><h2>Recent Posts</h2></div>
			</div> <!-- /row -->
			<div class="row">
				<div class="col first-col"></div>
				<div class="center-col"></div>
				<div class="col last-col"></div>
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