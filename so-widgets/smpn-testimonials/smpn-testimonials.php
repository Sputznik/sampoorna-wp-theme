<?php
/*
	Widget Name: Smpn Testimonials
	Description: Smpn SOW for using Testimonials with SLICK.JS within the page builder
	Author: Stephen Anil, Sputznik
	Author URI:	https://sputznik.com
	Widget URI:
	Video URI:
*/
class SMPN_TESTIMONIALS extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'smpn-testimonials',
			// The name of the widget for display purposes.
			__('Smpn Testimonials', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Smpn SOW for using Testimonials with SLICK.JS within the page builder.', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'testimonials' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Testimonials' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Testimonial', 'siteorigin-widgets' ),
					'item_label' => array(
						'selector' => "[id*='name']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields' => array(
						'image' => array(
							'type' 		=> 'media',
							'label' 	=> __( 'Image', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
						'name' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'Name', 'siteorigin-widgets' ),
							'default' 	=> '',
							'description'	=> 'The author of the testimonial'
						),
						'content' => array(
							'type' 			=> 'textarea',
							'label' 		=> __( 'Testimonial Content', 'siteorigin-widgets' ),
							'default' 	=> '',
							'description'	=> 'What your customer had to say'
						)
					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/smpn-testimonials"
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
siteorigin_widget_register('smpn-testimonials', __FILE__, 'SMPN_TESTIMONIALS');
