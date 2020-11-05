<?php

// Photo Box -------------------------------------------
vc_map( array (
    'base' 			=> 'pix_photo_box',
    'name' 			=> __('Photo Box', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/photo-box.png',
    'description' 	=> __('Beautiful photo showcase', 'pix-opts'),
    'params' 		=> array_merge(array (

        array (
            'param_name' 	=> 'title',
            'type' 			=> 'textfield',
            'heading' 		=> __('Title', 'pix-opts'),
            'admin_label'	=> true,
        ),

        array (
            'param_name' 	=> 'image',
            'type' 			=> 'attach_image',
            'heading' 		=> __('Image', 'pix-opts'),
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
                  "param_name" => "pix_color_effect",
                  "value" => array_flip(array(
                    "pix-hover-colored"       => "Hover color effect",
                )),
                "std"       => true
              ),
            array(
                  "type" => "checkbox",
                  "param_name" => "pix_title_effect",
                  "value" => array_flip(array(
                    "pix-hover-title"       => "Hover title fade in",
                )),
                "std"       => true
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
           'param_name' 	=> 'height',
           'type' 			=> 'textfield',
           'heading' 		=> __('Box minimum height', 'pix-opts'),
           'admin_label'	=> true,
           'std'            => '400px'
       ),



       array(
             "type" => "checkbox",
             "heading" => __( "Title format", "pix-opts" ),
             "param_name" => "bold",
             'group' => __( 'Advanced', 'essentials-core' ),
             "value" => array("Bold" => "font-weight-bold"),
             "std" => "font-weight-bold"
         ),
       array(
             "type" => "checkbox",
             "param_name" => "italic",
             'group' => __( 'Advanced', 'essentials-core' ),
             "value" => array("Italic" => "font-italic",),
         ),
       array(
             "type" => "checkbox",
             "param_name" => "secondary_font",
             'group' => __( 'Advanced', 'essentials-core' ),
             "value" => array("Secondary font" => "secondary-font",),
         ),


       array (
           'param_name' 	=> 'title_color',
           'type' 			=> 'dropdown',
           'heading' 		=> __('Title color', 'pix-opts'),
           'admin_label'	=> false,
           'group' => __( 'Advanced', 'essentials-core' ),
           'value' 		=> $colors,
           'std'			=> 'heading-default',
       ),

       array (
           'param_name' 	=> 'title_custom_color',
           'type' 			=> 'colorpicker',
           'heading' 		=> __('Title color', 'pix-opts'),
           'admin_label'	=> false,
           'group' => __( 'Advanced', 'essentials-core' ),
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
           'group' => __( 'Advanced', 'essentials-core' ),
           'std' => 'h5',
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
           'group' => __( 'Advanced', 'essentials-core' ),
           "dependency" => array(
                 "element" => "title_size",
                 "value" => "custom"
             ),
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
