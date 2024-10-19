<?php

add_action('cmb2_admin_init', 'cmb2_fields_paginasInternas');

function cmb2_fields_paginasInternas(){
  $cmb = new_cmb2_box([
    'id' => 'paginasInternas_box',
    'title' => 'Páginas Internas',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page_template',
      'value' => ['page-contato.php', 'page-portfolio.php', 'page-produtos.php', 'page-sobre.php'],
    ],
  ]);
  $cmb->add_field([
    'name' => 'Background Interno',
    'id' => 'background_interno',
    'type' => 'file',
    'options' => [
      'url' => false,
    ]
  ]);
  $cmb->add_field([
    'name' => 'Subtitulo',
    'id' => 'subtitulo',
    'type' => 'text',
  ]);
}

function cmb2_show_if_paginasInternas_template($display, $meta_box) {
  // Verifica se é o metabox correto
  if ('paginasInternas_box' !== $meta_box['id']) {
    return $display; // Se não for o metabox correto, mantém o valor original
  }

  // Verifica se o template da página atual é um dos especificados
  $allowed_templates = ['page-contato.php', 'page-portfolio.php', 'page-produtos.php', 'page-sobre.php'];
  if (in_array(get_page_template_slug(get_the_ID()), $allowed_templates)) {
    return true; // Exibe o metabox se o template for permitido
  }

  return false; // Não exibe nas outras páginas
}

add_filter('cmb2_show_on', 'cmb2_show_if_paginasInternas_template', 10, 2);

?>
