<?php

add_action('cmb2_admin_init', 'cmb2_fields_produtos');

function cmb2_fields_produtos(){
  $cmb = new_cmb2_box ([
    'id' => 'produtos_box',
    'title' => 'Produtos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => ['page-produtos.php'],
    ],
  ]);
  $cmb->add_field([
    'name' => 'Itens Orçamento',
    'id' => 'itens_orcamento',
    'type' => 'wysiwyg',
  ]);
}

?>