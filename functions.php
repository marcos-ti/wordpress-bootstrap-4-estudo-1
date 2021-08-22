<?php 

function load_scripts(){
	// Incluindo JS, true para colocar google analitycs no fim da página
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js', array(), '5.1.0', 'true' );
	// Argumentos: O array carrega dependencias, 1.0 = versao (opcional), all são os tipos de midia (print, screen)
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', array(), '5.1.0', 'all' );
	// Inserindo o CSS do Bootstrap
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
// Hook (gancho) que chama a funcao
add_action( 'wp_enqueue_scripts', 'load_scripts' );


