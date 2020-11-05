<?php

// Animated Heading
vc_map( array (
    'base' 			=> 'animated-heading',
    'name' 			=> __('Animated Heading', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/animated-heading.gif',
    'description' 	=> __('Add awesome animated heading', 'pix-opts'),
    'params' 		=> array (

        array (
            'param_name' 	=> 'title',
            'type' 			=> 'textfield',
            'heading' 		=> __('Text before', 'pix-opts'),
            'admin_label'	=> true,
        ),


        array(
            'type' => 'param_group',
            'value' => '',
            'param_name' => 'words',
            'heading' 		=> __('Scrolling words', 'pix-opts'),
            'description' 	=> __('Add each word in the desired order.', 'pix-opts'),
            // Note params is mapped inside param-group:
            'params' => array(
                array (
                    'param_name' 	=> 'word',
                    'type' 			=> 'textfield',
                    'heading' 		=> __('Word', 'pix-opts'),
                    'admin_label'	=> true,
                ),

                array(
                    "type" => "checkbox",
                    "heading" => __( "Different color", "pix-opts" ),
                    "param_name" => "has_color",
                    "value" => __( "Yes", "pix-opts" ),
                ),

                array (
                    'param_name' 	=> 'word_color',
                    'type' 			=> 'dropdown',
                    'heading' 		=> __('Color', 'pix-opts'),
                    'admin_label'	=> false,
                    'value' 		=> $colors,
                    "dependency" => array(
                        "element" => "has_color",
                        'not_empty' => true,
                    ),
                ),

                array (
                    'param_name' 	=> 'word_custom_color',
                    'type' 			=> 'colorpicker',
                    'heading' 		=> __('Custom color', 'pix-opts'),
                    'admin_label'	=> false,
                    'value'       => '#333',
                    "dependency" => array(
                        "element" => "word_color",
                        "value" => "custom"
                    ),
                ),


            )
        ),

        array (
            'param_name' 	=> 'text_after',
            'type' 			=> 'textfield',
            'heading' 		=> __('Text after', 'pix-opts'),
            'admin_label'	=> false,
        ),


        array(
            "type" => "checkbox",
            "heading" => __( "Title format", "pix-opts" ),
            "param_name" => "title_bold",
            'group' => __( 'Advanced', 'essentials-core' ),
            "value" => array("Bold" => "font-weight-bold"),
            "std" => "font-weight-bold"
        ),
        array(
            "type" => "checkbox",
            "param_name" => "title_italic",
            'group' => __( 'Advanced', 'essentials-core' ),
            "value" => array("Italic" => "font-italic",),
        ),
        array(
            "type" => "checkbox",
            "param_name" => "title_secondary_font",
            'group' => __( 'Advanced', 'essentials-core' ),
            "value" => array("Secondary font" => "secondary-font",),
        ),
        array(
            "type" => "checkbox",
            "param_name" => "space_after",
            'group' => __( 'Advanced', 'essentials-core' ),
            "value" => array("Add space after the animated text" => "space_after",),
        ),
        array(
            "type" => "checkbox",
            "param_name" => "br_after",
            'group' => __( 'Advanced', 'essentials-core' ),
            "value" => array("Add break line after the animated text" => "space_after",),
        ),

        array (
            'param_name' 	=> 'size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Font size', 'pix-opts'),
            'description' 	=> __('Select the size of the font.', 'pix-opts'),
            'admin_label'	=> false,
            'group' => __( 'Advanced', 'essentials-core' ),
            'value'			=> array_flip(array(
                'h1'		=> 'H1',
                'h2'		=> 'H2',
                'h3' 		=> 'H3',
                'h4' 		=> 'H4',
                'h5' 		=> 'H5',
                'h6' 		=> 'H6',
                'p' 		=> 'p',
            )),
        ),

        array (
            'param_name' 	=> 'display',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Bigger Text', 'pix-opts'),
            'description' 	=> __('Larger heading text size to stand out.', 'pix-opts'),
            'admin_label'	=> false,
            'group' => __( 'Advanced', 'essentials-core' ),
            'value'			=> array_flip(array(
                ''		=> 'None',
                'display-1'		=> 'Display 1',
                'display-2'		=> 'Display 2',
                'display-3'		=> 'Display 3',
                'display-4'		=> 'Display 4',
            )),
        ),

        array (
            'param_name' 	=> 'title_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Title color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'group' => __( 'Advanced', 'essentials-core' ),
            'std'           => 'heading-default'
        ),

        array (
            'param_name' 	=> 'title_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Custom text color', 'pix-opts'),
            'admin_label'	=> false,
            'value'       => '#333',
            'group' => __( 'Advanced', 'essentials-core' ),
            "dependency" => array(
                "element" => "title_color",
                "value" => "custom"
            ),
        ),



        array (
            'param_name' 	=> 'slogan',
            'type' 			=> 'textfield',
            'heading' 		=> __('Slogan', 'pix-opts'),
            'description' 	=> __('Line Style only', 'pix-opts'),
            'admin_label'	=> true,
        ),



        array(
            "type" => "checkbox",
            "heading" => __( "Slogan format", "pix-opts" ),
            "param_name" => "slogan_bold",
            'group' => __( 'Advanced', 'essentials-core' ),
            "value" => array("Bold" => "font-weight-bold"),
            "std" => "font-weight-bold"
        ),
        array(
            "type" => "checkbox",
            "param_name" => "slogan_italic",
            'group' => __( 'Advanced', 'essentials-core' ),
            "value" => array("Italic" => "font-italic",),
        ),
        array(
            "type" => "checkbox",
            "param_name" => "slogan_font",
            'group' => __( 'Advanced', 'essentials-core' ),
            "value" => array("Secondary font" => "secondary-font",),
        ),


        array (
            'param_name' 	=> 'slogan_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Slogan color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'group' => __( 'Advanced', 'essentials-core' ),
            'std'           => 'primary'
        ),

        array (
            'param_name' 	=> 'slogan_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Custom text color', 'pix-opts'),
            'admin_label'	=> false,
            'value'       => '#333',
            'group' => __( 'Advanced', 'essentials-core' ),
            "dependency" => array(
                "element" => "slogan_color",
                "value" => "custom"
            ),
        ),
        array (
            'param_name' 	=> 'style',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Animation Style', 'pix-opts'),
            'admin_label'	=> true,
            'std'              => "slide-inverse",
            'value'			=> array_flip(array(
                'slide-inverse' 		 => 'Slide Up',
                'pixfade' 		         => 'Fade',
                'loading-bar'			 => 'Loading bar',
                'slide' 		         => 'Slide Down',
                'zoom' 		             => 'Zoom',
                'push' 		             => 'Push',
                'rotate-1'			     => 'Rotate',
            )),
        ),

        array (
            'param_name' 	=> 'position',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Position', 'pix-opts'),
            'description' 	=> __('Select the position of the heading.', 'pix-opts'),
            'admin_label'	=> false,
            "std"           => "center",
            'value'			=> array_flip(array(
                'left'			=> 'Left',
                'center'		=> 'Center',
                'right' 		=> 'Right',
            )),
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
));

?>
