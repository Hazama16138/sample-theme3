<?php get_header(); ?>
	<div class="contents">
	<main>
		<?php if (	have_posts() ): ?>
		<article>
			<?php
				the_post();
				the_title( '<h1>', '</h1>');
				the_content();
			?>
		</article>
		<?php endif; ?>
	</main>
<?
	get_sidebar();
	get_footer();
