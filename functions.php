<?php
add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css', false, '1.0', 'all' );
}



function project_post_type() {
	$labels = array(
	 'name'                => _x( 'project', 'Post Type General Name', 'acsweb' ),
	 'singular_name'       => _x( 'project', 'Post Type Singular Name', 'acsweb' ),
	 'menu_name'           => __( 'project', 'acsweb' ),
	 'parent_item_colon'   => __( 'Parent project', 'acsweb' ),
	 'all_items'           => __( 'All project', 'acsweb' ),
	 'view_item'           => __( 'View project', 'acsweb' ),
	 'add_new_item'        => __( 'Add New project', 'acsweb' ),
	 'add_new'             => __( 'Add New', 'acsweb' ),
	 'edit_item'           => __( 'Edit project', 'acsweb' ),
	 'update_item'         => __( 'Update project', 'acsweb' ),
	 'search_items'        => __( 'Search project', 'acsweb' ),
	 'not_found'           => __( 'Not Found', 'acsweb' ),
	 'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),
	);
	$args = array(
	 'label'               => __( 'project', 'acsweb' ),
	 'description'         => __( 'project news and reviews', 'acsweb' ),
	 'labels'              => $labels,
	 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
	 'taxonomies'          => array( 'genres' ), 
	 'hierarchical'        => false,
	 'public'              => true,
	 'show_ui'             => true,
	 'show_in_menu'        => true,
	 'show_in_nav_menus'   => true,
	 'show_in_admin_bar'   => true,
   
	 'menu_position'       => 5,
	 'menu_icon'           => 'dashicons-admin-site-alt3',
	 'can_export'          => true,
	 'has_archive'         => true,
	 'exclude_from_search' => false,
	 'publicly_queryable'  => true,
	 'capability_type'     => 'page',
	 'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'project', $args );
   }
   add_action( 'init', 'project_post_type', 0 );