<?php
/**
* CUSTOM POST TYPES
*/
add_action('init','create_post_type');
function create_post_type(){

	
	
	// Build array of custom post types
	$types = array(
		array(
			'post_type'	=>'fp_properties',
			'name'		=>'Properties',
			'slug'		=>'fp-properties',
			'attr' 		=>'page-attributes',
			'cfield'	=>'',
			'title'		=>'title',
			'excerpt'	=>'',
			'editor'	=>'editor',
			'thumb'		=>''
		)
	);	
	
	// Loop through array
	foreach ($types as $type){
		
		// Retrieve variables from array
		$name 		= $type['name'];
		$post_type	= $type['post_type'];
		$slug 		= $type['slug'];
		$page_attr 	= $type['attr'];
		$c_field	= $type['cfield'];
		$title		= $type['title'];
		$excerpt	= $type['excerpt'];
		$editor		= $type['editor'];
		$thumb		= $type['thumb'];
	
		// Set custom post type arguments
		$args = array(
			'has_archive' 		=> false,
			'hierarchical'		=> false,
			'labels' 			=> array(
				'add_new' 			=> __('Add New'),
				'add_new_item' 		=> __('Add New Post'),
				'all_items' 		=> $name,
				'edit_item'			=> __('Edit Post'),
				'name'				=> $name,
				'menu_name'			=> $name,
				'new_item'			=> __('New Post'),
				'not_found'			=> __('No posts found'),
				'not_found_in_trash'=> __('No posts found in Trash'),
				'search_items'		=> __('Search Posts'),
				'singular_name' 	=> __('Post'),
				'view_item'			=> __('View Post'),
			),
			'menu_icon' 		=> get_stylesheet_directory_uri().'/assets/icon_cpt.png',
			'menu_position' 	=> 100,
			'public' 			=> true,
			'query_var'			=> true,
			'show_in_admin_bar'	=> false,
			'show_ui'			=> true,
			'rewrite' 			=> array(
				'slug'				=> $slug,
				'with_front'		=> false
			),
			'show_in_nav_menus' => true,
			'show_in_menu'		=> 'other-content',
			'supports' 			=> array($title, $editor, $thumb, $excerpt, $page_attr, $c_field),
		
		);
		
		// Build custom post types
		register_post_type($post_type,$args);
	}
	
}

/**
* CUSTOM SUBMENU
*/
add_action('admin_menu', 'add_cpt_submenu');
function add_cpt_submenu() {
    add_menu_page('Other content','Other content',0,'other-content','cpt_submenu',get_home_url().'/wp-admin/images/custom-post-icon.png',9);}
?>