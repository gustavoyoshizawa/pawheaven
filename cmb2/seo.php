<?php

add_action('cmb2_admin_init', 'cmb2_fields_seo');

function cmb2_fields_seo(){
  $cmb = new_cmb2_box([
    'id' => 'seo_box',
    'title' => 'SEO',
    'object_types' => ['page', 'posts', 'produtos'],
  ]);

  $cmb->add_field([
    'name' => 'Title SEO',
    'id' => 'title_seo',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Description SEO',
    'id' => 'description_seo',
    'type' => 'textarea_small',
  ]);
}

?>