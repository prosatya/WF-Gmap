<?php // Silence is golden


/*------------------------------------*\
	FAQ
\*------------------------------------*/

if ( ! function_exists('webidia_faqs') ) {

// Register Custom Post Type
function webidia_faqs() {

	$labels = array(
		'name'                => _x( 'FAQs', 'FAQs', 'webidia' ),
		'singular_name'       => _x( 'FAQ', 'FAQ', 'webidia' ),
		'menu_name'           => __( 'FAQs', 'webidia' ),
		'name_admin_bar'      => __( 'FAQs', 'webidia' ),
		'parent_item_colon'   => __( 'FAQ', 'webidia' ),
		'all_items'           => __( 'All FAQs', 'webidia' ),
		'add_new_item'        => __( 'Add New FAQ', 'webidia' ),
		'add_new'             => __( 'Add New', 'webidia' ),
		'new_item'            => __( 'New FAQ', 'webidia' ),
		'edit_item'           => __( 'Edit FAQ', 'webidia' ),
		'update_item'         => __( 'Update FAQ', 'webidia' ),
		'view_item'           => __( 'View FAQ', 'webidia' ),
		'search_items'        => __( 'Search FAQ', 'webidia' ),
		'not_found'           => __( 'Nothing Found', 'webidia' ),
		'not_found_in_trash'  => __( 'Nothing Found', 'webidia' ),
	);
	$rewrite = array(
		'slug'                => 'faqs',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'FAQ', 'webidia' ),
		'description'         => __( 'Display your most frequently asked questions', 'webidia' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'revisions', ),
		'taxonomies'          => array( 'faq', 'faqs' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-editor-help',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'FAQ',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'webidia_faq', $args );

}
add_action( 'init', 'webidia_faqs', 0 );

}