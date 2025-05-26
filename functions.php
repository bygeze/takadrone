<?php
// Cargar hoja de estilos principal
function mi_tema_enqueue_estilos() {
  wp_enqueue_style('mi-tema-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_estilos');

function mi_tema_registrar_estilos() {
    wp_register_style(
        'portfolio-display',
        get_template_directory_uri() . '/css/portfolio-display.css',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'mi_tema_registrar_estilos');

function mi_cargar_bootstrap() {
    $base_url = get_stylesheet_directory_uri() . '/lib/bootstrap/';

    // CSS
    wp_enqueue_style('bootstrap-css', $base_url . 'bootstrap.min.css', array(), '5.3.3'); // Cambia versión si quieres

    // JS - jQuery como dependencia para Bootstrap 4, para Bootstrap 5 no depende de jQuery
    wp_enqueue_script('bootstrap-js', $base_url . 'bootstrap.min.js', array(), '5.3.3', true);
}
add_action('wp_enqueue_scripts', 'mi_cargar_bootstrap');

?>

