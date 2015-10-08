<?php // Silence is golden

/*------------------------------------*\
	Gallery
\*------------------------------------*/

if ( ! function_exists('webidia_faqs') ) {

// Register Custom Post Type
function webidia_faqs() {

	$labels = array(
		'name'                => _x( 'Gallery', 'Gallery', 'webidia' ),
		'singular_name'       => _x( 'Gallery', 'Gallery', 'webidia' ),
		'menu_name'           => __( 'Gallery', 'webidia' ),
		'name_admin_bar'      => __( 'Gallery', 'webidia' ),
		'parent_item_colon'   => __( 'Gallery', 'webidia' ),
		'all_items'           => __( 'All Gallery Items', 'webidia' ),
		'add_new_item'        => __( 'Add New Gallery Item', 'webidia' ),
		'add_new'             => __( 'Add New', 'webidia' ),
		'new_item'            => __( 'New Gallery Item', 'webidia' ),
		'edit_item'           => __( 'Edit Gallery Item', 'webidia' ),
		'update_item'         => __( 'Update Gallery Item', 'webidia' ),
		'view_item'           => __( 'View Gallery Item', 'webidia' ),
		'search_items'        => __( 'Search Gallery', 'webidia' ),
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
		'label'               => __( 'Gallery', 'webidia' ),
		'description'         => __( 'Showcase images in the image gallery', 'webidia' ),
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
		'has_archive'         => 'Gallery',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'webidia_gallery', $args );

}
add_action( 'init', 'webidia_faqs', 0 );

}