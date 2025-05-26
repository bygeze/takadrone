<?php
// Cargar hoja de estilos principal
function mi_tema_enqueue_estilos() {
  wp_enqueue_style('mi-tema-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_estilos');

?>