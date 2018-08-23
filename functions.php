<?php
	function theme_setup() {
		add_theme_support('title-tag');
		add_theme_support('post_thumbnails');

		$args = array(
		'height'      => 0,
		'width'       => 0,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' )
		);
		add_theme_support( 'custom-logo', $args);

		register_nav_menus( array(
			'global' => 'Global Menu'
		));
	}

	add_action( 'after_setup_theme', 'theme_setup' );

	/**
 *ウィジェット設定
 * @version 1.0.0
 * @since   1.0.0
 * @author  y.hazama
*/

function theme_widgets_init() {
	register_sidebar(
		array(
			'name' => 'サイドバー',
			'id' => 'sidebar-1',
			'description'   => '画面の右にあるサイドバー',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>'
		)
	);
}
add_action( 'widgets_init', 'theme_widgets_init' );
?>
