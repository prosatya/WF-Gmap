<?php

class WF_Mega_Menu {
	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	function __construct() {
		// add new fields via hook
		add_action( 'wp_nav_menu_item_custom_fields', array( $this, 'wf_mega_menu_add_custom_fields' ), 10, 5 );

		// add custom menu fields to menu
		add_filter( 'wp_setup_nav_menu_item', array( $this, 'wf_mega_menu_add_custom_nav_fields' ) );

		// save menu custom fields
		add_action( 'wp_update_nav_menu_item', array( $this, 'wf_mega_menu_update_custom_nav_fields' ), 10, 3 );

		// edit menu walker
		add_filter( 'wp_edit_nav_menu_walker', array( $this, 'wf_mega_menu_edit_walker' ), 10, 2 );

	}

	/**
	 * Add custom fields to edit menu page
	 *
	 * @access      public
	 * @since       1.0
	 * @return      void
	 */
	function wf_mega_menu_add_custom_fields( $item_id, $item, $depth, $args ) {
		?>
		<div class="wf-menu-options">

			<?php if ( $depth == 0 ) { ?>

				<h4>Mega Menu Options</h4>
				<p class="field-custom description description-wide">
					<label for="edit-menu-megamenu-<?php echo esc_attr($item_id); ?>">
						<?php _e( 'Enable Mega Menu', 'webidia' ); ?>
						<input type="checkbox" id="edit-menu-megamenu-<?php echo esc_attr($item_id); ?>"
							   class="edit-menu-item-custom" id="menu-megamenu[<?php echo esc_attr($item_id); ?>]"
							   name="menu-megamenu[<?php echo esc_attr($item_id); ?>]"
							   value="1" <?php echo checked( ! empty( $item->megamenu ), 1, false ); ?> />
					</label>
				</p>
				<p class="field-custom description description-wide">
					<label for="edit-menu-megamenucols-<?php echo esc_attr($item_id); ?>">
						<?php _e( 'Mega Menu Columns', 'webidia' ); ?>
					</label>
					<select class="fat" id="edit-menu-megamenucols-<?php echo esc_attr($item_id); ?>"
							name="menu-megamenucols[<?php echo esc_attr($item_id); ?>]">
						<?php for ( $i = 1; $i <= 6; $i ++ ) {
							if ( $i == $item->megamenucols ) {
								echo '<option selected="selected">' . $i . '</option>';
							} else {
								echo '<option>' . $i . '</option>';
							}
						}
						?>
					</select>
				</p>
				<p class="field-custom description description-wide">
					<label
						for="edit-menu-is-naturalwidth-<?php echo esc_attr($item_id); ?>"><?php _e( 'Natural Width Mega Menu', 'webidia' ); ?>
						<input type="checkbox" id="edit-menu-is-naturalwidth-<?php echo esc_attr($item_id); ?>"
							   class="edit-menu-item-custom" id="menu-is-naturalwidth[<?php echo esc_attr($item_id); ?>]"
							   name="menu-is-naturalwidth[<?php echo esc_attr($item_id); ?>]"
							   value="1" <?php echo checked( ! empty( $item->isnaturalwidth ), 1, false ); ?> />
					</label>
				</p>
				<p class="field-custom description description-wide">
					<label for="edit-menu-is-altstyle-<?php echo esc_attr($item_id); ?>">
						<?php _e( 'Alternative Style Mega Menu', 'webidia' ); ?>
						<input type="checkbox" id="edit-menu-is-altstyle-<?php echo esc_attr($item_id); ?>"
							   class="edit-menu-item-custom" id="menu-is-altstyle[<?php echo esc_attr($item_id); ?>]"
							   name="menu-is-altstyle[<?php echo esc_attr($item_id); ?>]"
							   value="1" <?php echo checked( ! empty( $item->altstyle ), 1, false ); ?> />
					</label>
				</p>
				<p class="field-custom description description-wide">
					<label for="edit-menu-hideheadings-<?php echo esc_attr($item_id); ?>">
						<?php _e( 'Hide Mega Menu Headings', 'webidia' ); ?>
						<input type="checkbox" id="edit-menu-hideheadings-<?php echo esc_attr($item_id); ?>"
							   class="edit-menu-item-custom" id="menu-hideheadings[<?php echo esc_attr($item_id); ?>]"
							   name="menu-hideheadings[<?php echo esc_attr($item_id); ?>]"
							   value="1" <?php echo checked( ! empty( $item->hideheadings ), 1, false ); ?> />
					</label>
				</p>

				<p class="field-custom description description-wide" style="height: 10px;"></p>

			<?php } ?>

			<h4>Custom Menu Options</h4>

			<p class="field-custom description description-wide">
				<label for="edit-menu-loggedinvis-<?php echo esc_attr($item_id); ?>">
					<?php _e( 'Visible only when logged in', 'webidia' ); ?>
					<input type="checkbox" id="edit-menu-loggedinvis-<?php echo esc_attr($item_id); ?>"
						   class="edit-menu-item-custom" id="menu-loggedinvis[<?php echo esc_attr($item_id); ?>]"
						   name="menu-loggedinvis[<?php echo esc_attr($item_id); ?>]"
						   value="1" <?php echo checked( ! empty( $item->loggedinvis ), 1, false ); ?> />
				</label>
			</p>

			<p class="field-custom description description-wide">
				<label for="edit-menu-loggedoutvis-<?php echo esc_attr($item_id); ?>">
					<?php _e( 'Visible only when logged out', 'webidia' ); ?>
					<input type="checkbox" id="edit-menu-loggedoutvis-<?php echo esc_attr($item_id); ?>"
						   class="edit-menu-item-custom" id="menu-loggedoutvis[<?php echo esc_attr($item_id); ?>]"
						   name="menu-loggedoutvis[<?php echo esc_attr($item_id); ?>]"
						   value="1" <?php echo checked( ! empty( $item->loggedoutvis ), 1, false ); ?> />
				</label>
			</p>

			<?php if ( $depth == 0 ) { ?>

				<?php if ( false && webidia_theme_supports('menu-new-badge') ) { ?>

					<p class="field-custom description description-wide">
						<label for="edit-menu-newbadge-<?php echo esc_attr($item_id); ?>">
							<?php _e( 'New Badge', 'webidia' ); ?>
							<input type="checkbox" id="edit-menu-newbadge-<?php echo esc_attr($item_id); ?>"
								   class="edit-menu-item-custom" id="menu-newbadge[<?php echo esc_attr($item_id); ?>]"
								   name="menu-newbadge[<?php echo esc_attr($item_id); ?>]"
								   value="1" <?php echo checked( ! empty( $item->newbadge ), 1, false ); ?> />
						</label>
					</p>

				<?php } ?>

				<p class="field-custom description description-wide">
					<label for="edit-menu-menuitembtn-<?php echo esc_attr($item_id); ?>">
						<?php _e( 'Button Style Menu Item', 'webidia' ); ?>
						<input type="checkbox" id="edit-menu-menuitembtn-<?php echo esc_attr($item_id); ?>"
							   class="edit-menu-item-custom" id="menu-menuitembtn[<?php echo esc_attr($item_id); ?>]"
							   name="menu-menuitembtn[<?php echo esc_attr($item_id); ?>]"
							   value="1" <?php echo checked( ! empty( $item->menuitembtn ), 1, false ); ?> />
					</label>
				</p>

			<?php } ?>

			<p class="field-custom description description-thin"
			   style="height: auto;overflow: hidden;width: 50%;float: none;">
				<label for="edit-menu-item-icon-<?php echo esc_attr($item_id); ?>">
					<?php _e( 'Menu Icon (Gizmo / Font Awesome)', 'webidia' ); ?>
					<input type="text" id="edit-menu-item-icon-<?php echo esc_attr($item_id); ?>"
						   class="widefat edit-menu-item-custom" name="menu-item-icon[<?php echo esc_attr($item_id); ?>]"
						   placeholder="ss-star" value="<?php echo esc_attr( $item->menuicon ); ?>"/>
				</label>
			</p>

			<?php if ( $depth == 1 ) { ?>

				<h4>Mega Menu Column Options</h4>

				<p class="field-custom description description-wide">
					<label for="edit-menu-megatitle-<?php echo esc_attr($item_id); ?>">
					<?php _e( 'Mega Menu No Link Title', 'webidia' ); ?>
						<input type="checkbox" id="edit-menu-megatitle-<?php echo esc_attr($item_id); ?>"
							   class="edit-menu-item-custom" id="menu-megatitle[<?php echo esc_attr($item_id); ?>]"
							   name="menu-megatitle[<?php echo esc_attr($item_id); ?>]"
							   value="1" <?php echo checked( ! empty( $item->megatitle ), 1, false ); ?> />
					</label>
				</p>

				<p class="field-custom description description-wide">
					<label for="edit-menu-nocolumnspacing-<?php echo esc_attr($item_id); ?>">
					<?php _e( 'No Menu Column Spacing (for custom html column)', 'webidia' ); ?>
						<input type="checkbox" id="edit-menu-nocolumnspacing-<?php echo esc_attr($item_id); ?>"
							   class="edit-menu-item-custom" id="menu-nocolumnspacing[<?php echo esc_attr($item_id); ?>]"
							   name="menu-nocolumnspacing[<?php echo esc_attr($item_id); ?>]"
							   value="1" <?php echo checked( ! empty( $item->nocolumnspacing ), 1, false ); ?> />
					</label>
				</p>
				<p class="field-custom description description-wide">
					<label for="edit-menu-item-icon-<?php echo esc_attr($item_id); ?>">
					<?php _e( 'Custom HTML Column Width (optional)', 'webidia' ); ?>
						<input type="text" id="edit-menu-item-width-<?php echo esc_attr($item_id); ?>"
							   class="widefat edit-menu-item-custom" name="menu-item-width[<?php echo esc_attr($item_id); ?>]"
							   value="<?php echo esc_attr( $item->menuwidth ); ?>"/>
					</label>
					<p><?php _e( 'Optionally set a width here for the menu column, ideal if you want to make it wider. Numeric value (no px).', 'webidia' ); ?></p>
				</p>

				<p class="field-custom description description-wide">
					<label for="edit-menu-item-htmlcontent-<?php echo esc_attr($item_id); ?>">
					<?php _e( 'Custom HTML Column (within Mega Menu)', 'webidia' ); ?>
						<textarea id="edit-menu-item-htmlcontent-<?php echo esc_attr($item_id); ?>"
								  name="menu-item-htmlcontent[<?php echo esc_attr($item_id); ?>]" cols="30"
								  rows="4"><?php echo esc_attr( $item->htmlcontent ); ?></textarea>
					</label>
				</p>
			<?php } ?>
		</div>
	<?php
	}

	/**
	 * Add custom fields to $item nav object
	 * in order to be used in custom Walker
	 *
	 * @access      public
	 * @since       1.0
	 * @return      void
	 */
	function wf_mega_menu_add_custom_nav_fields( $menu_item ) {

		$menu_item->subtitle        = get_post_meta( $menu_item->ID, '_menu_item_subtitle', true );
		$menu_item->htmlcontent     = get_post_meta( $menu_item->ID, '_menu_item_htmlcontent', true );
		$menu_item->nocolumnspacing = get_post_meta( $menu_item->ID, '_menu_nocolumnspacing', true );
		$menu_item->megamenu        = get_post_meta( $menu_item->ID, '_menu_megamenu', true );
		$menu_item->megamenucols    = get_post_meta( $menu_item->ID, '_menu_megamenucols', true );
		$menu_item->isnaturalwidth  = get_post_meta( $menu_item->ID, '_menu_is_naturalwidth', true );
		$menu_item->altstyle        = get_post_meta( $menu_item->ID, '_menu_is_altstyle', true );
		$menu_item->hideheadings    = get_post_meta( $menu_item->ID, '_menu_hideheadings', true );
		$menu_item->loggedinvis     = get_post_meta( $menu_item->ID, '_menu_loggedinvis', true );
		$menu_item->loggedoutvis    = get_post_meta( $menu_item->ID, '_menu_loggedoutvis', true );
		$menu_item->newbadge   		= get_post_meta( $menu_item->ID, '_menu_newbadge', true );
		$menu_item->menuitembtn     = get_post_meta( $menu_item->ID, '_menu_menuitembtn', true );
		$menu_item->megatitle       = get_post_meta( $menu_item->ID, '_menu_megatitle', true );
		$menu_item->menuicon        = get_post_meta( $menu_item->ID, '_menu_item_icon', true );
		$menu_item->menuwidth       = get_post_meta( $menu_item->ID, '_menu_item_width', true );

		return $menu_item;

	}

	/**
	 * Save menu custom fields
	 *
	 * @access      public
	 * @since       1.0
	 * @return      void
	 */
	function wf_mega_menu_update_custom_nav_fields( $menu_id, $menu_item_db_id, $args ) {

		// Check if element is properly sent
		$elements = array(
			'item-subtitle',
			'item-icon',
			'item-htmlcontent',
			'megamenucols',
			'item-width',
		);
		foreach ( $elements as $element ) {
			if ( isset( $_REQUEST['menu-' . $element][ $menu_item_db_id ] ) ) {
				$meta_value = $_REQUEST['menu-' . $element][ $menu_item_db_id ];
				$meta_key   = '_menu_' . str_replace( '-', '_', $element );
				update_post_meta( $menu_item_db_id, $meta_key, $meta_value );
			}
		}

		$fields = array(
			'megamenu',
			'is-naturalwidth',
			'menuitembtn',
			'loggedinvis',
			'loggedoutvis',
			'newbadge',
			'is-altstyle',
			'ideheadings',
			'megatitle',
			'nocolumnspacing',
		);

		foreach ( $fields as $field ) {
			$meta_value = isset( $_REQUEST['menu-' . $field][ $menu_item_db_id ] ) ? 1 : 0;
			$meta_key   = '_menu_' . str_replace('-', '_', $field);
			update_post_meta( $menu_item_db_id, $meta_key, $meta_value );
		}
	}

	/**
	 * Define new Walker edit
	 *
	 * @access      public
	 * @since       1.0
	 * @return      void
	 */
	function wf_mega_menu_edit_walker( $walker, $menu_id ) {

		return 'Walker_Nav_Menu_Edit_Custom';

	}

}

// instantiate plugin's class
$GLOBALS['webidia_mega_menu'] = new WF_Mega_Menu();


include_once( 'inc/megamenu/class-wf-walker-nav-menu-edit-custom.php' );
include_once( 'inc/megamenu/class-wf-mega-menu-walker.php' );

?>