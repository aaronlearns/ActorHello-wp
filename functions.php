<?php

function actorhelloThemeSupport() {
    // Adds dynamic titling on pages.
    add_theme_support('title-tag');

}

add_action ('after_setup_theme', 'actorhelloThemeSupport');


function actorhelloMenus(){


    $locations = array(

        'primary' => 'Top primary navbar'

    );

    register_nav_menus($locations);
}

add_action ('init', 'actorhelloMenus');

// Injects stylesheets into the source code header.
function actorhelloRegisterStyles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('actorhello-styles', get_template_directory_uri() . "/style.css", array('actorhello-bootstrap'), $version, 'all');
    wp_enqueue_style('actorhello-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('actorhello-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', "actorhelloRegisterStyles" );

// Injects scripts into the footer.
function actorhelloRegisterScripts() {
    wp_enqueue_script('actorhello-FontAwesome', "https://kit.fontawesome.com/3742b8ef2f.js", array(), '1.?.?.', 'all', true);
    wp_enqueue_script('actorhello-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.1', 'all', true);
}

add_action ( 'wp_enqueue_scripts', 'actorhelloRegisterScripts');

add_action( 'init', 'wp_reset_postdata')

?>