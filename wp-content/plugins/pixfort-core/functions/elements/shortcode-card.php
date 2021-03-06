<?php

// Card ----------------------------------------------
vc_map( array (
    'base' 			=> 'pix_card',
    'name' 			=> __('Card', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/card.png',
    'description' 	=> __('Create custom card styles', 'pix-opts'),
    "weight"	=> "1000",
    'params' 		=> array_merge(
        array (

            array(
                'type' => 'dropdown',
                'param_name' => 'layout',
                'value' => array(
                    __( 'Small', 'js_composer' )		=> 'small',
                    __( 'Big', 'js_composer' )		=> 'big',
                    __( 'Big with padding', 'js_composer' )		=> 'big_padding',
                ),
                'heading' => __( 'Layout', 'js_composer' ),
                'description' => __( 'Select tabs display style.', 'js_composer' ),
            ),

            array (
                'param_name' 	=> 'title',
                'type' 			=> 'textfield',
                'heading' 		=> __('Title', 'pix-opts'),
                'admin_label'	=> true,
            ),
            array (
                'param_name' 	=> 'text',
                'type' 			=> 'textarea',
                'heading' 		=> __('Card text', 'pix-opts'),
                'admin_label'	=> true,
                'dependency' => array(
                    "element" => "layout",
                    "value" => array("big","big_padding")
                )
            ),
            array (
                'param_name' 	=> 'link_text',
                'type' 			=> 'textfield',
                'heading' 		=> __('Link Text', 'pix-opts'),
                'admin_label'	=> true,
                // 'value'         => "Learn more",
                'dependency' => array(
                    "element" => "layout",
                    "value" => array('big_padding', "big")
                )
            ),
            array (
                'param_name' 	=> 'link',
                'type' 			=> 'textfield',
                'heading' 		=> __('Link', 'pix-opts'),
                'admin_label'	=> true,
                'dependency' => array(
                    "element" => "layout",
                    "value" => array("small", 'big', 'big_padding')
                )
            ),
            array(
                "type" => "checkbox",
                "heading" => __( "Open in a new tab", "pix-opts" ),
                "param_name" => "target",
                "value" => __( "Yes", "pix-opts" ),
                "dependency" => array(
                    "element" => "link",
                    "not_empty" => true
                ),
            ),

            array (
                'param_name' 	=> 'image',
                'type' 			=> 'attach_image',
                'heading' 		=> __('Image', 'pix-opts'),
                'admin_label'	=> false,
            ),

        ),
        $effects_params,
        pix_get_text_format_params(array(
            'prefix' 		=> '',
            'name' 		=> 'Title',
            'bold' 		=> true,
            'bold_value' 		=> 'font-weight-bold',
            'italic' 		=> true,
            'italic_value' 		=> '',
            'secondary_font' 		=> true,
            'secondary_font_value' 		=> '',
            'color' 		=> true,
            'color_value' 		=> 'heading-default',
            'text_group'            => "Advanced"
        )),
        array(
            array (
                'param_name' 	=> 'title_size',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Title size', 'pix-opts'),
                'admin_label'	=> false,
                'std'           => 'h6',
                'group'         => 'Advanced',
                'value' 		=> array(
                    __('H1','pix-opts') 	=> 'h1',
                    __('H2','pix-opts')	    => 'h2',
                    __('H3','pix-opts')	    => 'h3',
                    __('H4','pix-opts')	    => 'h4',
                    __('H5','pix-opts')	    => 'h5',
                    __('H6','pix-opts')	    => 'h6',
                    __('Custom','pix-opts')	    => 'custom',
                ),
            ),

            array (
                'param_name' 	=> 'title_custom_size',
                'type' 			=> 'textfield',
                'heading' 		=> __('Title Size', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Advanced',
                "dependency" => array(
                    "element" => "title_size",
                    "value" => "custom"
                ),
            ),
        ),
        pix_get_text_format_params(array(
            'prefix' 		=> 'text_',
            'name' 		=> 'Text',
            'bold' 		=> true,
            'bold_value' 		=> '',
            'italic' 		=> true,
            'italic_value' 		=> '',
            'secondary_font' 		=> true,
            'secondary_font_value' 		=> '',
            'text_group'            => "Advanced",
            'color' 		=> true,
            'color_value' 		=> 'body-default',
            'dependency'        => true,
            'dependency_value'      =>  array(
                "element" => "layout",
                "value" => array('big', 'big_padding')
            ),
        )),
        array(
            array (
                'param_name' 	=> 'text_size',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Text font Size', 'pix-opts'),
                'description' 	=> __('Select the size of the text.', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Advanced',
                'value'			=> array_flip(array(
                    ''			=> 'Default (16px)',
                    'text-xs'		=> '12px',
                    'text-sm'		=> '14px',
                    'text-sm'		=> '14px',
                    'text-18' 		=> '18px',
                    'text-20' 		=> '20px',
                    'text-24' 		=> '24px',
                )),
                "dependency" => array(
                    "element" => "layout",
                    "value" => array('big', 'big_padding')
                ),
            ),
        ),
        pix_get_text_format_params(array(
            'prefix' 		=> 'link_',
            'name' 		=> 'Link',
            'bold' 		=> true,
            'bold_value' 		=> 'font-weight-bold',
            'italic' 		=> true,
            'italic_value' 		=> '',
            'secondary_font' 		=> true,
            'secondary_font_value' 		=> '',
            'text_group'            => "Advanced",
            'color' 		=> true,
            'color_value' 		=> 'heading-default',
            'dependency'        => true,
            'dependency_value'      =>  array(
                "element" => "layout",
                "value" => array('big', 'big_padding')
            ),
        )),
        array(
            array (
                'param_name' 	=> 'link_size',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Link font Size', 'pix-opts'),
                'description' 	=> __('Select the size of the text.', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Advanced',
                'value'			=> array_flip(array(
                    ''			=> 'Default (16px)',
                    'text-xs'		=> '12px',
                    'text-sm'		=> '14px',
                    'text-sm'		=> '14px',
                    'text-18' 		=> '18px',
                    'text-20' 		=> '20px',
                    'text-24' 		=> '24px',
                )),
                "dependency" => array(
                    "element" => "layout",
                    "value" => array('big', 'big_padding')
                ),
            ),
        ),

        array (
            array (
                'param_name' 	=> 'rounded_img',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Rounded corners', 'pix-opts'),
                'admin_label'	=> false,
                'std'	=> 'rounded-lg',
                'group'         => 'Advanced',
                'value' 		=> array(
                    __('No','pix-opts') 	=> 'rounded-0',
                    __('Rounded','pix-opts')	    => 'rounded',
                    __('Rounded Large','pix-opts')	    => 'rounded-lg',
                    __('Rounded 5px','pix-opts')	    => 'rounded-xl',
                    __('Rounded 10px','pix-opts')	    => 'rounded-10',
                )
            ),
            array (
                'param_name' 	=> 'animation',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Animation', 'pix-opts'),
                'description' 	=> __('Select the animation of the heading.', 'pix-opts'),
                'admin_label'	=> false,
                'value'			=> $animations,
            ),
            array (
                'param_name' 	=> 'delay',
                'type' 			=> 'textfield',
                'heading' 		=> __('Animation delay (in miliseconds)', 'pix-opts'),
                'admin_label'	=> true,
                "dependency" => array(
                    "element" => "animation",
                    "not_empty" => true
                ),
            ),
            array(
                'type' => 'css_editor',
                'heading' => __( 'Css', 'essentials-core' ),
                'param_name' => 'css',
                'group' => __( 'Design options', 'essentials-core' ),
            ),
        )


    )
));

?>
