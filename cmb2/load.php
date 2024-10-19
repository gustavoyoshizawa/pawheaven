<?php

// Funções de ajuda
function get_field($key, $page_id = 0) {
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0) {
  echo get_field($key, $page_id);
}

// carrega os campos personalizados do CMB2
require_once get_template_directory() . '/cmb2/paginas_internas.php';
require_once get_template_directory() . '/cmb2/contato.php';
require_once get_template_directory() . '/cmb2/home.php';
require_once get_template_directory() . '/cmb2/portfolio.php';
require_once get_template_directory() . '/cmb2/produtos.php';
require_once get_template_directory() . '/cmb2/sobre.php';
require_once get_template_directory() . '/cmb2/single_produtos.php';
require_once get_template_directory() . '/cmb2/seo.php';

?>