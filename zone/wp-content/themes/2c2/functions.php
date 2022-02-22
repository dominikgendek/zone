<?php


function load_scripts()
{
	wp_enqueue_style('style', get_template_directory_uri() . '/scss/style.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl-carousel.css');
	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);
	wp_enqueue_script('carousel', get_stylesheet_directory_uri() . '/js/owl-carousel.js');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function template_config()
{

	register_nav_menus(
		array(
			'my_main_menu' => __('Main Menu', 'themewp'),
		)
	);

	$args = array(
		'height' => 225,
		'width' => 1920
	);
	add_theme_support('custom-header', $args);
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('video', 'image'));
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array(
		'height' => 46,
		'width' => 240
	));

	$textdomain = 'c2c';
	load_theme_textdomain($textdomain, get_template_directory() . '/languages/');
}
add_action('after_setup_theme', 'template_config', 0);

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Pola Ogólne',
		'menu_title'	=> 'Pola Ogólne',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Pola Nagłówka',
		'menu_title'	=> 'Nagłówek',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Pola Stopki',
		'menu_title'	=> 'Stopka',
		'parent_slug'	=> 'theme-general-settings',
	));
}


add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

	// Check function exists.
	if (function_exists('acf_register_block_type')) {

		acf_register_block_type(array(
			'name'              => 'Sekcja Główna',
			'title'             => __('Sekcja Główna'),
			'description'       => __('Sekcja Główna'),
			'render_template'   => 'template-parts/blocks/main_section/main_section.php',
			'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/main_section/main_section.css',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array('main_section', 'quote'),
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));

		acf_register_block_type(array(
			'name'              => 'Tekst ze zdjęciem',
			'title'             => __('Tekst ze zdjęciem'),
			'description'       => __('Tekst ze zdjęciem'),
			'render_template'   => 'template-parts/blocks/text_img/text_img.php',
			'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/text_img/text_img.css',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array('text_img', 'quote'),
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));

		acf_register_block_type(array(
			'name'              => 'Tekst z formularzemm',
			'title'             => __('Tekst z formularzem'),
			'description'       => __('Tekst z formularzem'),
			'render_template'   => 'template-parts/blocks/text_form/text_form.php',
			'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/text_form/text_form.css',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array('text_form', 'quote'),
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));

		acf_register_block_type(array(
			'name'              => 'Projekty',
			'title'             => __('Projekty'),
			'description'       => __('Projekty'),
			'render_template'   => 'template-parts/blocks/projects/projects.php',
			'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/projects/projects.css',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array('projects', 'quote')
		));

		acf_register_block_type(array(
			'name'              => 'Pracownicy',
			'title'             => __('Pracownicy'),
			'description'       => __('Pracownicy'),
			'render_template'   => 'template-parts/blocks/personel/personel.php',
			'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/personel/personel.css',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array('personel', 'quote')
		));

		acf_register_block_type(array(
			'name'              => 'Partnerzy',
			'title'             => __('Partnerzy'),
			'description'       => __('Partnerzy'),
			'render_template'   => 'template-parts/blocks/partners/partners.php',
			'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/partners/partners.css',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array('partners', 'quote')
		));

		acf_register_block_type(array(
			'name'              => 'Kafelki',
			'title'             => __('Kafelki'),
			'description'       => __('Kafelki'),
			'render_template'   => 'template-parts/blocks/tiles/tiles.php',
			'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/tiles/tiles.css',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array('tiles', 'quote'),
		));
	}
}

function gb_gutenberg_admin_styles()
{
	echo '
        <style>
            /* Main column width */
            .wp-block {
                max-width: 95%;
            }
 
            /* Width of "wide" blocks */
            .wp-block[data-align="wide"] {
                max-width: 95%;
            }
 
            /* Width of "full-wide" blocks */
            .wp-block[data-align="full"] {
                max-width: 95%;
            }	
        </style>
    ';
}

add_action('admin_head', 'gb_gutenberg_admin_styles');
