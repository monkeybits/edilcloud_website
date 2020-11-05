<?php

// Promo Box -------------------------------------------
vc_map( array (
    'base' 			=> 'pix_promo_box',
    'name' 			=> __('Promo Box', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    'class'         => 'pixfort_element',
    "weight"	=> "1000",
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/promo-box.png',
    'description' 	=> __('Add beautiful promo box', 'pix-opts'),
    'params' 		=> array_merge(
        array (

            array (
                'param_name' 	=> 'image',
                'type' 			=> 'attach_image',
                'heading' 		=> __('Image', 'pix-opts'),
                'admin_label'	=> false,
            ),

            array (
                'param_name' 	=> 'title',
                'type' 			=> 'textfield',
                'heading' 		=> __('Title', 'pix-opts'),
                'admin_label'	=> true,
            ),

            array (
                'param_name' 	=> 'badge',
                'type' 			=> 'textfield',
                'heading' 		=> __('Badge', 'pix-opts'),
                'admin_label'	=> true,
            ),

            array (
                'param_name' 	=> 'link_text',
                'type' 			=> 'textfield',
                'heading' 		=> __('Link Text', 'pix-opts'),
                'admin_label'	=> true,
                'std'         => "Check it out"
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
               'std'            => '300px'
           ),

           array(
               'type' => 'css_editor',
               'heading' => __( 'Css', 'essentials-core' ),
               'param_name' => 'css',
               'group' => __( 'Design options', 'essentials-core' ),
           ),

       ),
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
           'color_value' 		=> 'white',
           'text_group'            => "Advanced"
       )),
       array(
           array (
               'param_name' 	=> 'title_size',
               'type' 			=> 'dropdown',
               'heading' 		=> __('Title size', 'pix-opts'),
               // 'description' 	=> __('Wrap title into H1 instead of H2', 'pix-opts'),
               'admin_label'	=> false,
               'std'           => 'h5',
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
           'color_value' 		=> 'light-opacity-6',
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
           ),



           array (
               'param_name' 	=> 'overlay_color',
               'type' 			=> 'dropdown',
               'heading' 		=> __('Hover overlay color', 'pix-opts'),
               'admin_label'	=> false,
               'group'         => 'Advanced',
               'value' 		=> $colors,
               'std'			=> 'heading-default',
           ),

           array (
               'param_name' 	=> 'overlay_custom_color',
               'type' 			=> 'colorpicker',
               'heading' 		=> __('Custom hover overlay color', 'pix-opts'),
               'admin_label'	=> false,
               'group'         => 'Advanced',
               "dependency" => array(
                     "element" => "overlay_color",
                     "value" => "custom"
                 ),
           ),

           array(
               'param_name'       => 'overlay_opacity',
               'type'     => 'dropdown',
               'heading'    => __('Overlay opacity', 'redux-framework-demo'),
               'group'         => 'Advanced',
               'std'  => 'pix-opacity-4',
               'value'  => array_flip(array(
                   'pix-opacity-10'   => "0%",
                   'pix-opacity-9'   => "10%",
                   'pix-opacity-8'   => "20%",
                   'pix-opacity-7'   => "30%",
                   'pix-opacity-6'   => "40%",
                   'pix-opacity-5'   => "50%",
                   'pix-opacity-4'   => "60%",
                   'pix-opacity-3'   => "70%",
                   'pix-opacity-2'   => "80%",
                   'pix-opacity-1'   => "90%",
               ))
           ),

           array(
         "type" => "dropdown",
         "heading" => __("Hover overlay opacity", "pix-opts"),
         "param_name" => "hover_overlay_opacity",
            'group'         => 'Advanced',
            "std"      => 'pix-hover-opacity-6',
         "value" => array_flip(array(
             "pix-hover-opacity-0" 			=> "100%",
             "pix-hover-opacity-2" 			=> "80%",
             "pix-hover-opacity-4" 			=> "60%",
             "pix-hover-opacity-6" 			=> "40%",
             "pix-hover-opacity-7" 			=> "30%",
             "pix-hover-opacity-8" 			=> "20%",
             "pix-hover-opacity-9" 			=> "10%",
             "pix-hover-opacity-10" 			=> "Disable",

        )),
           ),









           array(
                 "type" => "checkbox",
                 "heading" => __( "Badge format", "pix-opts" ),
                 "param_name" => "badge_bold",
                 'group'         => 'Badge',
                 "value" => array("Bold" => "font-weight-bold",),
                 'std'      => 'font-weight-bold'
             ),
           array(
                 "type" => "checkbox",
                 "param_name" => "badge_italic",
                 'group'         => 'Badge',
                 "value" => array("Italic" => "font-italic",),
             ),
           array(
                 "type" => "checkbox",
                 "param_name" => "badge_secondary_font",
                 "value" => array("Secondary font" => "secondary-font",),
                 'group'         => 'Badge',
             ),


           array (
               'param_name' 	=> 'badge_text_color',
               'type' 			=> 'dropdown',
               'heading' 		=> __('Text color', 'pix-opts'),
               'admin_label'	=> false,
               'value' 		=> $colors,
               'std'           => 'primary',
               'group'         => 'Badge',
           ),

           array (
               'param_name' 	=> 'badge_text_custom_color',
               'type' 			=> 'colorpicker',
               'heading' 		=> __('Text custom color', 'pix-opts'),
               'admin_label'	=> false,
               "dependency" => array(
                     "element" => "badge_text_color",
                     "value" => "custom"
                 ),
                 'group'         => 'Badge',
           ),

           array (
               'param_name' 	=> 'badge_bg_color',
               'type' 			=> 'dropdown',
               'heading' 		=> __('Background color', 'pix-opts'),
               'admin_label'	=> false,
               'value' 		=> $bg_colors,
               'std'			=> 'white',
                'group'         => 'Badge',
           ),
           array (
               'param_name' 	=> 'badge_custom_bg_color',
               'type' 			=> 'colorpicker',
               'heading' 		=> __('Custom Background Color', 'pix-opts'),
               'admin_label'	=> false,
               "dependency" => array(
                     "element" => "badge_bg_color",
                     "value" => "custom"
                 ),
                 'group'         => 'Badge',
           ),


           array (
               'param_name' 	=> 'badge_text_custom_size',
               'type' 			=> 'textfield',
               'heading' 		=> __('Text Size', 'pix-opts'),
               'admin_label'	=> false,
               'value'          => '12px',
                 'group'         => 'Badge',
           ),


       ),
       $effects_params
    )

));

 ?>
