<?php // Silence is golden

// /*------------------------------------*\
// 	Portfolio
// \*------------------------------------*/

if ( ! function_exists('webidia_portfolio') ) {

	// Register Custom Post Type
	function webidia_portfolio() {

		$labels = array(
			'name'                => _x( 'Portfolio', 'Post Type General Name', 'webidia' ),
			'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'webidia' ),
			'menu_name'           => __( 'Portfolio', 'webidia' ),
			'name_admin_bar'      => __( 'Portfolio', 'webidia' ),
			'parent_item_colon'   => __( 'Portfolio', 'webidia' ),
			'all_items'           => __( 'All Portfolio Items', 'webidia' ),
			'add_new_item'        => __( 'Add New Portfolio Item', 'webidia' ),
			'add_new'             => __( 'Add New', 'webidia' ),
			'new_item'            => __( 'New Portfolio Item', 'webidia' ),
			'edit_item'           => __( 'Edit Portfolio Item', 'webidia' ),
			'update_item'         => __( 'Update Portfolio Item', 'webidia' ),
			'view_item'           => __( 'View Portfolio Item', 'webidia' ),
			'search_items'        => __( 'Search Portfolio Item', 'webidia' ),
			'not_found'           => __( 'Nothing Found', 'webidia' ),
			'not_found_in_trash'  => __( 'Nothing Found', 'webidia' ),
		);
		$rewrite = array(
			'slug'                => 'portfolio',
			'with_front'          => true,
			'pages'               => true,
			'feeds'               => true,
		);
		$args = array(
			'label'               => __( 'Portfolio', 'webidia' ),
			'description'         => __( 'Showcase your best/latest work', 'webidia' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'revisions', ),
			'taxonomies'          => array( 'portfolio', 'portfolio' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-images-alt',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => 'Portfolio',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);
		register_post_type( 'webidia_portfolio', $args );

	}
	add_action( 'init', 'webidia_portfolio', 0 );

}