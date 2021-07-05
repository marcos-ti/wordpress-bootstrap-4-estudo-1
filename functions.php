<?php
function temaScripts() {
    wp_enqueue_script('bootstrap_4_js', 'cdn', array('jquery'), '4.0', true);
    wp_enqueue_style('bootstrap_4_css','cdn', array(), '4.0', 'all');
    wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css', array(), '1.0', 'all')
}
add_action('wp_enqueue_scripts','temaScripts');