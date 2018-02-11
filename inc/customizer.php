<?php
/**
 * WonkasoftTheme Theme Customizer
 *
 * @package WonkasoftTheme
 * @version  1.0.0 [<init>]
 * @since  1.0.0 [<init>]
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wonkasoft_theme_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'wonkasoft_theme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'wonkasoft_theme_customize_partial_blogdescription',
		) );
	}
	/**
	 * Theme Options 
	 * @since  1.0.0 [Theme options for home page]
	 */
	$wp_customize->add_panel( 'ft_theme_options', array(
 	'priority'       => 150,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '',
  'title'          => __('Wonkasoft Theme Options', 'wonkasoft-theme'),
  'description'    => __('Theme Settings', 'wonkasoft-theme'),
) );

		/**
	 * 
	 * Main Header Section
	 * @since  1.0.0
	 * 
	 */
	// Adding customizer section for main header section
	$wp_customize->add_section( 'header_section' , array(
		'capability'     	=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'priority'				=> 11,
		'title'						=> __( 'Header Section', 'wonkasoft-theme' ),
		'description'			=> __( 'Header Options version 1.0.0', 'wonkasoft-theme' ),
		'panel'  					=> 'ft_theme_options',
	) );

	// header Socials Facebook Setting
	$wp_customize->add_setting( 'header_social_facebook' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// header Socials Facebook Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_social_facebook', 
		array(
		'label'      	=> __( 'Header Social Facebook Icon', 'wonkasoft-theme' ),
		'section'    	=> 'header_section',
		'setting'   	=> 'header_social_facebook',
		'type'				=> 'url',
		'description'	=> 'Add Facebook URL for header section<br />example: https://facebook.com/username',
	) ) );

	// header Socials Twitter Setting
	$wp_customize->add_setting( 'header_social_twitter' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// header Socials Twitter Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_social_twitter', 
		array(
		'label'      	=> __( 'Header Social Twitter Icon', 'wonkasoft-theme' ),
		'section'    	=> 'header_section',
		'setting'   	=> 'header_social_twitter',
		'type'				=> 'url',
		'description'	=> 'Add Twitter URL for header section<br />example: https://twitter.com/username',
	) ) );

	// header Socials Instagram Setting
	$wp_customize->add_setting( 'header_social_instagram' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// header Socials Instagram Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_social_instagram', 
		array(
		'label'      	=> __( 'Header Social Instagram Icon', 'wonkasoft-theme' ),
		'section'    	=> 'header_section',
		'setting'   	=> 'header_social_instagram',
		'type'				=> 'url',
		'description'	=> 'Add Instagram URL for header section<br />example: https://instagram.com/username',
	) ) );

		// header Socials Yelp Setting
	$wp_customize->add_setting( 'header_social_yelp' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// header Socials Yelp Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_social_yelp', 
		array(
		'label'      	=> __( 'Header Social Yelp Icon', 'wonkasoft-theme' ),
		'section'    	=> 'header_section',
		'setting'   	=> 'header_social_yelp',
		'type'				=> 'url',
		'description'	=> 'Add Yelp URL for header section<br />example: https://yelp.com/username',
	) ) );

	// header GitHub Setting
	$wp_customize->add_setting( 'header_social_github' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// header GitHub Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_social_github', 
		array(
		'label'      	=> __( 'Header GitHub Icon', 'wonkasoft-theme' ),
		'section'    	=> 'header_section',
		'setting'   	=> 'header_social_github',
		'type'				=> 'url',
		'description'	=> 'Add GitHub URL for header section<br />example: https://github.com/username',
	) ) );

	// header WordPress Setting
	$wp_customize->add_setting( 'header_social_wordpress' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// header WordPress Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_social_wordpress', 
		array(
		'label'      	=> __( 'Header WordPress Icon', 'wonkasoft-theme' ),
		'section'    	=> 'header_section',
		'setting'   	=> 'header_social_wordpress',
		'type'				=> 'url',
		'description'	=> 'Add WordPress URL for header section<br />example: https://wordpress.org/username',
	) ) );

	// Support Chat Setting
	$wp_customize->add_setting( 'header_support_chat' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// Support Chat Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_support_chat', 
		array(
		'label'      	=> __( 'Header Support Chat', 'wonkasoft-theme' ),
		'section'    	=> 'header_section',
		'setting'   	=> 'header_support_chat',
		'type'				=> 'url',
		'description'	=> 'Add Support Chat Link for header section<br />example: #supportchat',
	) ) );

	// Phone Setting
	$wp_customize->add_setting( 'header_support_phone' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// Phone Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_support_phone', 
		array(
		'label'      	=> __( 'Header Support Phone Number', 'wonkasoft-theme' ),
		'section'    	=> 'header_section',
		'setting'   	=> 'header_support_phone',
		'type'				=> 'text',
		'description'	=> 'Add Support Phone Number<br />example: 555-555-5555',
	) ) );

	/**
	 *	End of Header area
	 * 
	 */
	
		/**
	 * 
	 * Main Section
	 * @since  1.0.0
	 * 
	 */
	// Adding customizer section for main section
	$wp_customize->add_section( 'main_section' , array(
		'capability'     	=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'priority'				=> 11,
		'title'						=> __( 'Main Section', 'wonkasoft-theme' ),
		'description'			=> __( 'Main Section Options', 'wonkasoft-theme' ),
		'panel'  					=> 'ft_theme_options',
	) );

		// Main Image Setting
	$wp_customize->add_setting( 'featured_media' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Main Image Control
	$wp_customize->add_control( new WP_Customize_Media_Control( 
		$wp_customize, 
		'featured_media', 
		array(
		'label'      	=> __( 'Featured Main Section Media ', 'wonkasoft-theme' ),
		'section'    	=> 'main_section',
		'setting'   	=> 'featured_media',
		'description'	=> 'Main section Media supports video1080p or image max resolution:1920x1080px',
	) ) );

	// Main fallback Image Setting
	$wp_customize->add_setting( 'featured_fallback_media' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Main Image Control
	$wp_customize->add_control( new WP_Customize_Media_Control( 
		$wp_customize, 
		'featured_fallback_media', 
		array(
		'label'      	=> __( 'Featured Main Section Media Fallback ', 'wonkasoft-theme' ),
		'section'    	=> 'main_section',
		'setting'   	=> 'featured_fallback_media',
		'description'	=> 'Main Fallback Media image max resolution:1920x1080px',
	) ) );

	// Main Message Setting
	$wp_customize->add_setting( 'main_section_message' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Main Message Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'main_section_message', 
		array(
		'label'      	=> __( 'Main Message ', 'wonkasoft-theme' ),
		'section'    	=> 'main_section',
		'setting'   	=> 'main_section_message',
		'type'				=> 'textarea',
		'description'	=> 'Enter your main message here',
	) ) );

		// Main CTA Link Setting
	$wp_customize->add_setting( 'main_section_cta_link' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Main CTA Link Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'main_section_cta_link', 
		array(
		'label'      	=> __( 'Main CTA Link', 'wonkasoft-theme' ),
		'section'    	=> 'main_section',
		'setting'   	=> 'main_section_cta_link',
		'type'				=> 'url',
		'description'	=> 'Select CTA Link Page',
	) ) );

	// Main CTA Text Setting
	$wp_customize->add_setting( 'main_section_cta_text' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Main CTA Text Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'main_section_cta_text', 
		array(
		'label'      	=> __( 'Main CTA Text', 'wonkasoft-theme' ),
		'section'    	=> 'main_section',
		'setting'   	=> 'main_section_cta_text',
		'type'				=> 'text',
		'description'	=> 'Select CTA Text',
	) ) );

	/**
	 * End of Main section
	 * 
	 */
	
		/**
	 * 
	 * Featured Section
	 * @since  1.0.0
	 * 
	 */
	// Adding customizer section for featured section
	$wp_customize->add_section( 'featured_section' , array(
		'capability'     	=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'priority'				=> 11,
		'title'						=> __( 'Featured Section', 'wonkasoft-theme' ),
		'description'			=> __( 'Featured Section Options', 'wonkasoft-theme' ),
		'panel'  					=> 'ft_theme_options',
	) );

	/**
	 * [$i set to 1 so index does not start at 0]
	 * Loop runs 3 times
	 * @var integer
	 */
	for ($i=1; $i < 4; $i++) { 
			// Featured item icon Setting
		$wp_customize->add_setting( 'featured_section_icon_'.$i , array(
			'default'   => '',
			'transport' => 'refresh',
		) );

			// Feature item icon Control
		$wp_customize->add_control( new WP_Customize_Control( 
			$wp_customize, 
			'featured_section_icon_'.$i, 
			array(
			'label'      	=> __( 'Featured Section Icon '.$i, 'wonkasoft-theme' ),
			'section'    	=> 'featured_section',
			'setting'   	=> 'featured_section_icon_'.$i,
			'type'				=> 'text',
			'description'	=> 'Select featured icon '.$i.'<br />example:fa-facebook',
		) ) );

		// Featured item title Setting
		$wp_customize->add_setting( 'featured_title_'.$i , array(
			'default'   => '',
			'transport' => 'refresh',
		) );

			// Featured item title Control
		$wp_customize->add_control( new WP_Customize_Control( 
			$wp_customize, 
			'featured_title_'.$i, 
			array(
			'label'      	=> __( 'Featured Title '.$i, 'wonkasoft-theme' ),
			'section'    	=> 'featured_section',
			'setting'   	=> 'featured_title_'.$i,
			'type'				=> 'text',
			'description'	=> 'Enter featured item '.$i.' title',
		) ) );

		// Featured item message Setting
		$wp_customize->add_setting( 'featured_message_'.$i , array(
			'default'   => '',
			'transport' => 'refresh',
		) );

			// Featured item message Control
		$wp_customize->add_control( new WP_Customize_Control( 
			$wp_customize, 
			'featured_message_'.$i, 
			array(
			'label'      	=> __( 'Featured Message '.$i, 'wonkasoft-theme' ),
			'section'    	=> 'featured_section',
			'setting'   	=> 'featured_message_'.$i,
			'type'				=> 'textarea',
			'description'	=> 'Enter featured item '.$i.' message',
		) ) );
	}

	/**
	 * End of Featured section
	 */
	 /**
	 * 
	 * logo Section
	 * @since  1.0.0
	 * 
	 */
	// Adding customizer section for logo section
	$wp_customize->add_section( 'logo_section' , array(
		'capability'     	=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'priority'				=> 11,
		'title'						=> __( 'Logo Section', 'wonkasoft-theme' ),
		'description'			=> __( 'Logo Section Options', 'wonkasoft-theme' ),
		'panel'  					=> 'ft_theme_options',
	) );
	/**
	 * [$i set to 1 so index does not start at 0]
	 * Loop runs 5 times
	 * @var integer
	 */
	for ($i=1; $i < 6; $i++) { 
		// Brand Logo Setting
		$wp_customize->add_setting( 'brand_section_logo_'.$i , array(
			'default'   => '',
			'transport' => 'refresh',
		) );

			// Brand Logo Control
		$wp_customize->add_control( new WP_Customize_Image_Control( 
			$wp_customize, 
			'brand_section_logo_'.$i, 
			array(
			'label'      	=> __( 'Brand Section Logo '.$i, 'wonkasoft-theme' ),
			'section'    	=> 'logo_section',
			'setting'   	=> 'brand_section_logo_'.$i,
			'description'	=> 'Select Brand Logo '.$i,
		) ) );
	}
	/**
	 * End of Brand section
	 */
	/**
	 * 
	 * Our Services Section
	 * @since  1.0.0
	 * 
	 */
	// Adding customizer section for our services section
	$wp_customize->add_section( 'services_section' , array(
		'capability'     	=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'priority'				=> 11,
		'title'						=> __( 'Our Services Section', 'wonkasoft-theme' ),
		'description'			=> __( 'Our Services Options', 'wonkasoft-theme' ),
		'panel'  					=> 'ft_theme_options',
	) );
		/**
	 * [$i set to 1 so index does not start at 0]
	 * Loop runs 4 times
	 * @var integer
	 */
	for ($i=1; $i < 5; $i++) { 
		// Our Services Icon Setting
		$wp_customize->add_setting( 'services_section_icon_'.$i , array(
			'default'   => '',
			'transport' => 'refresh',
		) );

			// Service Icon Control
		$wp_customize->add_control( new WP_Customize_Control( 
			$wp_customize, 
			'services_section_icon_'.$i, 
			array(
			'label'      	=> __( 'Service Icon '.$i, 'wonkasoft-theme' ),
			'section'    	=> 'services_section',
			'setting'   	=> 'services_section_icon_'.$i,
			'type'				=> 'text',
			'description'	=> 'Select service icon '.$i.'<br />example:fa-briefcase',
		) ) );

		// Our Services Title Setting
		$wp_customize->add_setting( 'services_section_title_'.$i , array(
			'default'   => '',
			'transport' => 'refresh',
		) );

			// Our Services Title Control
		$wp_customize->add_control( new WP_Customize_Control( 
			$wp_customize, 
			'services_section_title_'.$i, 
			array(
			'label'      	=> __( 'Service Title '.$i, 'wonkasoft-theme' ),
			'section'    	=> 'services_section',
			'setting'   	=> 'services_section_title_'.$i,
			'type'				=> 'text',
			'description'	=> 'Enter Title for service '.$i,
		) ) );

			// Our Services Message Setting
		$wp_customize->add_setting( 'services_section_message_'.$i , array(
			'default'   => '',
			'transport' => 'refresh',
		) );

			// Our Services Message Control
		$wp_customize->add_control( new WP_Customize_Control( 
			$wp_customize, 
			'services_section_message_'.$i, 
			array(
			'label'      	=> __( 'Service Message '.$i, 'wonkasoft-theme' ),
			'section'    	=> 'services_section',
			'setting'   	=> 'services_section_message_'.$i,
			'type'				=> 'textarea',
			'description'	=> 'Enter Message for service '.$i,
		) ) );
	}
	/**
	 * End of Our Services Section
	 */
	/**
	 * 
	 * Brand Message Section
	 * @since  1.0.0
	 * 
	 */
	// Adding customizer section for brand message section
	$wp_customize->add_section( 'brand_message_section' , array(
		'capability'     	=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'priority'				=> 11,
		'title'						=> __( 'Brand Message Section', 'wonkasoft-theme' ),
		'description'			=> __( 'Brand Message Options', 'wonkasoft-theme' ),
		'panel'  					=> 'ft_theme_options',
	) );
		// Brand Message Section Vision Setting
	$wp_customize->add_setting( 'brand_message_vision' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Brand Message Section Vision Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'brand_message_vision', 
		array(
		'label'      	=> __( 'Brand Message Vision', 'wonkasoft-theme' ),
		'section'    	=> 'brand_message_section',
		'setting'   	=> 'brand_message_vision',
		'type'				=> 'textarea',
		'description'	=> 'Enter brand vision',
	) ) );
		// Brand Message Section Mission Setting
	$wp_customize->add_setting( 'brand_message_mission' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Brand Message Section Mission Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'brand_message_mission', 
		array(
		'label'      	=> __( 'Brand Message Mission', 'wonkasoft-theme' ),
		'section'    	=> 'brand_message_section',
		'setting'   	=> 'brand_message_mission',
		'type'				=> 'textarea',
		'description'	=> 'Enter brand mission',
	) ) );
	/**
	 * End of Brand Message Section
	 */
	/**
	 * 
	 * Newsletter Section
	 * @since  1.0.0
	 * 
	 */
	// Adding customizer section for brand message section
	$wp_customize->add_section( 'newsletter_section' , array(
		'capability'     	=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'priority'				=> 11,
		'title'						=> __( 'Newsletter Section', 'wonkasoft-theme' ),
		'description'			=> __( 'Newsletter Options', 'wonkasoft-theme' ),
		'panel'  					=> 'ft_theme_options',
	) );
	// Newsletter Setting
	$wp_customize->add_setting( 'newsletter_form' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// Newsletter Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'newsletter_form', 
		array(
		'label'      	=> __( 'Newsletter Form', 'wonkasoft-theme' ),
		'section'    	=> 'newsletter_section',
		'setting'   	=> 'newsletter_form',
		'type'				=> 'text',
		'description'	=> 'Enter shortcode for wpforms',
	) ) );

	/**
	 * End of Newsletter Section
	 */
	/**
	 * 
	 * Footer Section
	 * @since  1.0.0
	 * 
	 */
	// Adding customizer section for brand message section
	$wp_customize->add_section( 'footer_section' , array(
		'capability'     	=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'priority'				=> 11,
		'title'						=> __( 'Footer Section', 'wonkasoft-theme' ),
		'description'			=> __( 'Footer Options', 'wonkasoft-theme' ),
		'panel'  					=> 'ft_theme_options',
	) );
	// Footer Form Setting
	$wp_customize->add_setting( 'footer_form' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// Newsletter Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'footer_form', 
		array(
		'label'      	=> __( 'Footer Form', 'wonkasoft-theme' ),
		'section'    	=> 'footer_section',
		'setting'   	=> 'footer_form',
		'type'				=> 'text',
		'description'	=> 'Enter shortcode for wpforms',
	) ) );

	/**
	 * End of footer section
	 */
}
add_action( 'customize_register', 'wonkasoft_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wonkasoft_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wonkasoft_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wonkasoft_theme_customize_preview_js() {
	wp_enqueue_script( 'wonkasoft-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wonkasoft_theme_customize_preview_js' );