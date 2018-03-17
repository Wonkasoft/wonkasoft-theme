<?php 
/**
 * WonkasoftTheme Theme Widget Setup
 *
 * @package WonkasoftTheme
 * @version  1.0.0 [<init>]
 * @since  1.0.0 [<init>]
 */

/**
 * Add theme support for selective refresh for widgets.
 */
add_theme_support( 'customize-selective-refresh-widgets' );

/**
 * Register Team Widget
 * @since 1.0.0 [<init>]
 */
function wonkasoft_theme_widgets_init() {
  register_sidebar( array(
    'name'          =>  esc_html__( 'Our Team', 'wonkasoft-theme' ),
    'id'            => 'our-team',
    'description'   =>  esc_html__( 'Our Team Section on Homepage', 'wonkasoft-theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
/**
 * Register Testimonials Widget
 */
  register_sidebar( array(
    'name'          =>  esc_html__( 'Testimonials', 'wonkasoft-theme' ),
    'id'            => 'Testimonials',
    'description'   =>  esc_html__( 'Testimonials Section on Homepage', 'wonkasoft-theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'wonkasoft-theme' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'wonkasoft-theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'wonkasoft_theme_widgets_init' );