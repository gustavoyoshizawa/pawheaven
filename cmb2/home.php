<?php

add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home(){
  $cmb = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Home',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page_template',
      'value' => ['page-home.php'],
    ],
  ]);

  $cmb->add_field([
    'name' => 'Titulo Introdução',
    'id' => 'titulo_introducao',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => 'Quote Introdução',
    'id' => 'quote_introducao',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => 'Autor Introdução',
    'id' => 'autor_introducao',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => 'Background Home',
    'id' => 'background_home',
    'type' => 'file',
    'options' => [
      'url' => false,
      ]
    ]);
    $cmb->add_field([
      'name' => 'Chamada Produtos',
      'id' => 'chamada_produtos',
      'type' => 'text'
    ]);
}

function cmb2_show_if_home_template($display, $meta_box) {
  if ('home_box' !== $meta_box['id']) {
    return $display; // Verifica se é o box correto
  }

  // Verifica se o template da página é 'page-home.php'
  if (get_page_template_slug(get_the_ID()) === 'page-home.php') {
    return true; // Exibe apenas na página com o template correto
  }

  return false; // Não exibe nas outras páginas
}
add_filter('cmb2_show_on', 'cmb2_show_if_home_template', 10, 2);

?>