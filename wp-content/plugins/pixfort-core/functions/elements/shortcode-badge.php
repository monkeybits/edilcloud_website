<?php

// Badge -----------------------------
vc_map( array (
    'base' 			=> 'pix_badge',
    'name' 			=> __('Badge', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    'class'         => 'pixfort_element',
    "weight"	=> "1000",
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/badge.png',
    'description' 	=> __('Add nice badge box', 'pix-opts'),
    'params' 		=> array (

        array (
            'param_name' 	=> 'text',
            'type' 			=> 'textfield',
            'heading' 		=> __('Text', 'pix-opts'),
            'admin_label'	=> true,
        ),

        array(
            "type" => "checkbox",
            "heading" => __( "Title format", "pix-opts" ),
            "param_name" => "bold",
            "value" => array("Bold" => "font-weight-bold"),
            "std" => "font-weight-bold",
            'save_always' => true,
        ),
        array(
            "type" => "checkbox",
            "param_name" => "italic",
            "value" => array("Italic" => "font-italic",),
        ),
        array(
            "type" => "checkbox",
            "param_name" => "secondary_font",
            "value" => array("Secondary font" => "secondary-font",),
            "std" => "secondary-font",
            'save_always' => true,
        ),

        array(
            "type" => "checkbox",
            "heading" => __( "Rounded corners", "pix-opts" ),
            "param_name" => "rounded",
            "value" => array("Yes" => "badge-pill",),
        ),



        array (
            'param_name' 	=> 'text_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Text color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'std'           => 'primary'
        ),

        array (
            'param_name' 	=> 'text_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Text custom color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "text_color",
                "value" => "custom"
            ),
        ),

        array (
            'param_name' 	=> 'bg_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Background color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $bg_colors,
            'std'			=> 'primary-light',
            "dependency" => array(
                "element" => "media_type",
                "value" => array("icon", "char")
            ),
        ),
        array (
            'param_name' 	=> 'custom_bg_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Custom Background Color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "bg_color",
                "value" => "custom"
            ),
        ),

        array (
            'param_name' 	=> 'text_size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Text size', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> array(
                __('H1','pix-opts') 	=> 'h1',
                __('H2','pix-opts')	    => 'h2',
                __('H3','pix-opts')	    => 'h3',
                __('H4','pix-opts')	    => 'h4',
                __('H5','pix-opts')	    => 'h5',
                __('H6','pix-opts')	    => 'h6',
                __('Custom','pix-opts')	    => 'custom',
            ),
            'std' => 'h6',
        ),

        array (
            'param_name' 	=> 'text_custom_size',
            'type' 			=> 'textfield',
            'heading' 		=> __('Text Size', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "text_size",
                "value" => "custom"
            ),
        ),

        array(
            "type" => "dropdown",
            "heading" => __("Shadow Style", "js_composer"),
            "param_name" => "style",
            "admin_label" => true,
            "value" => array_flip(array(
                "" => "Default",
                "1"       => "Small shadow",
                "2"       => "Medium shadow",
                "3"       => "Large shadow",
                "4"       => "Inverse Small shadow",
                "5"       => "Inverse Medium shadow",
                "6"       => "Inverse Large shadow",
            )),
            'save_always' => true,
            'group' => __( 'Advanced', 'essentials-core' ),
            "description" => __( "Please select the style you wish for the box to display in.", "js_composer")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Shadow Hover Style", "js_composer"),
            "param_name" => "hover_effect",
            "admin_label" => true,
            "value" => array_flip(array(
                ""       => "None",
                "1"       => "Small hover shadow",
                "2"       => "Medium hover shadow",
                "3"       => "Large hover shadow",
                "4"       => "Inverse Small hover shadow",
                "5"       => "Inverse Medium hover shadow",
                "6"       => "Inverse Large hover shadow",
            )),
            'save_always' => true,
            'group' => __( 'Advanced', 'essentials-core' ),
            "description" => __( "Please select the style you wish for the box to display in.", "js_composer")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Hover Animation", "js_composer"),
            "param_name" => "add_hover_effect",
            "admin_label" => true,
            "value" => array_flip(array(
                ""       => "None",
                "1"       => "Fly Small",
                "2"       => "Fly Medium",
                "3"       => "Fly Large",
                "4"       => "Scale Small",
                "5"       => "Scale Medium",
                "6"       => "Scale Large",
                "7"       => "Scale Inverse Small",
                "8"       => "Scale Inverse Medium",
                "9"       => "Scale Inverse Large",
            )),
            'save_always' => true,
            'group' => __( 'Advanced', 'essentials-core' ),
            "description" => __( "Please select the style you wish for the box to display in.", "js_composer")
        ),


        array (
            'param_name' 	=> 'animation',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Animation', 'pix-opts'),
            'description' 	=> __('Select the animation of the heading.', 'pix-opts'),
            'admin_label'	=> false,
            'group' => __( 'Advanced', 'essentials-core' ),
            'value'			=> $animations,
        ),

        array (
            'param_name' 	=> 'delay',
            'type' 			=> 'textfield',
            'heading' 		=> __('Animation delay (in miliseconds)', 'pix-opts'),
            'admin_label'	=> true,
            'group' => __( 'Advanced', 'essentials-core' ),
            "dependency" => array(
                "element" => "animation",
                "not_empty" => true
            ),
        ),


        array (
            'param_name' 	=> 'element_div',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Badge inside a container', 'pix-opts'),
            "description" => __( "if enabled, other elements won't show on the same line.", "js_composer"),
            'admin_label'	=> false,
            'value'			=> array_flip(array(
                '' 		=> 'Disabled',
                'text-center' 		=> 'Center align',
                'text-left' 		=> 'Left align',
                'text-right' 		=> 'Right align',
            )),
        ),

        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'essentials-core' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'essentials-core' ),
        ),
        array(
            'type' => '',
            'param_name' => 'padding',
            'std' => '5px',
        ),



    )
));

?>
