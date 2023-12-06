<?php  

if ( ! function_exists( 'moderna_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function moderna_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'moderna', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded  tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'moderna' ),
		'social'  => __( 'Social Links Menu', 'moderna' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );


    add_theme_support('custom-logo');
	
}
endif; // moderna_setup
add_action( 'after_setup_theme', 'moderna_setup' );
	
	function moderna_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'moderna' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'moderna' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'moderna_widgets_init' );

// new footer widget

if(!function_exists('footer_widget_one'))
{
	function footer_widget_one()
	{
		register_sidebar(
		array(
		      'name' =>esc_html__('Footer one','moderna'),
			  'id'   =>'footer-one',
			  'description' =>esc_html__('Add widget area'),
			  'before_widget' =>'<div class="footer-one %2$s">',
			  'after_widget' =>'</div>',
		      'before_title' =>'<h2 class="widget-title">',
			  'after_title' =>'</h2>',
		)
		);
	}
}
add_action('widgets_init','footer_widget_one');


/***
/assets/css/style.css',false,'all');
	wp_enqueue_style('animatecss', get_template_directory_uri().'/assets/vendor/animate.css/animate.min.css',array(),false,'all');
	wp_enqueue_style('aos', get_template_directory_uri(). '/assets/vendor/aos/aos.css',array(),false,'all');
	wp_enqueue_style('bootstap', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css', array(),false,'all');
	wp_enqueue_style('bootstrap-icons', get_template_directory_uri(). '/assets/vendor/bootstrap-icons/bootstrap-icons.css',array(),false,'all');
	wp_enqueue_style('boxixionscss', get_template_directory_uri(). '/assets/vendor/boxicons/css/boxicons.min.css', array(),false,'all');
	wp_enqueue_style('glightboxcss', get_template_directory_uri(). '/assets/vendor/glightbox/css/glightbox.min.css', array(),false,'all');
	wp_enqueue_style('bundlecss', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css', array(),false,'all');
	
themes style and script function
*******/

function main_stylesheets()
{
	wp_enqueue_style('customcss', get_template_directory_uri(). '/assets/css/style.css', false,'all');
	wp_enqueue_style('bootstap', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css',false,'all');
	wp_enqueue_style('bootstrap-icons', get_template_directory_uri(). '/assets/vendor/bootstrap-icons/bootstrap-icons.css',false,'all');
	wp_enqueue_style('boxixionscss', get_template_directory_uri(). '/assets/vendor/boxicons/css/boxicons.min.css',false,'all');
	wp_enqueue_style('glightboxcss', get_template_directory_uri(). '/assets/vendor/glightbox/css/glightbox.min.css',false,'all');
	wp_enqueue_style('bundlecss', get_template_directory_uri(). '/assets/vendor/swiper/swiper-bundle.css',false,'all');
	wp_enqueue_style('animatecss', get_template_directory_uri(). '/assets/vendor/animate/animate.min.css',false,'all');
	wp_enqueue_style('animatemin', get_template_directory_uri(). '/assets/vendor/animate/animate.css',false,'all');
	//wp_enqueue_style('aos', get_template_directory_uri(). '/assets/vendor/aos/aos.css');
	wp_enqueue_style('main_stylesheets', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','main_stylesheets');


/**
 * Proper way to enqueue scripts and styles
 */
function moderna_theme_name_scripts() {
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
	wp_enqueue_script( 'vanilla', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), '1.0.0', true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstapjs', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'glightboxcss', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'noframework', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), '1.0.0', true );
	wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'moderna_theme_name_scripts' );

function theme_files(){
        wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');  
    }
    add_action( 'wp_enqueue_scripts', 'theme_files' );

// custom imge type

function my_custom_mime_types( $mimes ) {
// Add new MIME types here
$mimes['svg'] = 'image/svg';
return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );


// REGISTER CUSTOM POST TYPES
// You can register more, just duplicate the register_post_type code inside of the function and change the values. You are set!
if ( ! function_exists( 'create_post_type' ) ) :

function create_post_type() {
  
  // You'll want to replace the values below with your own.
  register_post_type( 'service', // change the name
    array(
      'labels' => array(
        'name' => __( 'Services' ), // change the name
        'singular_name' => __( 'Service' ), // change the name
		'add_new' => __('Add New'),
		'add_new_item' => __('Add New Services'),
		'edit_item' => __('Edit Service'),
		'new_item' => __('New Service'),
		'view_item' => __('View service'),
		'search_items' => __('Search Servicea'),
      ),
      'public' => true,
      'supports' => array ( 'title', 'editor', 'custom-fields', 'page-attributes', 'thumbnail' ), // do you need all of these options?
     'taxonomies' => array( 'location', 'post_tag' ), // do you need categories and tags?
      'hierarchical' => true,
      'menu_icon' => ( 'dashicons-admin-site' ),
      'rewrite' => array ( 'slug' => __( 'services' ) ) // change the name
	  
    )
  );

}
add_action( 'init', 'create_post_type' );

endif; // ####
function add_custom_taxonomies() {
  // Add new "Locations" taxonomy to Posts
  register_taxonomy('location', 'service', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Locations', 'taxonomy general name' ),
      'singular_name' => _x( 'Location', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Locations' ),
      'all_items' => __( 'All Locations' ),
      'parent_item' => __( 'Parent Location' ),
      'parent_item_colon' => __( 'Parent Location:' ),
      'edit_item' => __( 'Edit Location' ),
      'update_item' => __( 'Update Location' ),
      'add_new_item' => __( 'Add New Location' ),
      'new_item_name' => __( 'New Location Name' ),
      'menu_name' => __( 'Locations' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'locations', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );


///Register widget

function feature_posts()
{
    register_post_type('featurepost',
	array('labels' =>array
	('name' => __('Feature Post'),
	'singular_name' => __('feature'),
	'add_new' => __('Add Posts'),
	'edit_item' => __('Edit Posts'),
	'view_item' => __('View Posts'),
	'search_items' => __('Search Posts'),
	),
	'public' => true,
	'hierarchical'=>true,
	'rewrite' => array('slug' =>__('feature')),
	'supports' => array('title','excerpt','custom_fields','editor','page_attributes','thumbnail'),
	'menu_icon' => __('dashicons-admin-site'),
	//'taxonomies' =>array('category','post_tag'),
	)
	);
}
add_action('init','feature_posts');



if(!function_exists('slider_post'))
{
function slider_post()
{
	register_post_type('slider',array(
	'labels'=>array(
	'name' => __('Slider post'),
	'singular_name' => __('slider'),
	'add_new' => __('Add post'),
	'add_new_item' => __('Add new Post'),
	'edit_item' => __('Edit post'),
	'view_item' => __('View post'),
	'search_items' => __('search slider post'),
	),
	'public' => true,
	'hierarchical' => true,
	'rewrite' => array('slug' =>__('slider')),	
    'menu_icon' => __('dashicons-admin-site'),
	'query_var' => true,
	'supports' => array('title','editor','custom_fields','excerpt','page_attribute','thumbnail'),
	)
	);
}
}
add_action('init','slider_post');

/**
* change post excerpt lengths

**/

if(!function_exists('change_excerpt_length'))
{
	function change_excerpt_length($length)
	{
		return 15;
	}
}
	add_filter('excerpt_length','change_excerpt_length');
	
	
	
function moderna_excerpt_more($more){
	return '<a href="'.get_the_permalink().'" rel="nofollow" class="readmore">Read more</a>';
}
add_filter('excerpt_more','moderna_excerpt_more');



/**
** custom email subscriber function

**/







add_action( 'admin_post_nopriv_contact_form', 'process_contact_form' );

add_action( 'admin_post_contact_form', 'process_contact_form' );

function process_contact_form(){

    GLOBAL $wpdb;

    $params = $_POST;

    /*create table if not exists*/

    $table_name = $wpdb->prefix.'custom_contact_form';

    $query = $wpdb->prepare( 'SHOW TABLES LIKE %s', $wpdb->esc_like( $table_name ) );

    if ( ! $wpdb->get_var( $query ) == $table_name ) {

        $sql = "CREATE TABLE {$table_name} (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if($wpdb->query($sql)){
        submitsForm($table_name,$params);
    }


}else{
    submitsForm($table_name,$params);
}

/*create table if not exists*/

die;

}

function submitsForm($table_name, $params){

    GLOBAL $wpdb;

    $curTime = date('Y-m-d H:i:s');

    $query = "INSERT INTO {$table_name}(full_name, email,created_at) VALUES('{$params['full_name']}','{$params['email']}','{$curTime}')"; 

    if($wpdb->query($query)){
        wp_redirect($params['base_page'].'?success=1'); 
    }else{
        wp_redirect($params['base_page'].'?error=1'); 
    }
}



	