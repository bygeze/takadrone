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

?>

