<?php $contato = get_page_by_title('contato')->ID; ?>

<ul>
  <?php
  $contatoItem = get_field('contatos', $contato);
  if (isset($contatoItem)) { foreach ($contatoItem as $item) { ?>
		<li><a href="<?php echo $item['link_rede_social']; ?>" target="_blank"><img src="<?php echo $item['imagem_rede_social']; ?>" alt="<?php echo $item['texto_rede_social']; ?>"></a></li>
   <?php } } ?>
</ul>