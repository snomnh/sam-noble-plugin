<?php
// Register Position Post Type
function positions_posts() {

	$labels = array(
		'name'                => _x( 'Positions', 'Post Type General Name', 'wpbootstrap' ),
		'singular_name'       => _x( 'Position', 'Post Type Singular Name', 'wpbootstrap' ),
		'menu_name'           => __( 'Positions', 'wpbootstrap' ),
		'parent_item_colon'   => __( 'Parent Item:', 'wpbootstrap' ),
		'all_items'           => __( 'All Positions', 'wpbootstrap' ),
		'view_item'           => __( 'View Position', 'wpbootstrap' ),
		'add_new_item'        => __( 'Add New Position', 'wpbootstrap' ),
		'add_new'             => __( 'Add New', 'wpbootstrap' ),
		'edit_item'           => __( 'Edit Position', 'wpbootstrap' ),
		'update_item'         => __( 'Update Position', 'wpbootstrap' ),
		'search_items'        => __( 'Search Positions', 'wpbootstrap' ),
		'not_found'           => __( 'Not found', 'wpbootstrap' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'wpbootstrap' ),
	);
	$args = array(
		'label'               => __( 'position_post', 'wpbootstrap' ),
		'description'         => __( 'Positions including paid, volunteer and internships', 'wpbootstrap' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-clipboard',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'position_post', $args );

}

// Hook into the 'init' action
add_action( 'init', 'positions_posts', 0 );
?>