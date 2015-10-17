<?php
// Register Custom Post Type
function staff_members_post_type() {

	$labels = array(
		'name'                => _x( 'Staff Members', 'Post Type General Name', 'wpbootstrap' ),
		'singular_name'       => _x( 'Staff Member', 'Post Type Singular Name', 'wpbootstrap' ),
		'menu_name'           => __( 'Staff Members', 'wpbootstrap' ),
		'parent_item_colon'   => __( 'Parent Item:', 'wpbootstrap' ),
		'all_items'           => __( 'All Staff', 'wpbootstrap' ),
		'view_item'           => __( 'View Staff Member', 'wpbootstrap' ),
		'add_new_item'        => __( 'Add Staff Member', 'wpbootstrap' ),
		'add_new'             => __( 'Add Staff Member', 'wpbootstrap' ),
		'edit_item'           => __( 'Edit Staff Member', 'wpbootstrap' ),
		'update_item'         => __( 'Update Staff Member', 'wpbootstrap' ),
		'search_items'        => __( 'Search Staff', 'wpbootstrap' ),
		'not_found'           => __( 'Staff not found', 'wpbootstrap' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'wpbootstrap' ),
	);
	$rewrite = array(
		'slug'                => 'staff',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$capabilities = array(
		'edit_post'           => 'edit_staff',
		'read_post'           => 'read_post',
		'delete_post'         => 'delete_staff',
		'edit_posts'          => 'edit_staff',
		'edit_others_posts'   => 'edit_others_staff',
		'publish_posts'       => 'publish_staff',
		'read_private_posts'  => 'read_private_posts',
	);
	$args = array(
		'label'               => __( 'staff_members', 'wpbootstrap' ),
		'description'         => __( 'Staff Members', 'wpbootstrap' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'page-attributes', ),
		'taxonomies'          => array( 'department' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		//'capability_type'     => 'page',
		//'capabilities'        => $capabilities,
	);
	register_post_type( 'staff_members', $args );

}


// Hook into the 'init' action
add_action( 'init', 'staff_members_post_type', 0 );

?>