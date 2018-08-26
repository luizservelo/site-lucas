<?php 

// Menu Bootstrap
require_once('_inc/bootstrap-menu.php');

register_nav_menus(array(
    'primary' => __( 'Main Menu', 'THEMENAME' ),
));

// Options Page - ACF PRO 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Opções do Tema',
		'menu_title'	=> 'Opções do Tema',
		'menu_slug' 	=> 'opcoes-do-tema',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'opcoes-do-tema',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Rodapé',
		'menu_title'	=> 'Rodapé',
		'parent_slug'	=> 'opcoes-do-tema',
	));
	
}

