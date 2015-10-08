<?php // Silence is golden


// [modal modal_id="modal"]
function wf_modal_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'modal_id'               => 'modal',
		'modal_title'            => '',
		'modal_type'             => 'Text',
		'button_style'           => 'wf',
		'message_text'           => 'Default Text',
		'show_ok_cancel_buttons' => '',
		'close_on_outside_click' => '',
		'close_on_escape'        => '',
		'extra_class'            => '',
	), $atts ) );

	$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

	$trigger_element = '';
	if ( $modal_type == 'Text' ) {
		$trigger_element = '<span data-remodal-target="' . $modal_id . '" >' . $message_text . '</span>';
	} else if ( $modal_type == 'Button' ) {
		$trigger_element = '<a href="javascript:void(0);" data-remodal-target="' . $modal_id . '" class="' . $button_style . '-btn">' . $message_text . '</a>';
	}

	$ok_cancel_buttons = '';
	if ( $show_ok_cancel_buttons ) {
		$ok_cancel_buttons = '
			<br>
			<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
			<button data-remodal-action="confirm" class="remodal-confirm">OK</button>
		';
	}

	$close_on_outside_click = ( $close_on_outside_click == '1' ) ? 'true' : 'false';
	$close_on_escape = ( $close_on_escape == '1' ) ? 'true' : 'false';

	$modal = $trigger_element . '
		<div class="remodal"
			data-remodal-options="closeOnOutsideClick: ' . $close_on_outside_click . ', closeOnEscape: ' . $close_on_escape . ', modifier: ' . $extra_class . '"
			data-remodal-id="' . $modal_id . '">
			<button data-remodal-action="close" class="remodal-close"></button>
			<h1>' . $modal_title . '</h1>
			<div>
				' . $content . '
			</div>
			' . $ok_cancel_buttons . '
		</div>
	';

	return $modal;
}

add_shortcode( 'modal', 'wf_modal_func' );


