<?php get_header(); ?>
<nav id="pickup_field">
	<ul class="bxslider">
		<li class="now">
			<img src="<?php echo get_template_directory_uri(); ?>/images/pickup1.jpg" alt="「企画展覧会。日本X写真。開催期間2015年8月28日より東京、大阪、福岡、名古屋、仙台巡業」" id="pickup1">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/pickup2.jpg" alt="全国から集まった写真、約200点展示" id="pickup2">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/pickup3.jpg" alt="壁に風景写真が3点掛けられている" id="pickup3">
		</li>
	</ul>
</nav>

<div class="contents">
	<main>
		<section class="topics">
			<h2>トピックス</h2>

			<ul>
				<li>
					<time datetime="2015-09-20">2015年09月20日</time>
					総入場者数が1万人を突破いたしました。
				</li>
				<li>
					<time datetime="2015-09-18">2015年09月18日</time>
					大阪会場で展覧会がスタートいたしました。
					たくさんの皆様のご来場をお待ちしております。
				</li>
				<li>
					<time datetime="2015-09-13">2015年09月13日</time>
					9月下旬に大阪会場で写真家5名によるギャラリートークを開催いたします。
					詳しい日程は決まり次第お知らせいたします。
				</li>
				<li>
					<time datetime="2015-09-10">2015年09月10日</time>
					東京会場は終了いたしました。
					たくさんの皆様のご来場ありがとうございました。
				</li>
			</ul>
		</section>
	</main>
<?php
	get_sidebar();
	get_footer();
?>
