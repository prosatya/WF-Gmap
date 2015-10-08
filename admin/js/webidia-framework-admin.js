(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-specific JavaScript source
	 * should reside in this file.
	 *
	 * Note that this assume you're going to use jQuery, so it prepares
	 * the $ function reference to be used within the scope of this
	 * function.
	 *
	 * From here, you're able to define handlers for when the DOM is
	 * ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * Or when the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and so on.
	 *
	 * Remember that ideally, we should not attach any more than a single DOM-ready or window-load handler
	 * for any particular page. Though other scripts in WordPress core, other plugins, and other themes may
	 * be doing this, we should try to minimize doing that in our own work.
	 */

	jQuery(document).ready(function ($) {

		/*-----------------------------------------------------------------------------------*/
		/*	To Control Metaboxes based on post format
		/*-----------------------------------------------------------------------------------*/
		$('#post-format-custom-options .rwmb-tab-panel-posts .rwmb-field').hide();
		var video_meta_box = $('.rwmb-field').has('#inspiry_meta_video_url, ul[data-field_id="inspiry_meta_video_image"]');
		var gallery_meta_box = $('.rwmb-field').has('#inspiry_meta_gallery');
		var url_meta_box = $('.rwmb-field').has('#inspiry_meta_link_url, #inspiry_meta_link_text');
		var audio_meta_box = $('.rwmb-field').has('ul[data-field_id="inspiry_meta_audio_mp3"] ,ul[data-field_id="inspiry_meta_audio_ogg"], ul[data-field_id="inspiry_meta_audio_wav"], #inspiry_meta_audio_embed_code');

		var videoTrigger = $('#post-format-video');
		var galleryTrigger = $('#post-format-gallery');
		var linkTrigger = $('#post-format-link');
		var audioTrigger = $('#post-format-audio');

		var group = $('#post-formats-select input');

		if (videoTrigger.is(':checked')) {
			hideAllExcept(video_meta_box);
		}
		else if (galleryTrigger.is(':checked')) {
			hideAllExcept(gallery_meta_box);
		}
		else if (linkTrigger.is(':checked')) {
			hideAllExcept(url_meta_box);
		}
		else if (audioTrigger.is(':checked')) {
			hideAllExcept(audio_meta_box);
		}
		else {
			hideAll();
		}

		group.change(function () {
			if ($.inArray($(this).val(), ['image', 'gallery', 'video', 'audio', 'quote', 'link']) >= 0)
				$('body').scrollTo('#postbox-container-2',{duration:'slow'});

			$('.rwmb-tab-post_' + $(this).val() + ' a').trigger('click');

			$('#post-format-custom-options .rwmb-tab-panel-posts .rwmb-field').hide();

			if ($(this).val() == 'video') {
				hideAllExcept(video_meta_box);
			}
			else if ($(this).val() == 'gallery') {
				hideAllExcept(gallery_meta_box);
			}
			else if ($(this).val() == 'link') {
				hideAllExcept(url_meta_box);
			}
			else if ($(this).val() == 'audio') {
				hideAllExcept(audio_meta_box);
			}
			else {
				hideAll();
			}

		});

		function hideAllExcept(required_meta_box) {
			hideAll();
			required_meta_box.show();
		}

		function hideAll() {
			$('.rwmb-tab-panel-posts .rwmb-field').hide();
		}

	});

})( jQuery );
