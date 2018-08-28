<?php
/**
 * dentalorange functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dentalorange
 */
 
function new_nav_menu_items($items, $args) {
    if($args->theme_location == 'main-menu'){
       $shop_item = '<li class="active pull-right"><a href="'.get_template_directory_uri().'/ajax-load/form-appointment.html" class="ajaxload-popup font-15 line-height-1"><i class="fa fa-calendar-plus-o mr-10 font-28"></i> Request an Appointment</a></li>
            <li class="scrollable-fix"></li>';
       $items = $items . $shop_item;
	   
	   
	   ?>
	   
	   
	   
	   
	   
	   <?php 
	   
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'new_nav_menu_items', 10, 2);
		

if ( ! function_exists( 'dentalorange_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dentalorange_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dentalorange, use a find and replace
		 * to change 'dentalorange' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dentalorange', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

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
		add_theme_support( 'post-formats', ['video','audio','gallery','quote','link'] );
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' =>  'Main Menu',
		) );
		
		function default_menu(){
			
			echo '<ul class="menuzord-menu">';
			echo '<li><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}
		
		

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

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		 
		/* 		 ACF OPTIONS PAGE 
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		} */
		
		
		
		/* Register Post Type with category */
		
		$labels = array(
				'name'               => __( 'Services', 'dentalorange' ),
				'singular_name'      => __( 'Service', 'dentalorange' ),
				'menu_name'          => __( 'Services', 'dentalorange' ),
				'name_admin_bar'     => __( 'Services', 'dentalorange' ),
				'add_new'            => __( 'Add Service', 'dentalorange' ),
				'add_new_item'       => __( 'Add New Service', 'dentalorange' ),
				'new_item'           => __( 'New Service', 'dentalorange' ),
				'edit_item'          => __( 'Edit Service', 'dentalorange' ),
				'view_item'          => __( 'View Services', 'dentalorange' ),
				'all_items'          => __( 'All Services', 'dentalorange' ),
				'search_items'       => __( 'Search Services', 'dentalorange' ),
				'parent_item_colon'  => __( 'Parent Service:', 'dentalorange' ),
				'not_found'          => __( 'No Services found.', 'dentalorange' ),
				'not_found_in_trash' => __( 'No Services found in Trash.', 'dentalorange' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'dentalorange' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'services' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-smiley',
				'supports'           => array( 'title', 'editor', 'thumbnail' )
			);

			register_post_type( 'services', $args );
			
			
			
			$labels = array(
				'name'               => __( 'Depertment', 'dentalorange' ),
				'singular_name'      => __( 'Depertment', 'dentalorange' ),
				'menu_name'          => __( 'Depertment', 'dentalorange' ),
				'name_admin_bar'     => __( 'Depertment', 'dentalorange' ),
				'add_new'            => __( 'Add Depertment', 'dentalorange' ),
				'add_new_item'       => __( 'Add New Depertment', 'dentalorange' ),
				'new_item'           => __( 'New Depertment', 'dentalorange' ),
				'edit_item'          => __( 'Edit Depertment', 'dentalorange' ),
				'view_item'          => __( 'View Depertment', 'dentalorange' ),
				'all_items'          => __( 'All Depertments', 'dentalorange' ),
				'search_items'       => __( 'Search Depertment', 'dentalorange' ),
				'parent_item_colon'  => __( 'Parent Depertment:', 'dentalorange' ),
				'not_found'          => __( 'No Depertment found.', 'dentalorange' ),
				'not_found_in_trash' => __( 'No Depertment found in Trash.', 'dentalorange' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'dentalorange' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'depertment' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-visibility',
				'supports'           => array( 'title', 'editor', 'thumbnail' )
			);

			register_post_type( 'depertment', $args );
			
			
			$labels = array(
				'name'               => __( 'Dentist', 'dentalorange' ),
				'singular_name'      => __( 'Dentist', 'dentalorange' ),
				'menu_name'          => __( 'Dentist', 'dentalorange' ),
				'name_admin_bar'     => __( 'Dentist', 'dentalorange' ),
				'add_new'            => __( 'Add Dentist', 'dentalorange' ),
				'add_new_item'       => __( 'Add New Dentist', 'dentalorange' ),
				'new_item'           => __( 'New Dentist', 'dentalorange' ),
				'edit_item'          => __( 'Edit Dentist', 'dentalorange' ),
				'view_item'          => __( 'View Dentist', 'dentalorange' ),
				'all_items'          => __( 'All Dentists', 'dentalorange' ),
				'search_items'       => __( 'Search Dentist', 'dentalorange' ),
				'parent_item_colon'  => __( 'Parent Dentist:', 'dentalorange' ),
				'not_found'          => __( 'No Dentist found.', 'dentalorange' ),
				'not_found_in_trash' => __( 'No Dentist found in Trash.', 'dentalorange' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'dentalorange' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'dentist' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-plus-alt',
				'supports'           => array( 'title', 'editor', 'thumbnail' )
			);

			register_post_type( 'dentist', $args );
			
			
			
			
			
			$labels = array(
				'name'               => __( 'Gallery', 'dentalorange' ),
				'singular_name'      => __( 'Gallery', 'dentalorange' ),
				'menu_name'          => __( 'Gallery', 'dentalorange' ),
				'name_admin_bar'     => __( 'Gallery', 'dentalorange' ),
				'add_new'            => __( 'Add Gallery', 'dentalorange' ),
				'add_new_item'       => __( 'Add New Gallery', 'dentalorange' ),
				'new_item'           => __( 'New Gallery', 'dentalorange' ),
				'edit_item'          => __( 'Edit Gallery', 'dentalorange' ),
				'view_item'          => __( 'View Gallery', 'dentalorange' ),
				'all_items'          => __( 'All Galleries', 'dentalorange' ),
				'search_items'       => __( 'Search Gallery', 'dentalorange' ),
				'parent_item_colon'  => __( 'Parent Gallery:', 'dentalorange' ),
				'not_found'          => __( 'No Gallery found.', 'dentalorange' ),
				'not_found_in_trash' => __( 'No Gallery found in Trash.', 'dentalorange' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'dentalorange' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'gallery' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-format-gallery',
				'supports'           => array( 'title', 'editor', 'thumbnail' )
			);

			register_post_type( 'gallery', $args );
			
			
			
			/* Register New Taxonomy*/ 
			
			$labels = array(
				'name'              => _x( 'News Category', 'dentalorange' ),
				'singular_name'     => _x( 'News Category', 'dentalorange' ),
				'search_items'      => __( 'Search Category', 'dentalorange' ),
				'all_items'         => __( 'All Categories', 'dentalorange' ),
				'parent_item'       => __( 'Parent Category', 'dentalorange' ),
				'parent_item_colon' => __( 'Parent Category:', 'dentalorange' ),
				'edit_item'         => __( 'Edit Category', 'dentalorange' ),
				'update_item'       => __( 'Update Category', 'dentalorange' ),
				'add_new_item'      => __( 'Add New Category', 'dentalorange' ),
				'new_item_name'     => __( 'New Category Name', 'dentalorange' ),
				'menu_name'         => __( 'Category', 'dentalorange' ),
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'news-category' ),
			);

			register_taxonomy( 'gallerycategory', array( 'gallery' ), $args );

		 
	
	}
endif;
add_action( 'after_setup_theme', 'dentalorange_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dentalorange_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dentalorange' ),
		'id'            => 'sidebar-widget',
		'description'   => esc_html__( 'Add widgets here.', 'dentalorange' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'dentalorange' ),
		'id'            => 'footer-widget',
		'description'   => esc_html__( 'Add widgets here.', 'dentalorange' ),
		'before_widget' => ' <div class="col-sm-6 col-md-3"><div class="widget dark">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4 class="widget-title line-bottom">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'dentalorange_widgets_init' );


/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 90px !important; width: 100px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.png") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.7); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Mostafiz Shabbir';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );
		 
		 
/* customize login screen */
		 
/**
 * Enqueue scripts and styles.
 */
function dentalorange_scripts() {
	
	wp_enqueue_style( 'dentalorange-bootstrapcss', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'dentalorange-jquery-uicss', get_template_directory_uri().'/css/jquery-ui.min.css' );
	wp_enqueue_style( 'dentalorange-animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_style( 'dentalorange-collectionss', get_template_directory_uri().'/css/css-plugin-collections.css' );
	wp_enqueue_style( 'dentalorange-megamenu', get_template_directory_uri().'/css/menuzord-megamenu.css' );
	wp_enqueue_style( 'dentalorange-menuzord', get_template_directory_uri().'/css/menuzord-skins/menuzord-boxed.css' );
	wp_enqueue_style( 'dentalorange-stylemain', get_template_directory_uri().'/css/style-main.css' );
	wp_enqueue_style( 'dentalorange-preloader', get_template_directory_uri().'/css/preloader.css' );
	wp_enqueue_style( 'dentalorange-custom-bootstrap', get_template_directory_uri().'/css/custom-bootstrap-margin-padding.css' );
	wp_enqueue_style( 'dentalorange-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'dentalorange-responsive', get_template_directory_uri().'/css/responsive.css' );
	wp_enqueue_style( 'dentalorange-theme-skin', get_template_directory_uri().'/css/colors/theme-skin-color-set3.css' );
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'dentalorange-jqueryss', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'dentalorange-jqueryui', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'dentalorange-bootstraps', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'dentalorangecollection', get_template_directory_uri() . '/js/jquery-plugin-collection.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'dentalorange-ssss', get_template_directory_uri() . '/js/simple-likes-public.js', array('jquery'), '', true );
	wp_enqueue_script( 'dentalorange-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
	


}
add_action( 'wp_enqueue_scripts', 'dentalorange_scripts' );


/**
 * Redux include
 */
require get_template_directory() . '/inc/opt/ReduxCore/framework.php';
require get_template_directory() . '/inc/opt/sample/config.php';


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/cmb/init.php';
require get_template_directory() . '/inc/cmb/config.php';


/**
 * TGM plugin activation
 */
require get_template_directory() . '/inc/tgm/example.php';


require get_template_directory() . '/inc/WordPress-Post-Like-System-master/post-like.php';


require get_template_directory() . '/inc/widget.php';
//require get_template_directory() . '/inc/shortcode/sample.php';






// admin scripts 
	
	function admin_backend_scripts(){ 

			if( get_post_type() == 'post' ) :

		?>

		<script>
			

			(function($){

				$(document).ready(function(){


					$('#comet-video').hide();
					$('#comet-audio').hide();
					$('#comet-gallery').hide();



					var idd =  $("input[class='post-format']:checked").attr('id');

					if( idd == 'post-format-video' ){

						$('#comet-video').show();
					}else{

						$('#comet-video').hide();
					}

					if( idd == 'post-format-audio' ){

						$('#comet-audio').show();
					}else{

						$('#comet-audio').hide();
					}

					if( idd == 'post-format-gallery' ){

						$('#comet-gallery').show();
					}else{

						$('#comet-gallery').hide();
					}

					$('input.post-format').change(function(){

						var idd =  $("input[class='post-format']:checked").attr('id');

						if( idd == 'post-format-video' ){

							$('#comet-video').show();
						}else{

							$('#comet-video').hide();
						}

						if( idd == 'post-format-audio' ){

							$('#comet-audio').show();
						}else{

							$('#comet-audio').hide();
						}

						if( idd == 'post-format-gallery' ){

							$('#comet-gallery').show();
						}else{

							$('#comet-gallery').hide();
						}

					});


				});


			})(jQuery)



		</script>

	<?php 

	endif;

} 
	add_action('admin_print_scripts','admin_backend_scripts', 1000);





