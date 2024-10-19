<?php
// Template Name: Portfolio
get_header(); ?>
<?php $portfolio = get_page_by_title('portfolio')->ID; ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>


		<section class="container animar-interno">
			<ul class="rslides">
				<?php
				$portfolioQuote = get_field('quotes', $portfolio);
				if (isset($portfolioQuote)) { foreach ($portfolioQuote as $quote) { ?>
				<li>
					<blockquote class="quote_clientes">
						<p><?php echo $quote['quote']; ?></p>
						<cite><?php echo $quote['nome_quote']; ?></cite>
					</blockquote>
				</li>
				<?php } } ?>

			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
				<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
			</div>
		</section>
		
		<?php endwhile; else: endif; ?>


		<?php get_footer(); ?>
