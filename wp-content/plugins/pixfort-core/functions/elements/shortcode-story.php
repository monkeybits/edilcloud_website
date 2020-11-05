<?php

// Story -----------------------------
vc_map( array (
    'base' 			=> 'pix_story',
    'name' 			=> __('Story', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/story.jpg',
    'description' 	=> __('Add beautiful story element', 'pix-opts'),
    'params' 		=> array_merge(
        array (

            array (
                'param_name' 	=> 'image',
                'type' 			=> 'attach_image',
                'heading' 		=> __('Image', 'pix-opts'),
                'admin_label'	=> false,
            ),
            array (
                'param_name' 	=> 'alt',
                'type' 			=> 'textfield',
                'heading' 		=> __('Image alternative text', 'pix-opts'),
                'admin_label'	=> true,
            ),
            array (
                'param_name' 	=> 'title',
                'type' 			=> 'textfield',
                'heading' 		=> __('Story title', 'pix-opts'),
                // "description" => __( "", "pix-opts"),
                'value'         => '',
                'admin_label'	=> false,
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
                'heading' 		=> __('Size', 'pix-opts'),
                "description" => __( "Please input the size of the story image in pixels (without the unit, for example: 200)", "pix-opts"),
                'value'         => 200,
                'admin_label'	=> false,
            ),
            // array (
            //     'param_name' 	=> 'height',
            //     'type' 			=> 'textfield',
            //     'heading' 		=> __('Height (Optional)', 'pix-opts'),
            //     "description" => __( "Please input the value (with the unit: %, px,.. etc).", "pix-opts"),
            //     'admin_label'	=> false,
            // ),







            array (
                'param_name' 	=> 'text_size',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Size', 'pix-opts'),
                'description' 	=> __('Select the size of the text.', 'pix-opts'),
                'admin_label'	=> false,
                'value'			=> array_flip(array(
                    ''			=> 'Default (16px)',
                    'text-xs'		=> '12px',
                    'text-sm'		=> '14px',
                    'text-sm'		=> '14px',
                    'text-18' 		=> '18px',
                    'text-20' 		=> '20px',
                    'text-24' 		=> '24px',
                )),
                "group"   => "Advanced",
            ),

            array(
                  "type" => "checkbox",
                  "heading" => __( "Title format", "pix-opts" ),
                  "param_name" => "bold",
                  "value" => array("Bold" => "font-weight-bold"),
                  "group"   => "Advanced",
              ),
            array(
                  "type" => "checkbox",
                  "param_name" => "italic",
                  "value" => array("Italic" => "font-italic",),
                  "group"   => "Advanced",
              ),
            array(
                  "type" => "checkbox",
                  "param_name" => "secondary_font",
                  "value" => array("Secondary font" => "secondary-font",),
                  "group"   => "Advanced",
              ),

            array (
                'param_name' 	=> 'content_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Title color', 'pix-opts'),
                'admin_label'	=> false,
                'value' 		=> $colors,
                'std'			=> '',
                "group"   => "Advanced",
            ),


            array (
                'param_name' 	=> 'content_custom_color',
                'type' 			=> 'colorpicker',
                'heading' 		=> __('Title custom color', 'pix-opts'),
                'admin_label'	=> false,
                "group"   => "Advanced",
                "dependency" => array(
                      "element" => "content_color",
                      "value" => "custom"
                  ),
            ),

            array (
                'param_name' 	=> 'position',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Title position', 'pix-opts'),
                'description' 	=> __('Select the position of the title.', 'pix-opts'),
                'admin_label'	=> false,
                "group"   => "Advanced",
                "group"   => "Advanced",
                'value'			=> array_flip(array(
                    'text-center'		=> 'Center',
                    'text-left'			=> 'Left',
                    'text-right' 		=> 'Right',
                )),
            ),






            array(
                "type" => "checkbox",
                "heading" => __( "Enable circle color border", "pix-opts" ),
                "param_name" => "outer_border",
                "value" => array("Yes" => true),
                "std"    => true,
                'save_always' => true,
                "group"   => "Advanced",
            ),
            array (
                'param_name' 	=> 'color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Circle Color', 'pix-opts'),
                'description' 	=> __('Select the color of the circle.', 'pix-opts'),
                'admin_label'	=> false,
                "group"   => "Advanced",
                'value'			=> $bg_colors,
                'std'           => "gradient-primary",
                "dependency" => array(
                    "element" => "outer_border",
                    "not_empty" => true
                ),
            ),
            array (
                'param_name' 	=> 'outer_custom_color',
                'type' 			=> 'colorpicker',
                'heading' 		=> __('Custom border color', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Advanced',
                "dependency" => array(
                      "element" => "color",
                      "value" => "custom"
                  ),
            ),
            array(
                "type" => "checkbox",
                "heading" => __( "Remove inner white border", "pix-opts" ),
                "param_name" => "inner_border",
                "value" => array("Yes" => 'no-border'),
                "group"   => "Advanced",
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
                "group"   => "Advanced",
            ),
            array(
                "type" => "checkbox",
                "param_name" => "pix_tilt",
                "value" => array_flip(array(
                    "tilt"       => "3D Hover",
                )),
                "group"   => "Advanced",
            ),
            array (
                'param_name' 	=> 'xaxis',
                'type' 			=> 'textfield',
                'heading' 		=> __('X axis', 'pix-opts'),
                'admin_label'	=> false,
                'std'			=> '100',
                "dependency" => array(
                    "element" => "pix_scroll_parallax",
                    "value" => "scroll_parallax"
                ),
                "group"   => "Advanced",
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
                "group"   => "Advanced",
            ),
            array (
                'param_name' 	=> 'pix_tilt_size',
                'type' 			=> 'dropdown',
                'heading' 		=> __('3d hover size', 'pix-opts'),
                // 'description' 	=> __('Select the position of the image.', 'pix-opts'),
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
                "group"   => "Advanced",
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
                "group"   => "Advanced",
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
                "group"   => "Advanced",
            ),

            array(
                  'type' => 'param_group',
                  'value' => '',
                  'param_name' => 'stories',
                  'heading' 		=> __('Stories', 'pix-opts'),
                  'description' 	=> __('Add each circle in the desired order.', 'pix-opts'),
                  'group' => __( 'Story images', 'essentials-core' ),
                  // Note params is mapped inside param-group:
                  'params' => array(
                      array (
                          'param_name' 	=> 'img',
                          'type' 			=> 'attach_image',
                          'heading' 		=> __('Image', 'pix-opts'),
                          'admin_label'	=> false,
                      ),


                  )

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
