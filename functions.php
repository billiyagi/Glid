<?php 

	//load CssStyleSheet
	function load_file(){

		wp_enqueue_style('style', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', "load_file");

	//Load JavaScript
	// function load_scripts() {


	// }

	// add_action( 'wp_enqueue_scripts', 'cred_register_scripts' );


	function init_setup(){
		//add Featured Image
		add_theme_support('post-thumbnails');
	}
	add_action('after_setup_theme', 'init_setup');

	function my_function_admin_bar(){ return false; }
	
	add_filter( 'show_admin_bar' , 'my_function_admin_bar');
	register_nav_menus( array(
	 'primary' => __( 'Primary Menu' )

	) );
	//excerp
	function get_excerpt_length(){
		return 30;
	}
	function return_excerpt_text(){
		return '';
	}
	add_filter('excerpt_more', 'return_excerpt_text');

	add_filter('excerpt_length', 'get_excerpt_length');

	function widget_setup(){
		register_sidebar(array(
			'name' => "Main Footer For Post Page",
			'id'   => "sidebar1",
			'description' => '',
			'class'		=> 'widget',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
		));
		register_sidebar(array(
			'name' => "Secondary Sidebar For Single Page",
			'id'   => "sidebar2",
			'description' => '',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
		));
		register_sidebar(array(
			'name' => "Footer For Single Page",
			'id'   => "sidebar3",
			'description' => '',
			'class'		=> 'widget',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
		));
	}
	add_action('widgets_init','widget_setup');

    if (!is_admin()) {
    function wpb_search_filter($query) {
    if ($query->is_search) {
    $query->set('post_type', 'post');
    }
    return $query;
    }
    add_filter('pre_get_posts','wpb_search_filter');
    }
    // Costume Logo
    function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



	//Title
	add_theme_support( 'title-tag' ); 


 ?>