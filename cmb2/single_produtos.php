<?php

add_action('cmb2_admin_init', 'cmb2_fields_single_produtos');

function cmb2_fields_single_produtos() {
  $cmb = new_cmb2_box([
    'id' => 'single_produtos_box',
    'title' => 'Single Produtos',
    'object_types' => ['produtos'],
  ]);

  $cmb->add_field([
    'name' => 'Foto Produto 1',
    'id' => 'foto_produto1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Icone Produto',
    'id' => 'icone_produto',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Foto Produto 2',
    'id' => 'foto_produto2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Resumo Produto',
    'id' => 'resumo_produto',
    'type' => 'text',
  ]);
  
}

?>