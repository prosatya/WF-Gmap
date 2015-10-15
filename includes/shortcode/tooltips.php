<?php
function wf_tooltip_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'tooltip_id'   => 'tooltip',
		'tooltip_theme' => 'tooltipster-black',
		'tooltip_animation' => 'fade',
		'message_text' => 'This div has a tooltip when you hover over it!',
	), $atts ) );

	$content = wpb_js_remove_wpautop( $content, true ); // fix unclosed/unwanted paragraph tags in $content

	$tooltip = '
		<div class="tooltipster" data-id="tooltip" title="' . $content . '">
			' . $message_text . '
		</div>

		<script>
			jQuery(document).ready(function($) {
				$(".tooltipster").tooltipster({
					animation: "' . $tooltip_animation . '",
					delay: 200,
					theme: "' . $tooltip_theme . '",
					touchDevices: false,
					trigger: "hover",
					contentAsHTML: true
				});
			});
		</script>
    ';

	return $tooltip;
}

add_shortcode( 'wf_tooltip', 'wf_tooltip_func' );


