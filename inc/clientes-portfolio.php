<?php $portfolio = get_page_by_title('portfolio')->ID; ?>

<ul class="portfolio_lista rslides_portfolio">
	<?php 
	$portfolioItem = get_field('portfolio', $portfolio);
	if (isset($portfolioItem)) { foreach ($portfolioItem as $item) { ?>
					<li>
						<div class="grid-8"><img src="<?php echo $item['portfolio_imagem1']; ?>" alt="<?php echo $item['descricao_imagem1']; ?>"></div>
						<div class="grid-8"><img src="<?php echo $item['portfolio_imagem2']; ?>" alt="<?php echo $item['descricao_imagem2']; ?>"></div>
						<div class="grid-16"><img src="<?php echo $item['portfolio_imagem3']; ?>" alt="<?php echo $item['descricao_imagem3']; ?>"></div>
					</li>
	<?php } } ?>
				</ul>

				<?php if (!is_page('portfolio')){ ?>
				<div class="call">
					<p><?php the_field('chamada_portfolio', $portfolio); ?></p>
					<a href="/portfolio" class="btn">Portfólio</a>
				</div>
				<?php } ?>