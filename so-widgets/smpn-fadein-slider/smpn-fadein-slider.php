<?php
/*
	Widget Name: Smpn FADEIN Slider
	Description: Smpn SOW for using FADE_IN Slider with SLICK.JS within the page builder
	Author: Stephen Anil, Sputznik
	Author URI:	https://sputznik.com
	Widget URI:
	Video URI:
*/
class SMPN_FADEIN_SLIDER extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'smpn-fadein-slider',
			// The name of the widget for display purposes.
			__('Smpn FADEIN Slider', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Smpn SOW for using FADE_IN Slider with SLICK.JS within the page builder.', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Items' , 'siteorigin-widgets' ),
					'fields' => array(
						'content' => array(
			        'type' => 'tinymce',
			        'label' => __( 'Item Content', 'siteorigin-widgets' ),
			        'default' => '',
			        'rows' => 10,
			        'default_editor' => 'html'
				    )
					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/smpn-fadein-slider"
		);
	}

	function get_template_name($instance) {
		return 'template';
	}
	function get_template_dir($instance) {
		return 'templates';
	}
    function get_style_name($instance) {
        return '';
    }
}
siteorigin_widget_register('smpn-fadein-slider', __FILE__, 'SMPN_FADEIN_SLIDER');
