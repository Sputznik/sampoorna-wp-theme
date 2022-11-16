<?php
/*
	Widget Name: Smpn Gradient Nav Tabs
	Description: Gradient nav tabs with vertical and horizontal layout.
	Author: Stephen Anil, Sputznik
	Author URI:	https://sputznik.com
	Widget URI:
	Video URI:
*/
class SMPN_GRADIENT_NAV_TABS extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'smpn-gradient-nav-tabs',
			// The name of the widget for display purposes.
			__('Smpn Gradient Nav Tabs', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Gradient nav tabs with vertical and horizontal layout.', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'tabs' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Nav Tabs' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Tab', 'siteorigin-widgets' ),
					'item_label' => array(
						'selector' => "[id*='title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields' => array(
						'title' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'Link Text', 'siteorigin-widgets' ),
							'default' 	=> '',
						),
						'url' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'URL', 'siteorigin-widgets' ),
							'default' 	=> '',
						)
					)
				),
				'layout' => array(
          'type' => 'select',
          'label' => __( 'Choose a Layout', 'siteorigin-widgets' ),
          'default' => 'vertical',
          'options' => array(
						'vertical' 		=> 'Vertical',
						'horizontal'	=> 'Horizontal'
					)
        )
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/smpn-gradient-nav-tabs"
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
siteorigin_widget_register('smpn-gradient-nav-tabs', __FILE__, 'SMPN_GRADIENT_NAV_TABS');
