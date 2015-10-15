<?php
class WF_Custom_Options {

	function __construct() {
		add_filter( 'rwmb_meta_boxes', array( $this, 'wf_meta_tabs' ) );
	}
	/**
	 * Register meta boxes
	 *
	 * @param array $meta_boxes
	 *
	 * @return array
	 */

	function wf_meta_tabs( $meta_boxes ) {

		$meta_boxes[] = array(
			'title' 		=> __('WEBIDIA Framework - Post Options', 'framework'),
			'id' 			=> 'wf_post_meta',
			'pages' 		=> array('post'),
			'context' 		=> 'normal',
			'priority' 		=> 'high',
			'tabs'			=> array(
				'post_background'	=> __( 'Background', 'framework' ),
				'post_banner'		=> __( 'Banner', 'framework' ),
				'post_image'		=> __( 'Post - Image', 'framework' ),
				'post_gallery'		=> __( 'Post - Gallery', 'framework' ),
				'post_video'		=> __( 'Post - Video', 'framework' ),
				'post_audio'		=> __( 'Post - Audio', 'framework' ),
				'post_quote'		=> __( 'Post - Quote', 'framework' ),
				'post_link'			=> __( 'Post - Link', 'framework' ),
			),
			'tab_style'			=> 'left',
			'fields'			=> array(

				/*------------------------------------*\
					Tab - Background
				\*------------------------------------*/

				array(
					'name'			=> 'Background Options',
					'id'			=> 'wf_meta_post_background_title',
					'type'			=> 'heading',
					'tab'			=> 'post_background',
				),

				array(
					'name'			=> __( 'Background Type', 'framework' ),
					'id'			=> 'wf_meta_post_background_display',
					'desc'			=> '',
					'type'			=> 'radio',
					'std'			=> 'no',
					'tab'			=> 'post_background',
					'options'		=> array(
						'solid'		=> __( 'Solid', 'framework' ),
						'image'		=> __( 'Image', 'framework' ),
						'video'		=> __( 'Video', 'framework' ),
					),
				),

				array(
					'type'			=> 'divider',
					'tab'			=> 'post_background',
				),

				array(
					'name'			=> __( 'Background Image', 'framework' ),
					'id'			=> 'wf_meta_post_background_image',
					'desc'			=> '',
					'type'			=> 'image_advanced',
					'tab'			=> 'post_background',
					'max_file_uploads'			=> '1',
					'hidden'		=> array('wf_meta_post_background_display', '!=', 'image'),
				),

				array(
					'name'			=> __( 'Background Size', 'framework' ),
					'id'			=> 'wf_meta_post_background_size',
					'desc'			=> '',
					'type'			=> 'select_advanced',
					'tab'			=> 'post_background',
					'options'		=> array(
						'inherit'		=> __( 'Inherit', 'framework' ),
						'cover'			=> __( 'Cover', 'framework' ),
						'contain'		=> __( 'Contain', 'framework' ),
					),
					'hidden'		=> array('wf_meta_post_background_display', '!=', 'image'),
				),

				array(
					'name'			=> __( 'Background Position', 'framework' ),
					'id'			=> 'wf_meta_post_background_position',
					'desc'			=> '',
					'type'			=> 'select_advanced',
					'tab'			=> 'post_background',
					'options'		=> array(
						'left top'			=> __( 'Left Top', 'framework' ),
						'left center'			=> __( 'Left Center', 'framework' ),
						'left bottom'			=> __( 'Left Bottom', 'framework' ),
						'center top'			=> __( 'Center Top', 'framework' ),
						'center center'			=> __( 'Center Center', 'framework' ),
						'center bottom'			=> __( 'Center Bottom', 'framework' ),
						'right top'				=> __( 'Right Top', 'framework' ),
						'right center'			=> __( 'Right Center', 'framework' ),
						'right bottom'			=> __( 'Right Bottom', 'framework' ),
					),
					'hidden'		=> array('wf_meta_post_background_display', '!=', 'image'),
				),

				array(
					'name'			=> __( 'Parallax Effect', 'framework' ),
					'id'			=> 'wf_meta_post_background_parallax_display',
					'desc'			=> '',
					'type'			=> 'radio',
					'tab'			=> 'post_background',
					'options'		=> array(
						'yes'		=> __( 'Yes', 'framework' ),
						'no'		=> __( 'No', 'framework' ),
					),
					'hidden'		=> array('wf_meta_post_background_display', '!=', 'image'),
				),

				array(
					'name'			=> __( 'Video Background - MP4', 'framework' ),
					'id'			=> 'wf_meta_post_background_videobg_mp4',
					'desc'			=> '',
					'type'			=> 'file_advanced',
					'tab'			=> 'post_background',
					'max_file_uploads'			=> '1',
					'hidden'		=> array('wf_meta_post_background_display', '!=', 'video'),
				),

				array(
					'name'			=> __( 'Video Background - OGV', 'framework' ),
					'id'			=> 'wf_meta_post_background_videobg_ogv',
					'desc'			=> '',
					'type'			=> 'file_advanced',
					'tab'			=> 'post_background',
					'max_file_uploads'			=> '1',
					'hidden'		=> array('wf_meta_post_background_display', '!=', 'video'),
				),

				array(
					'name'			=> __( 'Video Background - WEBM', 'framework' ),
					'id'			=> 'wf_meta_post_background_videobg_webm',
					'desc'			=> '',
					'type'			=> 'file_advanced',
					'tab'			=> 'post_background',
					'max_file_uploads'			=> '1',
					'hidden'		=> array('wf_meta_post_background_display', '!=', 'video'),
				),

				array(
					'name'			=> __( 'Video Background - JPG', 'framework' ),
					'id'			=> 'wf_meta_post_background_videobg_jpg',
					'desc'			=> '',
					'type'			=> 'image_advanced',
					'tab'			=> 'post_background',
					'max_file_uploads'			=> '1',
					'hidden'		=> array('wf_meta_post_background_display', '!=', 'video'),
				),
				array(
					'name'			=> __( 'Background Color', 'framework' ),
					'id'			=> 'wf_meta_post_background_color',
					'desc'			=> '',
					'type'			=> 'color',
					'tab'			=> 'post_background',
					'hidden'		=> array('wf_meta_post_background_display', '!=', 'solid'),
				),

				/*------------------------------------*\
					Tab - Banner
				\*------------------------------------*/

				array(
					'name'		=> 'Banner Options',
					'id'		=> 'wf_meta_post_banner_title',
					'type'		=> 'heading',
					'tab'		=> 'post_banner',
				),

				array(
					'name'		=> __( 'Display Banner', 'framework' ),
					'id'		=> 'wf_meta_post_banner_display',
					'type'		=> 'radio',
					'tab'		=> 'post_banner',
					'desc' 		=> __('', 'framework'),
					'options'		=> array(
						'show'		=> __( 'Show', 'framework' ),
						'hide' 		=> __( 'Hide', 'framework' ),
					),
				),

				array(
					'name'			=> __('Banner Background', 'framework'),
					'id'			=> 'wf_meta_post_banner_background',
					'desc'			=> __('', 'framework'),
					'type'			=> 'file_advanced',
					'max_file_uploads'		=> 1,
					'tab'			=> 'post_banner',
					'hidden'	=> array('wf_meta_post_banner_display', '!=', 'show'),
				),

				array(
					'name'		=> __( 'Banner Background Color', 'framework' ),
					'id'		=> 'wf_meta_post_banner_background_color',
					'desc' 		=> __('', 'framework'),
					'type'		=> 'color',
					'tab'		=> 'post_banner',
					'hidden'	=> array('wf_meta_post_banner_display', '!=', 'show'),
				),

				array(
					'name'		=> __( 'Banner Overlay Color', 'framework' ),
					'id'		=> 'wf_meta_post_banner_overlay_color',
					'desc' 		=> __('', 'framework'),
					'type'		=> 'color',
					'tab'		=> 'post_banner',
					'hidden'	=> array('wf_meta_post_banner_display', '!=', 'show'),
				),

				array(
					'name'		=> __( 'Banner Overlay Opacity', 'framework' ),
					'id'		=> 'wf_meta_post_banner_overlay_opacity',
					'desc'		=> __('', 'framework'),
					'type'		=> 'slider',
					'tab'		=> 'post_banner',
					'hidden'	=> array('wf_meta_post_banner_display', '!=', 'show'),
				),

				array(
					'name'		=> __( 'Display Breadcrumbs', 'framework' ),
					'id'		=> 'wf_meta_post_display_breadcrumbs',
					'desc' 		=> __('', 'framework'),
					'type'		=> 'radio',
					'tab'		=> 'post_banner',
					'options'	=> array(
						'show'		=> __( 'Show', 'framework' ),
						'hide'		=> __( 'Hide', 'framework' ),
					),
					'hidden'	=> array('wf_meta_post_banner_display', '!=', 'show'),
				),

				/*------------------------------------*\
					Tab - Image
				\*------------------------------------*/

				array(
					'name'			=> 'Image Options',
					'id'			=> 'wf_meta_post_image_title',
					'type'			=> 'heading',
					'tab'			=> 'post_image',

				),

				array(
					'name'			=> __('Image', 'framework'),
					'id'			=> 'wf_meta_post_image_upload',
					'desc'			=> __('', 'framework'),
					'type'			=> 'image_advanced',
					'tab'			=> 'image',
					'max_file_uploads'		=> 1,
					'tab'			=> 'post_image',
				),

				/*------------------------------------*\
					Tab - Gallery
				\*------------------------------------*/

				array(
					'name'			=> 'Gallery Options',
					'id'			=> 'wf_meta_post_gallery_title',
					'type'			=> 'heading',
					'tab'			=> 'post_gallery',
				),

				array(
					'name'			=> __('Gallery Images', 'framework'),
					'id'			=> 'wf_meta_post_gallery_upload',
					'desc'			=> __('', 'framework'),
					'type'			=> 'plupload_image',
					'tab'			=> 'image',
					'max_file_uploads'		=> 24,
					'tab'			=> 'post_gallery',
				),

				/*------------------------------------*\
					Tab - Video
				\*------------------------------------*/

				array(
					'name'			=> 'Video Options',
					'id'			=> 'wf_meta_post_video_title',
					'type'			=> 'heading',
					'tab'			=> 'post_video',
				),

				array(
					'name'			=> __( 'Video Type', 'framework' ),
					'id'			=> 'wf_meta_post_video_type',
					'type'			=> 'image_select',
					'tab'			=> 'post_video',
					'options'		=> array(
						'video_hosted'		=> 'http://placehold.it/90x90&text=Header 1',
						'video_vimeo'		=> 'http://placehold.it/90x90&text=Header 2',
						'video_youtube'		=> 'http://placehold.it/90x90&text=Header 2',
					),
				),

				array(
					'name'			=> __('Video', 'framework'),
					'id'			=> 'wf_meta_post_video_upload',
					'desc'			=> __('', 'framework'),
					'type'			=> 'file_advanced',
					'tab'			=> 'post_video',
					'max_file_uploads'		=> 1,
					'tab'			=> 'post_video',
					'hidden'		=> array('wf_meta_post_video_type', '!=', 'video_hosted'),
				),

				array(
					'name'			=> __('Vimeo Embed Code', 'framework'),
					'desc'			=>	 __('', 'framework'),
					'id'			=> 'wf_meta_post_video_embed_vimeo',
					'type'			=> 'oembed',
					'tab'			=> 'post_video',
					'hidden'		=> array('wf_meta_post_video_type', '!=', 'video_vimeo'),
				),

				array(
					'name'			=> __('Youtube Embed Code', 'framework'),
					'id'			=> 'wf_meta_post_video_embed_youtube',
					'desc'			=> __('', 'framework'),
					'type'			=> 'oembed',
					'tab'			=> 'post_video',
					'hidden'		=> array('wf_meta_post_video_type', '!=', 'video_youtube'),
				),

				array(
					'name'			=> __('Static Image', 'framework'),
					'id'			=> 'wf_meta_post_video_static_image',
					'desc'			=> __('', 'framework'),
					'type'			=> 'image_advanced',
					'tab' 			=> 'post_video',
					'max_file_uploads'		=> 1,
					'visible'		=> array('wf_meta_post_video_type', 'in', array('video_hosted', 'video_youtube', 'video_vimeo')),
				),

				/*------------------------------------*\
					Tab - Link
				\*------------------------------------*/

				array(
					'name'			=> 'Link Options',
					'id'			=> 'wf_meta_post_link_title',
					'type'			=> 'heading',
					'tab'			=> 'post_link',
				),

		        array(
		            'name'			=> __('Link Title', 'framework'),
		            'id'			=> 'wf_meta_post_link_text',
		           	'desc'			=> __('', 'framework'),
		            'type'			=> 'text',
		            'tab'			=> 'post_link',
		            'placeholder'	=> 'Enter Link Text',
		        ),

		        array(
		            'name'			=> __('Link URL', 'framework'),
		            'id'			=> 'wf_meta_post_link_url',
		            'desc'			=> __('', 'framework'),
		            'type'			=> 'text',
		            'tab'			=> 'post_link',
		             'placeholder'		=> 'Enter Link URL',
		        ),

				/*------------------------------------*\
					Post Format - Audio
				\*------------------------------------*/

				array(
					'name'			=> 'Audio Options',
					'id'			=> 'wf_meta_post_audio_title',
					'type'			=> 'heading',
					'tab'			=> 'post_audio',
				),

				array(
					'name'			=> __( 'Audio Type', 'framework' ),
					'id'			=> 'wf_meta_post_audio_type',
					'type'			=> 'image_select',
					'tab'			=> 'post_audio',
					'options'		=> array(
						'audio_upload'		=> 'http://placehold.it/90x90&text=Header 1',
						'audio_embed'		=> 'http://placehold.it/90x90&text=Header 2',
						'audio_external'	=> 'http://placehold.it/90x90&text=Header 2',
					),
				),

				// Upload
				array(
					'name'			=> __('MP3 Audio File', 'framework'),
					'id' 			=> 'wf_meta_post_audio_mp3_upload',
					'desc' 			=> __('Upload MP3 file', 'framework'),
					'type'			=> 'file_advanced',
					'tab'			=> 'post_audio',
					'max_file_uploads'		=> 1,
					'hidden'		=> array('wf_meta_post_audio_type', '!=', 'audio_upload'),
				),

				array(
					'name'			=> __('OGG Audio File', 'framework'),
					'id'			=> 'wf_meta_post_audio_ogg_upload',
					'desc'			=> __('Upload file in OGG format as a fallback for older browsers', 'framework'),
					'type'			=> 'file_advanced',
					'tab' 			=> 'post_audio',
					'max_file_uploads'		=> 1,
					'tab'			=> 'audio',
					'hidden'		=> array('wf_meta_post_audio_type', '!=', 'audio_upload'),
				),

				array(
					'name'			=> __('WAV Audio File', 'framework'),
					'id'			=> 'wf_meta_post_audio_wav_upload',
					'desc'			=> __('Upload file in WAV format as a fallback for older browsers', 'framework'),
					'type'			=> 'file_advanced',
					'tab' 			=> 'post_audio',
					'max_file_uploads'			=> 1,
					'tab'			=> 'audio',
					'hidden'		=> array('wf_meta_post_audio_type', '!=', 'audio_upload'),
				),

				// Embed
				array(
					'id'			=> 'wf_meta_post_audio_embed_type',
					'name'			=> __( 'Embed Type', 'framework' ),
					'type'			=> 'image_select',
					'tab'			=> 'post_audio',
					'options'		=> array(
						'audio_embed_soundcloud'		=> 'http://placehold.it/90x90&text=Soundcloud',
						'audio_embed_spotify'			=> 'http://placehold.it/90x90&text=Spotify',
						'audio_embed_mixcloud'			=> 'http://placehold.it/90x90&text=Mix Cloud',
						'audio_embed_other'				=> 'http://placehold.it/90x90&text=Other',
					),
					'hidden'		=> array('wf_meta_post_audio_type', '!=', 'audio_embed'),
				),

				array(
					'name'			=> __('Soundcloud', 'framework'),
					'id'			=> 'wf_meta_post_audio_soundcloud_embed_code',
					'desc'			=> __('', 'framework'),
					'type'			=> 'textarea',
					'tab' 			=> 'post_audio',
					'cols'			=> '15',
					'rows'			=> '3',
					'tab'			=> 'audio',
					'hidden'		=> array('wf_meta_post_audio_embed_type', '!=', 'audio_embed_soundcloud'),
				),

				array(
					'name'			=> __('Spotify Embed Code', 'framework'),
					'id'			=> 'wf_meta_post_audio_spotify_embed_code',
					'desc'			=> __('', 'framework'),
					'type'			=> 'textarea',
					'tab' 			=> 'post_audio',
					'cols'			=> '15',
					'rows'			=> '3',
					'tab' 			=> 'audio',
					'hidden'		=> array('wf_meta_post_audio_embed_type', '!=', 'audio_embed_spotify'),
				),

				array(
					'name'			=> __('Mix Cloud Embed Code', 'framework'),
					'desc'			=> __('', 'framework'),
					'id'			=> 'wf_meta_post_audio_mixcloud_embed_code',
					'type'			=> 'textarea',
					'tab' 			=> 'post_audio',
					'cols'			=> '15',
					'rows'			=> '3',
					'tab' 			=> 'audio',
					'hidden'		=> array('wf_meta_post_audio_embed_type', '!=', 'audio_embed_mixcloud'),
				),

				array(
					'name'			=> __('Other Embed Code', 'framework'),
					'desc'			=> __('', 'framework'),
					'id'			=> 'wf_meta_post_audio_embed_code',
					'type'			=> 'textarea',
					'tab' 			=> 'post_audio',
					'cols'			=> '15',
					'rows'			=> '3',
					'tab' 			=> 'audio',
					'hidden'		=> array('wf_meta_post_audio_embed_type', '!=', 'audio_embed_other'),
				),


				// External 
				array(
					'name'			=> __('External Link', 'framework'),
					'desc'			=> __('', 'framework'),
					'id'			=> 'wf_meta_post_audio_external_link',
					'type'			=> 'text',
					'tab'			=> 'post_audio',
					'placeholder'	=> 'Enter URL',
					'cols'			=> '20',
					'rows'			=> '3',
					'tab' 			=> 'audio',
					'hidden'		=> array('wf_meta_post_audio_type', '!=', 'audio_external'),
				),

				/*------------------------------------*\
					Tab - Quote
				\*------------------------------------*/

				array(
					'name'			=> 'Quote Options',
					'id'			=> 'wf_meta_post_quote_title',
					'type'			=> 'heading',
					'tab'			=> 'post_quote',
				),

				array(
		            'name'			=> __('Quote Text', 'framework'),
		            'id'			=> 'wf_meta_post_quote_quote',
		            'desc'			=> __('', 'framework'),
		            'type'			=> 'textarea',
		            'placeholder'	=> 'Enter Quote',
		            'tab'			=> 'post_quote',
		            'cols' 			=> '20',
		            'rows'			=> '4',
		        ),

		        array(
		            'name'			=> __('Quote Author', 'framework'),
		            'id'			=> 'wf_meta_post_quote_author',
		            'desc'			=> __('', 'framework'),
		            'type'			=> 'text',
		            'placeholder'	=> 'Enter Author',
		            'tab'			=> 'post_quote',
		        ),
			)
		);


		/*------------------------------------*\
			Page Options
		\*------------------------------------*/

		$meta_boxes[] = array(
			'title' 		=> __('WEBIDIA Framework - Page Options', 'framework'),
			'id' 			=> 'wf_page_meta',
			'pages' 		=> array('page'),
			'context' 		=> 'normal',
			'priority' 		=> 'high',
			'tabs'			=> array(
				'page_title'		=> __( 'Title', 'framework' ),
				'page_background'	=> __( 'Background', 'framework' ),
				'page_layout'		=> __( 'Layout', 'framework' ),
				'page_banner'		=> __( 'Banner', 'framework'),
			),
			'tab_style' 		=> 'left',
			'fields' 		=> array(

				/*------------------------------------*\
					Tab - Title
				\*------------------------------------*/

				array(
					'name'			=> 'Title Options',
					'id'			=> 'wf_meta_page_title_title',
					'type'			=> 'heading',
					'tab'			=> 'page_title',
				),

				array(
					'name'			=> __( 'Display Title', 'framework' ),
					'id'			=> 'wf_meta_page_display_title',
					'desc'			=> '',
					'type'			=> 'radio',
					'tab'			=> 'page_title',
					'options'		=> array(
						'show'			=> __( 'Show', 'framework' ),
						'hide' 			=> __( 'Hide', 'framework' ),
					),
				),

				array(
					'name'			=> __( 'Custom Page Title', 'framework' ),
					'id'			=> 'wf_meta_page_title',
					'desc'			=> '',
					'placeholder'	=> 'Enter Custom Title',
					'type'			=> 'text',
					'tab'			=> 'page_title',
					'hidden'		=> array('wf_meta_page_display_title', '!=', 'show'),
				),

				array(
					'id'			=> 'wf_meta_page_subtitle',
					'name'			=> __( 'Subtitle', 'framework' ),
					'desc'			=> '',
					'placeholder'	=> 'Enter Custom Subtitle',
					'type'			=> 'text',
					'tab'			=> 'page_title',
					'hidden'		=> array('wf_meta_page_display_title', '!=', 'show'),
				),

				array(
					'name'			=> __( 'Page Title Color', 'framework' ),
					'id'			=> 'wf_meta_page_title_color',
					'desc'			=> '',
					'type'			=> 'color',
					'tab'			=> 'page_title',
					'hidden'		=> array('wf_meta_page_display_title', '!=', 'show'),
				),

				/*------------------------------------*\
					Tab - Background
				\*------------------------------------*/

				array(
					'name'			=> 'Background Options',
					'id'			=> 'wf_meta_page_background_title',
					'type'			=> 'heading',
					'tab'			=> 'page_background',
				),

				array(
					'name'			=> __( 'Background Type', 'framework' ),
					'id'			=> 'wf_meta_page_background_display',
					'desc'			=> '',
					'type'			=> 'radio',
					'std'			=> 'no',
					'tab'			=> 'page_background',
					'options'		=> array(
						'solid'		=> __( 'Solid', 'framework' ),
						'image'		=> __( 'Image', 'framework' ),
						'video'		=> __( 'Video', 'framework' ),
					),
				),

				array(
					'name'			=> __( 'Background Image', 'framework' ),
					'id'			=> 'wf_meta_page_background_image',
					'desc'			=> '',
					'type'			=> 'image_advanced',
					'tab'			=> 'page_background',
					'max_file_uploads'			=> '1',
					'hidden'		=> array('wf_meta_page_background_display', '!=', 'image'),
				),

				array(
					'name'			=> __( 'Background Size', 'framework' ),
					'id'			=> 'wf_meta_page_background_size',
					'desc'			=> '',
					'type'			=> 'select_advanced',
					'tab'			=> 'page_background',
					'options'		=> array(
						'inherit'		=> __( 'Inherit', 'framework' ),
						'cover'			=> __( 'Cover', 'framework' ),
						'contain'		=> __( 'Contain', 'framework' ),
					),
					'hidden'		=> array('wf_meta_page_background_display', '!=', 'image'),
				),

				array(
					'name'			=> __( 'Background Position', 'framework' ),
					'id'			=> 'wf_meta_page_background_position',
					'desc'			=> '',
					'type'			=> 'select_advanced',
					'tab'			=> 'page_background',
					'options'		=> array(
						'left top'			=> __( 'Left Top', 'framework' ),
						'left center'			=> __( 'Left Center', 'framework' ),
						'left bottom'			=> __( 'Left Bottom', 'framework' ),
						'center top'			=> __( 'Center Top', 'framework' ),
						'center center'			=> __( 'Center Center', 'framework' ),
						'center bottom'			=> __( 'Center Bottom', 'framework' ),
						'right top'				=> __( 'Right Top', 'framework' ),
						'right center'			=> __( 'Right Center', 'framework' ),
						'right bottom'			=> __( 'Right Bottom', 'framework' ),
					),
					'hidden'		=> array('wf_meta_page_background_display', '!=', 'image'),
				),

				array(
					'name'			=> __( 'Parallax Effect', 'framework' ),
					'id'			=> 'wf_meta_page_background_parallax_display',
					'desc'			=> '',
					'type'			=> 'radio',
					'tab'			=> 'page_background',
					'options'		=> array(
						'yes'		=> __( 'Yes', 'framework' ),
						'no'		=> __( 'No', 'framework' ),
					),
					'hidden'		=> array('wf_meta_page_background_display', '!=', 'image'),
				),

				array(
					'name'			=> __( 'Video Background - MP4', 'framework' ),
					'id'			=> 'wf_meta_page_background_videobg_mp4',
					'desc'			=> '',
					'type'			=> 'file_advanced',
					'tab'			=> 'page_background',
					'max_file_uploads'			=> '1',
					'hidden'		=> array('wf_meta_page_background_display', '!=', 'video'),
				),

				array(
					'name'			=> __( 'Video Background - OGV', 'framework' ),
					'id'			=> 'wf_meta_page_background_videobg_ogv',
					'desc'			=> '',
					'type'			=> 'file_advanced',
					'tab'			=> 'page_background',
					'max_file_uploads'			=> '1',
					'hidden'		=> array('wf_meta_page_background_display', '!=', 'video'),
				),

				array(
					'name'			=> __( 'Video Background - WEBM', 'framework' ),
					'id'			=> 'wf_meta_page_background_videobg_webm',
					'desc'			=> '',
					'type'			=> 'file_advanced',
					'tab'			=> 'page_background',
					'max_file_uploads'			=> '1',
					'hidden'		=> array('wf_meta_page_background_display', '!=', 'video'),
				),

				array(
					'name'			=> __( 'Video Background - JPG', 'framework' ),
					'id'			=> 'wf_meta_page_background_videobg_jpg',
					'desc'			=> '',
					'type'			=> 'image_advanced',
					'tab'			=> 'page_background',
					'max_file_uploads'			=> '1',
					'hidden'		=> array('wf_meta_page_background_display', '!=', 'video'),
				),
				array(
					'name'			=> __( 'Background Color', 'framework' ),
					'id'			=> 'wf_meta_page_background_color',
					'desc'			=> '',
					'type'			=> 'color',
					'tab'			=> 'page_background',
					'hidden'		=> array('wf_meta_page_background_display', '!=', 'solid'),
				),

				/*------------------------------------*\
					Tab - Layout
				\*------------------------------------*/

				array(
					'name'			=> 'Layout Options',
					'id'			=> 'wf_meta_page_layout_header_title',
					'type'			=> 'heading',
					'tab'			=> 'page_layout',
				),

				array(
					'name'			=> __( 'Layout Type', 'framework' ),
					'id'			=> 'wf_meta_page_page_layout',
					'type'			=> 'image_select',
					'tab'			=> 'page_layout',
					'options'		=> array(
						'layout_temp_1'			=> 'http://placehold.it/90x90&text=Left',
						'layout_temp_2'			=> 'http://placehold.it/90x90&text=Right',
						'layout_temp_3'			=> 'http://placehold.it/90x90&text=None',
					),
					'std'			=> 'layout_temp_2',
				),

				/*------------------------------------*\
					Tab - Banner
				\*------------------------------------*/

				array(
					'name'			=> 'Banner Options',
					'id'			=> 'wf_meta_page_banner_title',
					'type'			=> 'heading',
					'tab'			=> 'page_banner',

				),

				array(
					'name'			=> __( 'Display Banner', 'framework' ),
					'id'			=> 'wf_meta_page_banner_display',
					'desc'			=> '',
					'type'			=> 'radio',
					'tab'			=> 'page_banner',
					'options'		=> array(
						'show' 			=> __( 'Show', 'framework' ),
						'hide' 			=> __( 'Hide', 'framework' ),
					),
				),

				array(
					'name'			=> __( 'Banner Background Image', 'framework' ),
					'id'			=> 'wf_meta_page_banner_background_image',
					'desc'			=> '',
					'type'			=> 'file_advanced',
					'tab'			=> 'page_banner',
					'hidden'		=> array('wf_meta_page_banner_display', '!=', 'show'),
				),

				array(
					'name'			=> __( 'Banner Overlay Color', 'framework' ),
					'id'			=> 'wf_meta_page_banner_overlay_color',
					'desc'			=> '',
					'type'			=> 'color',
					'tab'			=> 'page_banner',
					'hidden'		=> array('wf_meta_page_banner_display', '!=', 'show'),
				),

				array(
					'name'			=> __( 'Banner Overlay Opacity', 'framework' ),
					'id'			=> 'wf_meta_page_banner_overlay_opacity',
					'desc'			=> '',
					'type'			=> 'slider',
					'tab'			=> 'page_banner',
					'hidden'		=> array('wf_meta_page_banner_display', '!=', 'show'),
				),

				array(
					'name'			=> __( 'Display Breadcrumbs', 'framework' ),
					'id'			=> 'wf_meta_page_banner_breadcrumbs',
					'desc'			=> '',
					'type'			=> 'radio',
					'tab'			=> 'page_banner',
					'options'		=> array(
						'show'			=> __( 'Show', 'framework' ),
						'hide'			=> __( 'Hide', 'framework' ),
					),
					'hidden'		=> array('wf_meta_page_banner_display', '!=', 'show'),
				),

			)
		);

		return $meta_boxes;
	}
}

new WF_Custom_Options();