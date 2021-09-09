<?php

/**
 * agregar CMB2_Field
 */
require_once dirname(__FILE__) . '/cmb2.php';

//Carga campos personalizados

require_once dirname(__FILE__) . '/inc/custom-fields.php';

/***
 * funciones que se cargan al activar el tema
 */

function cares_setup()
{

        //Menu de navegacion
        register_nav_menus(array(
                'menu_principal' => esc_html__('Menu Principal', 'wbccares')
        ));
}
add_action('after_setup_theme', 'cares_setup');

/**
 *  Agrega la clase 'links'  al menu principal
 */
function  cares_enlace_class($atts, $items, $args)
{

        if ($args->theme_location == 'menu_principal') {

                $atts['class'] = 'links'; //--> cuando estemos en las clases agregale links
        }
        return $atts;
}
add_filter('nav_menu_link_attributes', 'cares_enlace_class', 10, 3); //3--> tres argumentos que toma


function cares_agregrar_css_js()
{
        /*Styles del tema */
        wp_enqueue_style('materialize-css', get_template_directory_uri() . '/css/materialize.min.css');
        wp_enqueue_style('style', get_stylesheet_uri(), array('materialize-css'));

        /*Scripts del tema */
        wp_enqueue_script('materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('fontawesome-js', 'https://kit.fontawesome.com/97f6e04dbb.js', array('materialize-js'), '5.0', true);
        wp_enqueue_script('custome-js', get_template_directory_uri() . '/js/main.js', array('fontawesome-js'), '1.0', true);
        // wp_enqueue_script('video-js', get_template_directory_uri() . '/js/video.js', array('custome-js'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'cares_agregrar_css_js');


//Soporte imagenes destacadas
if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
}
