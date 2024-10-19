<?php

add_action('cmb2_admin_init', 'cmb2_fields_portfolio');

function cmb2_fields_portfolio(){
  $cmb = new_cmb2_box([
    'id' => 'portfolio_box',
    'title' => 'Portfolio',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page_template',
      'value' => 'page-portfolio.php',
    ],
  ]);

$portfolio = $cmb->add_field([
  'name' => 'Portfolio',
  'id' => 'portfolio',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
    'sortable' => false,
    'group_title' => 'Imagens',
    'add_button' => 'Adicionar Imagens',
    'remove_button' => 'Remover Imagens',
  ],
]);

$cmb->add_group_field($portfolio, [
  'name' => 'Imagem 1',
  'id' => 'portfolio_imagem1',
  'type' => 'file',
  'options' => [
    'url' => false,
  ]
]);

$cmb->add_group_field($portfolio, [
  'name' => 'Descrição Imagem 1',
  'id' => 'descricao_imagem1',
  'type' => 'text',
]);

$cmb->add_group_field($portfolio, [
  'name' => 'Imagem 2',
  'id' => 'portfolio_imagem2',
  'type' => 'file',
  'options' => [
    'url' => false,
  ]
]);

$cmb->add_group_field($portfolio, [
  'name' => 'Descrição Imagem 2',
  'id' => 'descricao_imagem2',
  'type' => 'text',
]);

$cmb->add_group_field($portfolio, [
  'name' => 'Imagem 3',
  'id' => 'portfolio_imagem3',
  'type' => 'file',
  'options' => [
    'url' => false,
  ]
]);

$cmb->add_group_field($portfolio, [
  'name' => 'Descrição Imagem 3',
  'id' => 'descricao_imagem3',
  'type' => 'text',
]);

$cmb->add_field([
  'name' => 'Chamada Portfolio',
  'id' => 'chamada_portfolio',
  'type' => 'text',
]);

$portfolioQuote = $cmb->add_field([
  'name' => 'Quotes',
  'id' => 'quotes',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
    'sortable' => true,
    'group_title' => 'Quote{#}',
    'add_button' => 'Adicionar Quotes',
    'remove_button' => 'Remover Quotes',
  ],
]);
$cmb->add_group_field($portfolioQuote,[
  'name' => 'Quote',
  'id' => 'quote',
  'type' => 'textarea_small',
]);
$cmb->add_group_field($portfolioQuote,[
  'name' => 'Nome Quote',
  'id' => 'nome_quote',
  'type' => 'text',
]);

}

function cmb2_show_if_portfolio_template($display, $meta_box) {
  if ('portfolio_box' !== $meta_box['id']) {
    return $display; // Verifica se é o box correto
  }

  // Verifica se o template da página é 'page-portfolio.php'
  if (get_page_template_slug(get_the_ID()) === 'page-portfolio.php') {
    return true; // Exibe apenas na página com o template correto
  }

  return false; // Não exibe nas outras páginas
}
add_filter('cmb2_show_on', 'cmb2_show_if_portfolio_template', 10, 2);
?>