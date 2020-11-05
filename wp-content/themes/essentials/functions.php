<?php
/**
* essentials functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package essentials
*/

define( 'ESSENTIALS_THEME_VERSION', '1.1.3' );
// define('CONCATENATE_SCRIPTS', false);
update_option('envato_purchase_code_27889640','envato_purchase_code');
if ( ! function_exists( 'essentials_setup' ) ) :
	/**
	* Sets up theme defaults and registers support for various WordPress features.
	*
	* Note that this function is hooked into the after_setup_theme hook, which
	* runs before the init hook. The init hook is too late for some features, such
	* as indicating support for post thumbnails.
	*/
	function essentials_setup() {
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on essentials, use a find and replace
		* to change 'essentials' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'essentials', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-formats', array(  'quote', 'video', 'audio', 'link' ) );

		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_attr__( 'Primary', 'essentials' ),
		) );

		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'essentials_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		* Add support for core custom logo.
		*
		* @link https://codex.wordpress.org/Theme_Logo
		*/
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		/**
		* Add support for wide alignment.
		*
		* @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
		*/
		add_theme_support( 'align-wide' );
	}
endif;
add_action( 'after_setup_theme', 'essentials_setup' );

/**
* Set the content width in pixels, based on the theme's design and stylesheet.
*
* Priority 0 to make it available to lower priority callbacks.
*
* @global int $content_width
*/
function essentials_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'essentials_content_width', 640 );
}
add_action( 'after_setup_theme', 'essentials_content_width', 0 );

/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function essentials_widgets_init() {
	register_sidebar( array(
		'name'          => esc_attr__( 'Main Sidebar', 'essentials' ),
		'id'            => 'sidebar-1',
		'description'   => esc_attr__( 'Add widgets here.', 'essentials' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="font-weight-bold text-heading-default widget-title2 pix-mb-10">',
		'after_title'   => '</h5>',
	) );

	if(pix_get_option('pix_sidebars')){
		if(!empty(pix_get_option('pix_sidebars'))){
			$sidebars = pix_get_option('pix_sidebars');
			foreach ($sidebars as $key => $value) {
				if($value!=''){
					register_sidebar( array(
						'name'          => $value,
						'id'            => 'sidebar-'.str_replace(' ', '', strtolower($value) ),
						'description'   => esc_attr__( 'Add widgets here.', 'essentials' ),
						'before_widget' => '<section id="%1$s" class="widget %2$s">',
						'after_widget'  => '</section>',
						'before_title'  => '<h5 class="font-weight-bold text-heading-default pix-mb-10">',
						'after_title'   => '</h5>',
					) );
				}
			}
		}
	}
}
add_action( 'widgets_init', 'essentials_widgets_init' );

/**
* Functions which enhance the theme by hooking into WordPress.
*/
require get_template_directory() . '/inc/template-functions.php';

/**
* Functions which enhance the theme posts by hooking into WordPress.
*/
require get_template_directory() . '/inc/post-functions.php';
require get_template_directory() . '/inc/portfolio-functions.php';
require get_template_directory() . '/inc/header-functions.php';

/**
* Enqueue scripts and styles.
*/


function essentials_scripts() {
	$pageTransition = 'default';
	if(!empty(pix_get_option('site-page-transition'))){
		if(pix_get_option('site-page-transition')=='fade-page-transition'){
			$pageTransition = 'fade';
		}elseif (pix_get_option('site-page-transition')=='disable-page-transition') {
			$pageTransition = 'disable';
		}
	}

	$introStyle = '
	 body:not(.render) .pix-overlay-item {
		 opacity: 0 !important;
	 }
	 body:not(.pix-loaded) .pix-wpml-header-btn {
		 opacity: 0;
	 }
	 ';



	$pageTransitionColor = '#ffffff';
	if(!empty(pix_get_option('site-page-transition-color'))){
		$pageTransitionColor = pix_get_option('site-page-transition-color');
	}
	if($pageTransition=='fade'){
		 $introStyle .= '
		 html:not(.render) {
			 background: '.$pageTransitionColor.'  !important;
		 }
		 .pix-page-loading-bg:after {
			 content: " ";
			 position: fixed;
			 top: 0;
			 left: 0;
			 width: 100vw;
			 height: 100vh;
			 display: block;
			 pointer-events: none;
			 transition: opacity .16s ease-in-out;
			 z-index: 99999999999999999999;
			 opacity: 1;
			 background: '.$pageTransitionColor.' !important;
		 }
		 body.render .pix-page-loading-bg:after {
			 opacity: 0;
		 }
	 	 ';
	 }if($pageTransition=='default'){
		 $introStyle .= '
		 html:not(.render) {
			 background: '.$pageTransitionColor.'  !important;
		 }
 		 .pix-page-loading-bg:after {
 			 content: " ";
 			 position: fixed;
 			 top: 0;
 			 left: 0;
 			 width: 100vw;
 			 height: 100vh;
 			 display: block;
 			 background: '.$pageTransitionColor.' !important;
 			 pointer-events: none;
 			 transform: scaleX(1);
 			 transition: transform .2s ease-in-out;
 			 transform-origin: right center;
 			 z-index: 99999999999999999999;
 		 }
 		 body.render .pix-page-loading-bg:after {
 			 transform: scaleX(0);
 			 transform-origin: left center;
 		 }';
	 }



	 $footer = false;
	 if(!empty(pix_get_option('pix-footer'))){
	 	$footer = pix_get_option('pix-footer');
	 }
	 if(get_post_type()=='page' && get_post_meta( get_the_ID(), 'pix-page-footer', true )){
	 	$footer = get_post_meta( get_the_ID(), 'pix-page-footer', true );
	 }

	 if($footer){
	 	$post = get_post( $footer );
		if(!function_exists('vc_custom_css')){
			function vc_custom_css($id) {
		 		$shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
		 		if ( ! empty( $shortcodes_custom_css ) ) {
		 			return esc_attr($shortcodes_custom_css);
		 		}
		 	}
		}

	 	if ( defined( 'WPB_VC_VERSION' ) ) {
	 		// WP Bakery
	 		$introStyle .= vc_custom_css($footer);
	 	}
		wp_reset_postdata();
	 }

	wp_register_style( 'pix-intro-handle', false );
	wp_enqueue_style( 'pix-intro-handle' );
	wp_add_inline_style( 'pix-intro-handle', $introStyle );




	// Theme Styling
		// load bootstrap js
		// no conflict mode
		if(!empty(pix_get_option('pix-enable-jquery'))){
			if( pix_get_option('pix-enable-jquery') ){
				if(!empty(pix_get_option('pix-enable-jquery-check'))){
					if ( ! wp_script_is( 'jquery', 'enqueued' )) {
				        wp_enqueue_script( 'essentials-jquery', get_template_directory_uri().'/js/build/jquery.min.js', false, ESSENTIALS_THEME_VERSION );
				    }
			    }else{
					wp_enqueue_script( 'essentials-jquery', get_template_directory_uri().'/js/build/jquery.min.js', false, ESSENTIALS_THEME_VERSION );
				}
			}
		}


		wp_enqueue_script( 'pix-main-essentials', get_template_directory_uri() . '/js/essentials.min.js', array('jquery'), ESSENTIALS_THEME_VERSION, true );


	wp_dequeue_style( 'fontawesome' );
	wp_deregister_style( 'fontawesome' );
	wp_dequeue_style( 'yith-wcwl-font-awesome-css' );
	wp_deregister_style( 'yith-wcwl-font-awesome' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if(!empty(pix_get_option('pix-custom-js-header'))){
	   wp_register_script('essentials-options-script-header', false, false, ESSENTIALS_THEME_VERSION);
	   wp_enqueue_script( 'essentials-options-script-header' );
	   wp_add_inline_script('essentials-options-script-header', pix_get_option('pix-custom-js-header'));
   }
   // Bootstrap
   wp_enqueue_style( 'essentials-bootstrap', get_template_directory_uri() . '/css/build/bootstrap.min.css' );



}
add_action( 'wp_enqueue_scripts', 'essentials_scripts', 10 );






function essentials_add_styles() {
	if(!function_exists('essentials_core_plugin')){
		wp_enqueue_style( 'essentials-default-style', get_template_directory_uri() . '/css/pix-essentials-style.css' );
		wp_enqueue_style( 'pix-external-font-1', 'https://fonts.googleapis.com/css2?family=Manrope&family=Poppins&display=swap', false );
	}
	wp_enqueue_style( 'pix-flickity-style',	get_template_directory_uri() .'/css/build/flickity.min.css', false, ESSENTIALS_THEME_VERSION, 'all' );
	wp_enqueue_style( 'essentials-pixicon-font', get_template_directory_uri() .'/css/build/style.css', false, ESSENTIALS_THEME_VERSION, 'all' );
	wp_enqueue_style( 'pix-popups-style',	get_template_directory_uri() .'/css/jquery-confirm.min.css', false, ESSENTIALS_THEME_VERSION, 'all' );
	wp_enqueue_style( 'essentials-select-css', get_template_directory_uri() .'/css/build/bootstrap-select.min.css', false, ESSENTIALS_THEME_VERSION, 'all' );

	if(is_user_logged_in()) wp_enqueue_style( 'pix-theme-admin-style', get_template_directory_uri() . '/css/pix-admin.css');
}

$pageTransition = 'default';
if(!empty(pix_get_option('site-page-transition'))){
	if(pix_get_option('site-page-transition')=='fade-page-transition'){
		$pageTransition = 'fade';
	}elseif (pix_get_option('site-page-transition')=='disable-page-transition') {
		$pageTransition = 'disable';
	}
}
if($pageTransition=='disable'){
	add_action( 'wp_enqueue_scripts', 'essentials_add_styles', 11 );
}else{
	add_action( 'wp_footer', 'essentials_add_styles', 10 );
}

function pix_theme_footer_extras(){
	echo essentials_search_overlay();
	essentials_footer_extras();
	if(pix_get_option('pix-enable-cookies')){
		if(pix_show_cookies()){
			get_template_part( 'template-parts/cookies' );
		}
	}
}
add_action( 'wp_footer', 'pix_theme_footer_extras', 10 );


function pix_theme_params(){
	return array(
		'name'			=> 'Essentials',
		'slug'			=> 'essentials',
	);
}

function pix_add_footer_styles() {





	if(!empty(pix_get_option('google-api-key'))){
		wp_enqueue_script( 'pix-maps-googleapis', 'https://maps.googleapis.com/maps/api/js?key='.pix_get_option('google-api-key'), false, ESSENTIALS_THEME_VERSION, true);
	}

	if(!empty(pix_get_option('pix-custom-js-footer'))){
		wp_register_script('essentials-options-script-footer', false, false, ESSENTIALS_THEME_VERSION);
		wp_enqueue_script( 'essentials-options-script-footer' );
		wp_add_inline_script('essentials-options-script-footer', pix_get_option('pix-custom-js-footer'));
	}

};

add_action( 'wp_footer', 'pix_add_footer_styles', 10 );
function pix_add_footer_custom_styles() {
	if(!empty(pix_get_option('pic-custom-css'))){
		wp_register_style( 'pix-custom-css', false );
		wp_enqueue_style( 'pix-custom-css' );
		wp_add_inline_style( 'pix-custom-css', pix_get_option('pic-custom-css') );
	}
};
add_action( 'wp_footer', 'pix_add_footer_custom_styles', 12 );

// Register Admin Script
function pix_theme_admin_scripts() {
	wp_enqueue_script( 'media-upload' );
	wp_enqueue_media();
	wp_enqueue_script( 'pix-admin-script', get_template_directory_uri() . '/js/pix-admin.js', array(), ESSENTIALS_THEME_VERSION, true );
}

// Hook into the 'admin_enqueue_scripts' action
add_action( 'admin_enqueue_scripts', 'pix_theme_admin_scripts' );

function pix_redux_admin_scripts() {
	wp_enqueue_style( 'pix-theme-admin-style', get_template_directory_uri() . '/css/pix-admin.css');
}
add_action( 'redux/page/pix_options/enqueue', 'pix_redux_admin_scripts' );
add_action( 'admin_menu', 'pix_redux_admin_scripts' );

require get_template_directory() . '/inc/config/hub-connect.php';

function pix_get_languages() {
	$languages = apply_filters( 'wpml_active_languages', NULL, array( 'skip_missing' => 0 ));
	return $languages;
}
add_action( 'wp', 'pix_get_languages' );

function pix_add_cpt_support() {
	$cpt_support = get_option( 'elementor_cpt_support' );
	if( ! $cpt_support ) {
	    $cpt_support = [ 'page', 'post', 'pixfooter', 'pixpopup', 'portfolio' ];
	    update_option( 'elementor_cpt_support', $cpt_support );
	}else{
		 if( ! in_array( 'pixfooter', $cpt_support ) ) {
			 $cpt_support[] = 'pixfooter';
			 update_option( 'elementor_cpt_support', $cpt_support );
		 }
		 if( ! in_array( 'pixpopup', $cpt_support ) ) {
			 $cpt_support[] = 'pixpopup';
			 update_option( 'elementor_cpt_support', $cpt_support );
		 }
		 if( ! in_array( 'portfolio', $cpt_support ) ) {
			 $cpt_support[] = 'portfolio';
			 update_option( 'elementor_cpt_support', $cpt_support );
		 }
	 }
}

add_action( 'after_switch_theme', 'pix_add_cpt_support' );


/**
* Dashboard
*/
require get_template_directory() . '/inc/dashboard.php';

/**
* Media
*/
require get_template_directory() . '/inc/media.php';

/**
* Implement the Custom Header feature.
*/
require get_template_directory() . '/inc/custom-header.php';

/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/inc/template-tags.php';

/**
* Load Jetpack compatibility file.
*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* Load JetpackWP Bootstrap Navwalker.
*/
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
* Load required plugins
*/
if(is_admin()) require get_template_directory() . '/inc/plugins.php';

/**
* Load demo content
*/
if(is_admin()) require get_template_directory() . '/inc/demo.php';

/**
* Load WooCommerce compatibility file.
*/
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
