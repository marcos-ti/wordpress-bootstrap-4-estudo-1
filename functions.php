<?php 

// Funcao de carregamento de CSS e JS
function load_scripts(){
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
//hook
add_action( 'wp_enqueue_scripts', 'load_scripts' );




// Funcao de configuracao
function wpcurso_config() {
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);

	// Theme Support
	// Banner Header
	add_theme_support( 'custom-header', array(
		'height' => 225,
		'width'  => 1920
	) );
	// Thumbnails
	add_theme_support( 'post-thumbnails' );
	// Formatando Posts
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
}
//hook
add_action( 'after_setup_theme', 'wpcurso_config', 0 );