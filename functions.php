<?php 

// FUNÇÕES PARA LIMPAR O HEADER
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


// HEADER E FOOTER MENU
acf_add_options_page(array(
	'page_title' 	=> 'Header e Footer',
	'menu_title'	=> 'Header e Footer',
	'menu_slug' 	=> 'header-footer',
	'capability'	=> 'edit_posts',
	'icon_url' => 'dashicons-align-center',
	'redirect'		=> false
));

// IMAGE GROUP
acf_add_options_page(array(
	'page_title' 	=> 'Components',
	'menu_title'	=> 'Components',
	'menu_slug' 	=> 'components',
	'capability'	=> 'edit_posts',
	'icon_url' => 'dashicons-format-gallery',
	'redirect'		=> false
));

?>