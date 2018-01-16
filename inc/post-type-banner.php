<?php
function post_type_banner() {
	$labels = array(
		'name'                => _x( 'Banner', 'Post Type General Name', 'lakes-wood' ),
		'singular_name'       => _x( 'Banner', 'Post Type Singular Name', 'lakes-wood' ),
		'menu_name'           => __( 'Banner', 'lakes-wood' ),
		'name_admin_bar'      => __( 'Banner', 'lakes-wood' ),
		'parent_item_colon'   => __( 'Parent banner:', 'lakes-wood' ),
		'all_items'           => __( 'banner', 'lakes-wood' ),
		'add_new_item'        => __( 'Adicionar Novo', 'lakes-wood' ),
		'add_new'             => __( 'Adicionar Novo', 'lakes-wood' ),
		'new_item'            => __( 'Nova banner', 'lakes-wood' ),
		'edit_item'           => __( 'Editar banner', 'lakes-wood' ),
		'update_item'         => __( 'Atualizar banner', 'lakes-wood' ),
		'view_item'           => __( 'Visualizar banner', 'lakes-wood' ),
		'search_items'        => __( 'Buscar banner', 'lakes-wood' ),
		'not_found'           => __( 'Not found', 'lakes-wood' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'lakes-wood' ),
	);
	$args = array(
		'label'               => __( 'Banner', 'lakes-wood' ),
		'description'         => __( 'Banner', 'lakes-wood' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', 'editor' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'banner', $args );
}
// Hook into the 'init' action
add_action( 'init', 'post_type_banner', 0 );