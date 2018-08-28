<!DOCTYPE html>
<head>
<html <?php language_attributes(); ?>>
<meta charset="<?bloginfo('charset'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<h1>
			<a href="<?php echo home_url( '/' ); ?>">
				<?php
					if ( has_custom_logo() ) {
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
						$format  = '<img ';
						$format .= ' src="'    . $image[0] . '"';
						$format .= ' width="'  . $image[1] . '"';
						$format .= ' height="' . $image[2] . '"';
						$format .= ' alt="'    . get_bloginfo( 'name' ) . '">';
						echo $format;
					}
				?>
			</a>
		</h1>
	</header>
