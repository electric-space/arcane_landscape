<?php
    if( function_exists('acf_add_local_field_group') ):
    
        acf_add_local_field_group(array (
        	'key' => 'group_557ff97f3381a',
        	'title' => 'Theme Settings',
        	'fields' => array (
        		array (
        			'key' => 'field_557ff994974e2',
        			'label' => 'Email',
        			'name' => 'email',
        			'type' => 'email',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array (
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        		),
        		array (
        			'key' => 'field_557ffa4f974e3',
        			'label' => 'Phone Number #1',
        			'name' => 'phone_number',
        			'type' => 'number',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array (
        				'width' => '50%',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'min' => '',
        			'max' => '',
        			'step' => '',
        			'readonly' => 0,
        			'disabled' => 0,
        		),
        		array (
        			'key' => 'field_558ffa4f974e3',
        			'label' => 'Phone Number #2',
        			'name' => 'phone_number_alt',
        			'type' => 'number',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array (
        				'width' => '50%',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'min' => '',
        			'max' => '',
        			'step' => '',
        			'readonly' => 0,
        			'disabled' => 0,
        		),
        		array (
        			'key' => 'field_557ffa69974e4',
        			'label' => 'Office Address',
        			'name' => 'office_address',
        			'type' => 'textarea',
        			'instructions' => 'Newline separated.',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array (
        				'width' => '50%',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'maxlength' => '',
        			'rows' => '',
        			'new_lines' => 'wpautop',
        			'readonly' => 0,
        			'disabled' => 0,
        		),
        		array (
        			'key' => 'field_558ffa69974e4',
        			'label' => 'Site Address',
        			'name' => 'site_address',
        			'type' => 'textarea',
        			'instructions' => 'Newline separated.',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array (
        				'width' => '50%',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'maxlength' => '',
        			'rows' => '',
        			'new_lines' => 'wpautop',
        			'readonly' => 0,
        			'disabled' => 0,
        		),
        		array (
        			'key' => 'field_557ffaa0974e5',
        			'label' => 'Social Accounts',
        			'name' => 'social_accounts',
        			'type' => 'textarea',
        			'instructions' => 'Add url one per line.',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array (
        				'width' => '50%',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'maxlength' => '',
        			'rows' => '',
        			'new_lines' => '',
        			'readonly' => 0,
        			'disabled' => 0,
        		),
        		array (
        			'key' => 'field_558ffacb974e6',
        			'label' => 'Opening Hours',
        			'name' => 'open_hours',
        			'type' => 'textarea',
        			'instructions' => 'Newline separated',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array (
        				'width' => '50%',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        			'readonly' => 0,
        			'disabled' => 0,
        		),
        		array (
        			'key' => 'field_557ffacb974e6',
        			'label' => 'Footer Attribution',
        			'name' => 'footer_attribution',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array (
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => 'Website by <a href="http://electricspace.co.uk" target="_blank" rel="noopener">electric_space</a>',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        			'readonly' => 0,
        			'disabled' => 0,
        		),
        	),
        	'location' => array (
        		array (
        			array (
        				'param' => 'options_page',
        				'operator' => '==',
        				'value' => 'theme-general-settings',
        			),
        		),
        	),
        	'menu_order' => 0,
        	'position' => 'normal',
        	'style' => 'default',
        	'label_placement' => 'top',
        	'instruction_placement' => 'label',
        	'hide_on_screen' => '',
        ));


        
        
        acf_add_local_field_group(array (
        	'key' => 'group_557f5256ab2e0',
        	'title' => 'Slider',
        	'fields' => array (
        		array (
        			'key' => 'field_557f526951425',
        			'label' => 'Slide',
        			'name' => 'slide',
        			'type' => 'repeater',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array (
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'min' => '',
        			'max' => '',
        			'layout' => 'table',
        			'button_label' => 'Add Slide',
        			'sub_fields' => array (
        				array (
        					'key' => 'field_557f527551426',
        					'label' => 'Image',
        					'name' => 'image',
        					'type' => 'image',
        					'instructions' => '',
        					'required' => 0,
        					'conditional_logic' => 0,
        					'wrapper' => array (
        						'width' => '',
        						'class' => '',
        						'id' => '',
        					),
        					'return_format' => 'array',
        					'preview_size' => 'thumbnail',
        					'library' => 'all',
        					'min_width' => '',
        					'min_height' => '',
        					'min_size' => '',
        					'max_width' => '',
        					'max_height' => '',
        					'max_size' => '',
        					'mime_types' => '',
        				),
        				array (
        					'key' => 'field_557f529451427',
        					'label' => 'Caption',
        					'name' => 'caption',
        					'type' => 'wysiwyg',
        					'instructions' => '',
        					'required' => 0,
        					'conditional_logic' => 0,
        					'wrapper' => array (
        						'width' => '',
        						'class' => '',
        						'id' => '',
        					),
        					'default_value' => '',
        					'tabs' => 'all',
        					'toolbar' => 'basic',
        					'media_upload' => 0,
        				),
        			),
        		),
        	),
        	'location' => array (
        		array (
        			array (
        				'param' => 'post_type',
        				'operator' => '==',
        				'value' => 'page',
        			),
        		),
        	),
        	'menu_order' => 0,
        	'position' => 'normal',
        	'style' => 'default',
        	'label_placement' => 'top',
        	'instruction_placement' => 'label',
        	'hide_on_screen' => '',
        ));
        
        
        
        acf_add_local_field_group(array(
        	'key' => 'group_5de0f0916e2f0',
        	'title' => 'Add whole page container.',
        	'fields' => array(
        		array(
        			'key' => 'field_5de0f09aa6f91',
        			'label' => '',
        			'name' => 'stripe',
        			'type' => 'checkbox',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'choices' => array(
        				'true' => 'Add container',
        			),
        			'allow_custom' => 0,
        			'save_custom' => 0,
        			'default_value' => array(
        			),
        			'layout' => 'vertical',
        			'toggle' => 0,
        			'return_format' => 'value',
        		),
        	),
        	'location' => array(
        		array(
        			array(
        				'param' => 'options_page',
        				'operator' => '==',
        				'value' => 'theme-general-settings',
        			),
        		),
        	),
        	'menu_order' => 0,
        	'position' => 'normal',
        	'style' => 'default',
        	'label_placement' => 'top',
        	'instruction_placement' => 'label',
        	'hide_on_screen' => '',
        	'active' => 1,
        	'description' => '',
        ));
        
        
        
    
    endif;
 ;?>