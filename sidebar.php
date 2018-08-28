<section class="contents-sub">
	<nav>
		<figure>
			<a href="gallery.html">
				<img src="<?php echo get_template_directory_uri(); ?>/images/btn_gallery.jpg" width="200" height="114" alt="作品紹介">
			</a>
		</figure>

		<figure>
			<a href="tickets.html">
				<img src="<?php echo get_template_directory_uri(); ?>/images/btn_tickets.jpg" width="200" height="84" alt="前売り券申し込み">
			</a>
			<figcaption>
				前売り券好評発売中
			</figcaption>
		</figure>
	</nav>
	<?php if(is_active_sidebar('sidebar-1')): ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php endif; ?>
</section>
