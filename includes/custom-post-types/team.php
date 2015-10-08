<?php // Silence is golden

// /*------------------------------------*\
// 	Team
// \*------------------------------------*/

if ( ! function_exists('webidia_team') ) {

	// Register Custom Post Type
	function webidia_team() {

		$labels = array(
			'name'                => _x( 'Team', 'Team', 'webidia' ),
			'singular_name'       => _x( 'Team', 'Team', 'webidia' ),
			'menu_name'           => __( 'Team', 'webidia' ),
			'name_admin_bar'      => __( 'Team', 'webidia' ),
			'parent_item_colon'   => __( 'Team', 'webidia' ),
			'all_items'           => __( 'All Team Members', 'webidia' ),
			'add_new_item'        => __( 'Add New Team Member', 'webidia' ),
			'add_new'             => __( 'Add New', 'webidia' ),
			'new_item'            => __( 'New Team Member', 'webidia' ),
			'edit_item'           => __( 'Edit Team Member', 'webidia' ),
			'update_item'         => __( 'Update Team Member', 'webidia' ),
			'view_item'           => __( 'View Team Member', 'webidia' ),
			'search_items'        => __( 'Search Team Member', 'webidia' ),
			'not_found'           => __( 'Nothing Found', 'webidia' ),
			'not_found_in_trash'  => __( 'Nothing Found', 'webidia' ),
		);
		$rewrite = array(
			'slug'                => 'team',
			'with_front'          => true,
			'pages'               => true,
			'feeds'               => true,
		);
		$args = array(
			'label'               => __( 'Team', 'webidia' ),
			'description'         => __( 'Manage members of your team', 'webidia' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'revisions', ),
			'taxonomies'          => array( 'team', 'team' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-groups',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => 'Team',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);
		register_post_type( 'webidia_team', $args );

	}
	add_action( 'init', 'webidia_team', 0 );
}