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

$header_media = ( !get_theme_mod( 'featured_header_media' ) ) ? get_template_directory_uri() . '/assets/img/default.jpg': get_theme_mod( 'featured_header_media' );
get_header(); ?>
<main id="main">
	<section id="above-fold">
		<div class="container-fluid">
			<div class="row">
				<div id="header-media-wrap" class="col-sm-12">
					<img src="<?php echo $header_media; ?>" class="header-media img-responsive" alt="Header Media" />
				</div> <!-- /col-xs-12 -->
				<div class="col-xs-12 col-md-4 header-message text-center"><h2><?php echo get_theme_mod( 'header_message' ); ?></h2>
					<?php
					$header_cta_link = get_permalink( get_theme_mod( 'header_cta_link' ) );
					$header_cta_text = get_theme_mod( 'header_cta_text' );
					?>
					<a href="<?php echo $header_cta_link; ?>" class="btn btn-lg btn-wonka"><?php echo $header_cta_text; ?></a>
				</div><!-- /col-xs-4 header-message text-center -->
			</div> <!-- /row -->
		</div> <!-- /container-fluid -->
	</section> <!-- /above-fold -->
	
	<section id="product-section">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<div class="col-4 product-icon">
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
				</div> <!-- /col-sm -->
				
				<div class="col-sm">
					<div class="col-4 product-icon">
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
				</div> <!-- /col-sm -->
				
				<div class="col-sm">
					<div class="col-4 product-icon">
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
				</div> <!-- /col-sm -->
			</div> <!-- /row -->
		</div> <!-- /container -->
	</section> <!-- #first-section -->

					<section id="brands-section">
						<div class="container">
							<div class="row">
								<div class="col-sm brand-logo">
									<span><?php echo get_theme_mod( 'first_brand_logo' ); ?></span>
								</div> <!-- /col-sm brand-logo -->
								<div class="col-sm brand-logo">
									<span><?php echo get_theme_mod( 'second_brand_logo' ); ?></span>
								</div> <!-- /col-sm brand-logo -->
								<div class="col-sm brand-logo">
									<span><?php echo get_theme_mod( 'third_brand_logo' ); ?></span>
								</div> <!-- /col-sm brand-logo -->
								<div class="col-sm brand-logo">
									<span><?php echo get_theme_mod( 'forth_brand_logo' ); ?></span>
								</div> <!-- /col-sm brand-logo -->
								<div class="col-sm brand-logo">
									<span><?php echo get_theme_mod( 'fifth_brand_logo' ); ?></span>
								</div> <!-- /col-sm brand-logo -->
							</div> <!-- /row -->
						</div> <!-- /container -->
					</section> <!-- #search-section -->

						<section id="services-section">
							<div class="container-fluid">
									<div class="col-sm">
										<div class="col-sm">
											<h2><?php echo get_theme_mod( 'testimonial_section_title' ); ?></h2>
										</div> <!-- /col-xs-12 text-center -->
										<div class="col-xs-12 text-center section-message">
											<?php echo get_theme_mod( 'testimonial_section_message' ); ?>
										</div> <!-- /col-xs-12 text-center -->
										<div class="carousel-inner" role="listbox">
											<?php if (get_theme_mod( 'testimonial_section_client_message_1' )) { ?>
											<div class="col-xs-12 text-center testimonial-module item active">
												<img src="<?php echo get_theme_mod( 'testimonial_section_image_1' ); ?>" class="img-responsive center-block">
												<i class="fa fa-quote-left"></i>
												<p><?php echo get_theme_mod( 'testimonial_section_client_message_1' ); ?></p>
											</div> <!-- /col-xs-12 text-center testimonial-module -->
											<?php } ?>
											<?php if ( get_theme_mod( 'testimonial_section_client_message_2' ) ) { ?>
											<div class="col-xs-12 text-center testimonial-module item">
												<img src="<?php echo get_theme_mod( 'testimonial_section_image_2' ); ?>" class="img-responsive center-block">
												<i class="fa fa-quote-left"></i>
												<p><?php echo get_theme_mod( 'testimonial_section_client_message_2' ); ?></p>
											</div> <!-- /col-xs-12 text-center testimonial-module -->
											<?php } ?>
											<?php if ( get_theme_mod( 'testimonial_section_client_message_3' ) ) { ?>
											<div class="col-xs-12 text-center testimonial-module item">
												<img src="<?php echo get_theme_mod( 'testimonial_section_image_3' ); ?>" class="img-responsive center-block">
												<i class="fa fa-quote-left"></i>
												<p><?php echo get_theme_mod( 'testimonial_section_client_message_3' ); ?></p>
											</div> <!-- /col-xs-12 text-center testimonial-module -->
											<?php } ?>
										</div> <!-- /carousel-inner -->
										<!-- Left and right controls -->
										<a class="left carousel-control" href="#testimonial-slider" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#testimonial-slider" role="button" data-slide="next">
											<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div> <!-- /col-xs-12 -->
								</div> <!-- /row -->
							</div> <!-- /container-fluid -->
						</section> <!-- #testimonial-section -->
					
						<section id="financing-section">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 text-center">
										<h2><?php echo get_theme_mod( 'financing_section_title' ); ?></h2>
									</div> <!-- /col-xs-12 text-center -->
									<div class="col-xs-12 text-center section-message">
										<?php
										echo get_theme_mod( 'financing_section_message' );
										?>
									</div> <!-- /col-xs-12 text-center -->
									<div class="col-xs-12 text-center">
										<a href="<?php echo get_theme_mod( 'financing_section_cta_link' ); ?>" class="btn btn-lg btn-wonka">
											<?php echo get_theme_mod( 'financing_section_cta_text' ); ?></a>
										</div> <!-- /col-xs-12 text-center -->
									</div> <!-- /row -->
								</div> <!-- /container -->
							</section> <!-- #financing-section -->

							<section id="information-section-1">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 text-center">
											<h2><?php echo get_theme_mod( 'information_section_title_1' ); ?></h2>
										</div> <!-- /col-xs-12 text-center -->
										<div class="col-xs-12 text-center section-message">
											<?php echo get_theme_mod( 'information_section_message_1' ); ?>
										</div> <!-- /col-xs-12 text-center -->
										<div class="col-xs-12 text-center">
											<a href="<?php echo get_theme_mod( 'information_section_cta_link_1' ); ?>" class="btn btn-lg btn-wonka"><?php echo get_theme_mod( 'information_section_cta_text_1' ); ?></a>
										</div> <!-- /col-xs-12 text-center -->
									</div> <!-- /row -->
								</div> <!-- /container -->
							</section> <!-- #information-section-1 -->

							<section id="information-section-2">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 text-center">
											<h2><?php echo get_theme_mod( 'information_section_title_2' ); ?></h2>
										</div> <!-- /col-xs-12 text-center -->
										<div class="col-xs-12 text-center section-message">
											<?php echo get_theme_mod( 'information_section_message_2' ); ?>
										</div> <!-- /col-xs-12 text-center -->
										<div class="col-xs-12 text-center">
											<a href="<?php echo get_theme_mod( 'information_section_cta_link_2' ); ?>" class="btn btn-lg btn-wonka"><?php echo get_theme_mod( 'information_section_cta_text_2' ); ?></a>
										</div> <!-- /col-xs-12 text-center -->
									</div> <!-- /row -->
								</div> <!-- /container -->
							</section> <!-- #information-section-2 -->

							<section id="about-section">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 text-center">
											<h2><?php echo get_theme_mod( 'about_section_title' ); ?></h2>
										</div> <!-- /col-xs-12 text-center -->
										<div class="col-xs-12 text-center section-message">
											<p><?php echo get_theme_mod( 'about_section_paragraph_1' ); ?></p>
											<p><?php echo get_theme_mod( 'about_section_paragraph_2' ); ?></p>
											<p><?php echo get_theme_mod( 'about_section_paragraph_3' ); ?></p>
											<p><?php echo get_theme_mod( 'about_section_paragraph_4' ); ?></p>
											<p><img src="<?php echo get_theme_mod( 'about_image' ); ?>" class="img-responsive about-image center-block" /></p>
										</div> <!-- /col-xs-12 text-center -->
									</div> <!-- /row -->
								</div> <!-- /container -->
							</section> <!-- /about-section -->
						</main><!-- /#main -->
						<?php
						get_footer();