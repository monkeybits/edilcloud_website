<?php

// Heading -----------------------------
vc_map( array (
    'base' 			=> 'heading',
    'name' 			=> __('Heading', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/heading.png',
    'description' 	=> __('Create custom heading element', 'pix-opts'),
    'params' 		=> array (

        array (
            'param_name' 	=> 'title',
            'type' 			=> 'textfield',
            'heading' 		=> __('Title', 'pix-opts'),
            'admin_label'	=> true,
        ),

        array(
            "type" => "checkbox",
            "heading" => __( "Title format", "pix-opts" ),
            "param_name" => "bold",
            "value" => array("Bold" => "font-weight-bold"),
            "std" => "font-weight-bold"
        ),
        array(
            "type" => "checkbox",
            "param_name" => "italic",
            "value" => array("Italic" => "font-italic",),
        ),

        array (
            'param_name' 	=> 'title_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Title color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'std'			=> '',
        ),

        array (
            'param_name' 	=> 'title_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Title color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "title_color",
                "value" => "custom"
            ),
        ),

        array (
            'param_name' 	=> 'title_size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Title size', 'pix-opts'),
            'description' 	=> __('Wrap title into H1 instead of H2', 'pix-opts'),
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
        ),

        array (
            'param_name' 	=> 'display',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Bigger Text', 'pix-opts'),
            'description' 	=> __('Larger heading text size to stand out.', 'pix-opts'),
            'admin_label'	=> false,
            'value'			=> array_flip(array(
                ''		=> 'None',
                'display-1'		=> 'Display 1',
                'display-2'		=> 'Display 2',
                'display-3'		=> 'Display 3',
                'display-4'		=> 'Display 4',
            )),
            "dependency" => array(
                "element" => "title_size",
                "value" => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6')
            ),
        ),

        array (
            'param_name' 	=> 'title_custom_size',
            'type' 			=> 'textfield',
            'heading' 		=> __('Title Size', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "title_size",
                "value" => "custom"
            ),
        ),

        array (
            'param_name' 	=> 'position',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Position', 'pix-opts'),
            'description' 	=> __('Select the position of the heading.', 'pix-opts'),
            'admin_label'	=> false,
            'value'			=> array_flip(array(
                'text-center'		=> 'Center',
                'text-left'			=> 'Left',
                'text-right' 		=> 'Right',
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


        array (
            'param_name' 	=> 'image',
            'type' 			=> 'attach_image',
            'heading' 		=> __('Use image as text color', 'pix-opts'),
            'description' 	=> __('The image will be visible inside the text characters.', 'pix-opts'),
            'admin_label'	=> false,
            'group'         => "Advanced",
        ),

        array (
            'param_name' 	=> 'heading_id',
            'type' 			=> 'textfield',
            'heading' 		=> __('Heading ID', 'pix-opts'),
            'admin_label'	=> true,
            'group'         => "Advanced",
        ),

        array (
            'param_name' 	=> 'max_width',
            'type' 			=> 'textfield',
            'heading' 		=> __('Text max width (Optional)', 'pix-opts'),
            'description' 	=> __('Input text width limit (with unit, for example 400px) instead of filling the width of the container.', 'pix-opts'),
            'admin_label'	=> true,
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
