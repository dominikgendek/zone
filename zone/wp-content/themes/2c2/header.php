<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<?php $cta = get_field('cta', 'options'); ?>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="header__wrapper">
			<?php $logo_id = get_theme_mod('custom_logo'); ?>
			<a class="header__logo" href="<?php echo get_home_url(); ?>"> <?php echo wp_get_attachment_image($logo_id, 'full'); ?></a>
			<button class="header__toggler">
				<span></span><span></span><span></span>
			</button>
			<?php wp_nav_menu(array('theme_location' => 'my_main_menu', 'container' => 'nav', 'container_class' => 'header__nav', 'menu_class'   => 'header__nav-menu',)); ?>
			<a class="cta-link" href="<?php echo $cta['url']; ?>"><?php echo $cta['title']; ?></a>
		</div>
	</header>