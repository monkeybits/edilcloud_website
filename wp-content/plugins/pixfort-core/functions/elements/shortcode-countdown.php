<?php
// Countdown ----------------------------------------------
vc_map( array (
    'base' 			=> 'pix_countdown',
    'name' 			=> __('Countdown', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/countdown.png',
    'description' 	=> __('Add countdown to a specific date', 'pix-opts'),
    'params' 		=> array (

        array (
            'param_name' 	=> 'date',
            'type' 			=> 'textfield',
            'heading' 		=> __('Lunch Date', 'pix-opts'),
            'desc' 			=> __('Format: 12/30/2022 12:00:00 month/day/year hour:minute:second', 'pix-opts'),
            'admin_label'	=> true,
            'value'			=> '12/30/2021 12:00:00',
            'save_always' => true,
        ),

        array (
            'param_name' 	=> 'link',
            'type' 			=> 'textfield',
            'heading' 		=> __('Link', 'pix-opts'),
            'admin_label'	=> true,
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
            "type" => "checkbox",
            "heading" => __( "Numbers format", "pix-opts" ),
            "param_name" => "bold",
            "value" => array("Bold" => "font-weight-bold"),
            "std" => "font-weight-bold",
            'save_always' => true,
            'group' => __( 'Advanced', 'essentials-core' ),
        ),
        array(
            "type" => "checkbox",
            "param_name" => "italic",
            "value" => array("Italic" => "font-italic",),
            'group' => __( 'Advanced', 'essentials-core' ),
        ),
        array(
            "type" => "checkbox",
            "param_name" => "secondary_font",
            "value" => array("Secondary font" => "secondary-font",),
            "std" => "secondary-font",
            'save_always' => true,
            'group' => __( 'Advanced', 'essentials-core' ),
        ),


        array (
            'param_name' 	=> 'numbers_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Numbers color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'std'			=> 'primary',
            'group' => __( 'Advanced', 'essentials-core' ),
        ),

        array (
            'param_name' 	=> 'numbers_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Numbers custom color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "numbers_color",
                "value" => "custom"
            ),
        ),


        array (
            'param_name' 	=> 'numbers_size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Numbers size', 'pix-opts'),
            'admin_label'	=> false,
            'std'	=> 'h1',
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
            'description' 	=> __('Larger numbers text size to stand out.', 'pix-opts'),
            'admin_label'	=> false,
            'std'	=> 'display-4',
            'value'			=> array_flip(array(
                ''		=> 'None',
                'display-1'		=> 'Display 1',
                'display-2'		=> 'Display 2',
                'display-3'		=> 'Display 3',
                'display-4'		=> 'Display 4',
            )),
            "dependency" => array(
                "element" => "numbers_size",
                "value" => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6')
            ),
        ),

        array (
            'param_name' 	=> 'numbers_custom_size',
            'type' 			=> 'textfield',
            'heading' 		=> __('Numbers Size', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "numbers_size",
                "value" => "custom"
            ),
        ),

        array (
            'param_name' 	=> 'content_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Text color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'std'			=> 'text-dark-opacity-2',
            'group' => __( 'Advanced', 'essentials-core' ),
        ),

        array (
            'param_name' 	=> 'content_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Content text color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "content_color",
                "value" => "custom"
            ),
            'group' => __( 'Advanced', 'essentials-core' ),
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
