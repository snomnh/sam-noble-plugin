<?php
// Register Position Type Taxonomy
function positions_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Position Types', 'Taxonomy General Name', 'wpbootstrap' ),
		'singular_name'              => _x( 'Position Type', 'Taxonomy Singular Name', 'wpbootstrap' ),
		'menu_name'                  => __( 'Position Type', 'wpbootstrap' ),
		'all_items'                  => __( 'All Position Types', 'wpbootstrap' ),
		'parent_item'                => __( 'Parent Item', 'wpbootstrap' ),
		'parent_item_colon'          => __( 'Parent Item:', 'wpbootstrap' ),
		'new_item_name'              => __( 'New Position Type', 'wpbootstrap' ),
		'add_new_item'               => __( 'Add New Position Type', 'wpbootstrap' ),
		'edit_item'                  => __( 'Edit Position Type', 'wpbootstrap' ),
		'update_item'                => __( 'Update Position Type', 'wpbootstrap' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'wpbootstrap' ),
		'search_items'               => __( 'Search Position Types', 'wpbootstrap' ),
		'add_or_remove_items'        => __( 'Add or remove position types', 'wpbootstrap' ),
		'choose_from_most_used'      => __( 'Choose from the most used position types', 'wpbootstrap' ),
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
	register_taxonomy( 'position_type', array( 'position_post' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'positions_taxonomy', 0 );


// Register Position Department Taxonomy
function position_department() {

	$labels = array(
		'name'                       => _x( 'Position Departments', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Position Department', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Position Departments', 'text_domain' ),
		'all_items'                  => __( 'All Position Departments', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Position Department', 'text_domain' ),
		'add_new_item'               => __( 'Add New Position Department', 'text_domain' ),
		'edit_item'                  => __( 'Edit Position Department', 'text_domain' ),
		'update_item'                => __( 'Update Position Department', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               => __( 'Search Position Departments', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove position department', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used position department', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
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
	register_taxonomy( 'position_department', array( 'position_post' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'position_department', 0 );
?>