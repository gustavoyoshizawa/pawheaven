<?php

add_action('cmb2_admin_init', 'cmb2_fields_contato');

function cmb2_fields_contato(){
  $cmb = new_cmb2_box ([
    'id' => 'contato_box',
    'title' => 'Contato',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page_template',
      'value' => ['page-contato.php'],
    ],
  ]);
  $cmb->add_field([
    'name' => 'Telefone',
    'id' => 'telefone',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => 'E-mail',
    'id' => 'email',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => 'Endereço 1',
    'id' => 'endereco1',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => 'Endereço 2',
    'id' => 'endereco2',
    'type' => 'text'
  ]);

  $contato = $cmb->add_field([
  'name' => 'Contatos',
  'id' => 'contatos',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
    'sortable' => true,
    'group_title' => 'Rede Social {#}',
    'add_button' => 'Adicionar Rede Social',
    'remove_button' => 'Remover Rede Social',
  ],
]);
$cmb->add_group_field($contato,[
  'name' => 'Link Rede Social',
  'id' => 'link_rede_social',
  'type' => 'text',
]);
$cmb->add_group_field($contato,[
  'name' => 'imagem Rede Social',
  'id' => 'imagem_rede_social',
  'type' => 'file',
  'options' => [
    'url' => false,
  ]
]);
$cmb->add_group_field($contato,[
  'name' => 'Texto Rede Social',
  'id' => 'texto_rede_social',
  'type' => 'text',
]);

$cmb->add_field([
  'name' => 'Link Mapa',
  'id' => 'link_mapa',
  'type' => 'text'
]);
$cmb->add_field([
  'name' => 'Imagem Mapa',
  'id' => 'imagem_mapa',
  'type' => 'file',
  'options' => [
    'url' => false,
  ]
]);
$cmb->add_field([
  'name' => 'Endereço Mapa',
  'id' => 'endereco_mapa',
  'type' => 'text',

]);
$cmb->add_field([
  'name' => 'Background Footer',
  'id' => 'background_footer',
  'type' => 'file',
  'options' => [
    'url' => false,
  ]
]);
$cmb->add_field([
  'name' => 'Frase Footer',
  'id' => 'frase_footer',
  'type' => 'textarea_small',
]);
$cmb->add_field([
  'name' => 'Autor Footer',
  'id' => 'autor_footer',
  'type' => 'text',
]);
$cmb->add_field([
  'name' => 'Resumo História',
  'id' => 'footer_historia',
  'type' => 'textarea_small',
]);
}

function cmb2_show_if_contato_template($display, $meta_box) {
  if ('contato_box' !== $meta_box['id']) {
    return $display; // Verifica se é o box correto
  }

  // Verifica se o template da página é 'page-contato.php'
  if (get_page_template_slug(get_the_ID()) === 'page-contato.php') {
    return true; // Exibe apenas na página com o template correto
  }

  return false; // Não exibe nas outras páginas
}
add_filter('cmb2_show_on', 'cmb2_show_if_contato_template', 10, 2);

?>