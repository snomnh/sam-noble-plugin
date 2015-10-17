<?php
// Register Staff Department Taxonomy
function staff_collection_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Department', 'department', 'wpbootstrap' ),
		'singular_name'              => _x( 'Department', 'department', 'wpbootstrap' ),
		'menu_name'                  => __( 'Department', 'wpbootstrap' ),
		'all_items'                  => __( 'All Departments', 'wpbootstrap' ),
		'parent_item'                => __( 'Parent Item', 'wpbootstrap' ),
		'parent_item_colon'          => __( 'Parent Item:', 'wpbootstrap' ),
		'new_item_name'              => __( 'New Department', 'wpbootstrap' ),
		'add_new_item'               => __( 'Add Department', 'wpbootstrap' ),
		'edit_item'                  => __( 'Edit Department', 'wpbootstrap' ),
		'update_item'                => __( 'Update Department', 'wpbootstrap' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'wpbootstrap' ),
		'search_items'               => __( 'Search Departments', 'wpbootstrap' ),
		'add_or_remove_items'        => __( 'Add or Remove Department', 'wpbootstrap' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wpbootstrap' ),
		'not_found'                  => __( 'Not Found', 'wpbootstrap' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'department', array( 'staff_members' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'staff_collection_taxonomy', 0 );

?>