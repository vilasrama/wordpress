<?php
/**
function files of website
**/
// stylesheet


/**
 * Proper way to enqueue scripts and styles
 */
function modem_mainstyle() {
	wp_enqueue_style( 'main', get_stylesheet_uri());
	wp_enqueue_style('custom_css', get_template_directory_uri(). '/assets/css/style.css',false,'all');
	wp_enqueue_style('animatecss', get_template_directory_uri().'/assets/vendor/animate.css/animate.min.css',array(),false,'all');
	wp_enqueue_style('aos', get_template_directory_uri(). '/assets/vendor/aos/aos.css',array(),false,'all');
	wp_enqueue_style('bootstap', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css', array(),false,'all');
	wp_enqueue_style('bootstrap-icons', get_template_directory_uri(). '/assets/vendor/bootstrap-icons/bootstrap-icons.css',array(),false,'all');
	wp_enqueue_style('boxixionscss', get_template_directory_uri(). '/assets/vendor/boxicons/css/boxicons.min.css', array(),false,'all');
	wp_enqueue_style('glightboxcss', get_template_directory_uri(). '/assets/vendor/glightbox/css/glightbox.min.css', array(),false,'all');
	wp_enqueue_style('bundlecss', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css', array(),false,'all');
	
	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'modem_mainstyle' );


//script of themes
/**
 * Proper way to enqueue scripts and styles
 */
function modem_theme_name_scripts() {
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
	wp_enqueue_script( 'vanilla', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), '1.0.0', true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstapjs', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'glightboxcss', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'noframework', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), '1.0.0', true );
	wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '1.0.0', true );

	
}
add_action( 'wp_enqueue_scripts', 'modem_theme_name_scripts' );



//register menu
function register_menu()
{
	register_nav_menus(
	array(
	'header_menu'=>__('Header Menu'),
	'footer_menu'=>__('footer_menu'),
	)
	);
	
}
add_action('init','register_menu');




function modem_setup_theme()
{


	// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 672, 372, true );
		add_image_size( 'twentyfourteen-full-width', 1038, 576, true );
		
add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);
add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'audio',
				'quote',
				'link',
				'gallery',
			)
		);
		
}
add_action( 'after_setup_theme', 'modem_setup_theme' );