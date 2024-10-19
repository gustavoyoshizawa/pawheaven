<?php

add_action('cmb2_admin_init', 'cmb2_fields_sobre');

function cmb2_fields_sobre(){
  $cmb = new_cmb2_box([
    'id' => 'sobre_box',
    'title' => 'Sobre',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page_template',
      'value' => 'page-sobre.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Logo PawHeaven',
    'id' => 'logo_pawheaven',
    'type' => 'file',
    'options' => [
      'url' => false,
    ]
  ]);

  $cmb->add_field([
    'name' => 'Título Qualidade',
    'id' => 'titulo_qualidade',
    'type' => 'text',
  ]);

  $qualidades = $cmb->add_field([
    'name' => 'Qualidades',
    'id' => 'qualidades',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Qualidade',
      'remove_button' => 'Remover Qualidade',
      'group_title' => 'Qualidade {#}',
    ],
  ]);

  $cmb->add_group_field($qualidades, [
    'name' => 'Titulo Item Qualidade',
    'id' => 'titulo_item_qualidade',
    'type' => 'text',
  ]);

  $cmb->add_group_field($qualidades, [
    'name' => 'Descrição Item Qualidade',
    'id' => 'descricao_item_qualidade',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Chamada Sobre',
    'id' => 'chamada_sobre',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Missão',
    'id' => 'missao',
    'type' => 'wysiwyg',
  ]);
  $cmb->add_field([
    'name' => 'Valores',
    'id' => 'valores',
    'type' => 'wysiwyg',
  ]);
  $cmb->add_field([
    'name' => 'Imagem Equipe',
    'id' => 'imagem_equipe',
    'type' => 'file',
    'options' => [
      'url' => false,
    ]
  ]);
}


function cmb2_show_if_sobre_template($display, $meta_box) {
  if ('sobre_box' !== $meta_box['id']) {
    return $display; // Verifica se é o box correto
  }

  // Verifica se o template da página é 'page-sobre.php'
  if (get_page_template_slug(get_the_ID()) === 'page-sobre.php') {
    return true; // Exibe apenas na página com o template correto
  }

  return false; // Não exibe nas outras páginas
}
add_filter('cmb2_show_on', 'cmb2_show_if_sobre_template', 10, 2);

?>
