<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WonkasoftTheme
 * @since 1.0.0 [<init setup>]
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<h3 class="footer-header">Get a Quote</h3>
				<?php echo do_shortcode( get_theme_mod( 'footer_form' ) ); ?>
			</div> <!-- /col-sm-4 -->
			
			<div class="col-sm">
				<h3 class="footer-header">Information</h3>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'information-menu',
						'menu_id'        => 'information-menu',
					) );
				?>
			</div> <!-- /col-sm-4 -->
			
			<div class="col-sm">
				<h3 class="footer-header">Our Services</h3>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'services-menu',
						'menu_id'        => 'services-menu',
					) );
				?>
			</div> <!-- /col-sm-4 -->
			
			<div class="col-sm">
				<h3 class="footer-header">Recent Posts</h3>
				<ul>
				<!-- // Define our WP Query Parameters -->
				<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
				 
				<!-- // Start our WP Query -->
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				 
				<!-- // Display the Post Title with Hyperlink -->
				<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
				 
				<!-- // Repeat the process and reset once it hits the limit -->
				<?php 
				endwhile;
				wp_reset_postdata();
				?>
				</ul>
			</div> <!-- /col-sm-4 -->
		</div> <!-- /row -->
		<div class="row row-last">
		<div class="col site-info">
			&copy; <?php echo date( 'Y' ); ?> All rights reserved
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Designed and developed by: %1$s', 'wonkasoft-theme' ), '<a href="https://wonkasoft.com">Wonkasoft</a>' );
			?>
		</div><!-- .site-info -->
		<div class="col-6 social-icons text-center">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-instagram"></i>
				<i class="fa fa-yelp"></i>
				<i class="fa fa-git"></i>
				<i class="fa fa-wordpress"></i>
			</div> <!-- /social-icons -->
		</div> <!-- /row -->
	</div> <!-- /container -->
	</footer><!-- #colophon -->
	<a id="to-top-btn" href="#top-of-page" class="scroll-top text-center text-white js-scroll-trigger">&lsaquo;</a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
