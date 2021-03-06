<?php

// Image -----------------------------
vc_map( array (
    'base' 			=> 'pix_img',
    'name' 			=> __('Image', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/image.jpg',
    'description' 	=> __('Add image with advanced pixfort styling', 'pix-opts'),
    'params' 		=> array_merge(
        array (

            array (
                'param_name' 	=> 'image',
                'type' 			=> 'attach_image',
                'heading' 		=> __('Image', 'pix-opts'),
                'admin_label'	=> false,
            ),


            array (
                'param_name' 	=> 'rounded_img',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Rounded corners', 'pix-opts'),
                'admin_label'	=> false,
                'value' 		=> array(
                    __('No','pix-opts') 	=> 'rounded-0',
                    __('Rounded','pix-opts')	    => 'rounded',
                    __('Rounded Large','pix-opts')	    => 'rounded-lg',
                    __('Rounded 5px','pix-opts')	    => 'rounded-xl',
                    __('Rounded 10px','pix-opts')	    => 'rounded-10',
                )
            ),

            array (
                'param_name' 	=> 'alt',
                'type' 			=> 'textfield',
                'heading' 		=> __('Image alternative text', 'pix-opts'),
                'admin_label'	=> true,
            ),

            array (
                'param_name' 	=> 'align',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Image alignment', 'pix-opts'),
                'description' 	=> __('Select the position of the image.', 'pix-opts'),
                'admin_label'	=> false,
                'value'			=> array_flip(array(
                    'text-left'			=> 'Left',
                    'text-center'		=> 'Center',
                    'text-right' 		=> 'Right',
                )),
            ),

            array (
                'param_name' 	=> 'width',
                'type' 			=> 'textfield',
                'heading' 		=> __('Width (Optional)', 'pix-opts'),
                "description" => __( "Please input the value (with the unit: %, px,.. etc).", "pix-opts"),
                'admin_label'	=> false,
            ),
            array (
                'param_name' 	=> 'height',
                'type' 			=> 'textfield',
                'heading' 		=> __('Height (Optional)', 'pix-opts'),
                "description" => __( "Please input the value (with the unit: %, px,.. etc).", "pix-opts"),
                'admin_label'	=> false,
            ),

            array (
                'param_name' 	=> 'link',
                'type' 			=> 'textfield',
                'heading' 		=> __('Link', 'pix-opts'),
                'admin_label'	=> true,
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

              array(
                    "type" => "checkbox",
                    "heading" => __( "Animation type", "pix-opts" ),
                    "param_name" => "pix_scroll_parallax",
                    "value" => array_flip(array(
                      "scroll_parallax"       => "Scroll Parallax",
                  )),
                ),
                array(
                      "type" => "checkbox",
                      "param_name" => "pix_tilt",
                      "value" => array_flip(array(
                        "tilt"       => "3D Hover",
                    )),
                  ),
                array (
                    'param_name' 	=> 'xaxis',
                    'type' 			=> 'textfield',
                    'heading' 		=> __('X axis', 'pix-opts'),
                    'admin_label'	=> false,
                    'std'			=> '0',
                    "dependency" => array(
                          "element" => "pix_scroll_parallax",
                          "value" => "scroll_parallax"
                      ),
                ),
                array (
                    'param_name' 	=> 'yaxis',
                    'type' 			=> 'textfield',
                    'heading' 		=> __('Y axis', 'pix-opts'),
                    'admin_label'	=> false,
                    'std'			=> '0',
                    "dependency" => array(
                          "element" => "pix_scroll_parallax",
                          "value" => "scroll_parallax"
                      ),
                ),
                array (
                    'param_name' 	=> 'pix_tilt_size',
                    'type' 			=> 'dropdown',
                    'heading' 		=> __('3d hover size', 'pix-opts'),
                    'admin_label'	=> false,
                    'value'			=> array_flip(array(
                        'tilt'			=> 'Default',
                        'tilt_big'		=> 'Big',
                        'tilt_small' 		=> 'Small',
                    )),
                    "dependency" => array(
                          "element" => "pix_tilt",
                          "not_empty" => true
                      ),
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
               "type" => "dropdown",
               "heading" => __( "Infinite Animation type", "pix-opts" ),
               "param_name" => "pix_infinite_animation",
               "value" => $infinite_animation,
               'admin_label'	=> false,
           ),
            array(
               "type" => "dropdown",
               "heading" => __( "Infinite Animation Speed", "pix-opts" ),
               "param_name" => "pix_infinite_speed",
               "value" => $animation_speeds,
               'admin_label'	=> false,
               "dependency" => array(
                     "element" => "pix_infinite_animation",
                     "not_empty" => true
                 ),
           ),

           array (
               'param_name' 	=> 'img_div',
               'type' 			=> 'dropdown',
               'heading' 		=> __('Image inside a container', 'pix-opts'),
               "description" => __( "if enabled, other elements won't show on the same line.", "js_composer"),
               'admin_label'	=> false,
               'value'			=> array_flip(array(
                   '' 		=> 'Disabled',
                   'text-center' 		=> 'Center align',
                   'text-left' 		=> 'Left align',
                   'text-right' 		=> 'Right align',
               )),
           ),
           array (
               'param_name' 	=> 'pix_scale_in',
               'type' 			=> 'dropdown',
               'heading' 		=> __('Image Scale In effect', 'pix-opts'),
               "description" => __( "Scale the image down to the default size when scrolling.", "js_composer"),
               'admin_label'	=> false,
               'value'			=> array_flip(array(
                   '' 		=> 'Disabled',
                   'pix-scale-in-xs' 		=> 'Extra Small scale',
                   'pix-scale-in-sm' 		=> 'Small scale',
                   'pix-scale-in' 		=> 'Normal scale',
                   'pix-scale-in-lg' 		=> 'Large scale',
               )),
           ),

           array(
               "type" => "textfield",
               "heading" => __("Extra class names", "my-text-domain"),
               "param_name" => "el_class",
               "description" => __("Add additional custom classes to the image.", "my-text-domain"),
               'value'       => '',
           ),

            array(
              'type' => 'css_editor',
              'heading' => __( 'Css', 'essentials-core' ),
              'param_name' => 'css',
              'group' => __( 'Design options', 'essentials-core' ),
              ),
        ),
        $effects_params
    )
));

 ?>
