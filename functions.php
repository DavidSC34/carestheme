<?php
function agregrar_css_js(){
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('materialize', get_template_directory_uri() . '/css/materialize.min.css');
        wp_enqueue_script('materialize-js','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('fontawesome','https://kit.fontawesome.com/97f6e04dbb.js','','5.0',true);
}

add_action('wp_enqueue_scripts', 'agregrar_css_js');