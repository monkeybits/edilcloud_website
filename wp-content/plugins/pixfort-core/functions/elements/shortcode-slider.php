<?php


$slider_btns = $button_params;
unset($slider_btns[0]);
unset($slider_btns[1]);
unset($slider_btns[2]);
unset($slider_btns[3]);



$popup_posts = get_posts([
    'post_type' => 'pixpopup',
    'post_status' => 'publish',
    'numberposts' => -1
    // 'order'    => 'ASC'
]);

$popups = array();
$popups[''] = "Disabled";
foreach ($popup_posts as $key => $value) {
    $popups[$value->ID] = $value->post_title;
}



// Slider -----------------------------
vc_map( array (
    'base' 			=> 'pix_slider',
    'name' 			=> __('pixfort Slider', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/slider.png',
    'description' 	=> __('Add clean pixfort slider', 'pix-opts'),
    // "front_enqueue_js" => PIX_CORE_PLUGIN_URI . 'functions/js/views/slider.js',
    'params' 		=> array_merge(
        array (

            array(
        		  'type' => 'param_group',
        		  'value' => '',
        		  'param_name' => 'items',
        		  'heading' 		=> __('Images', 'pix-opts'),
        		  'params' => array(

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
                          'heading' 		=> __('Title', 'pix-opts'),
                          'admin_label'	=> true,
                      ),
                      array (
                          'param_name' 	=> 'text',
                          'type' 			=> 'textfield',
                          'heading' 		=> __('Slide text', 'pix-opts'),
                          'admin_label'	=> false,
                      ),
                      array (
                          'param_name' 	=> 'btn_text',
                          'type' 			=> 'textfield',
                          'heading' 		=> __('Button text', 'pix-opts'),
                          'description'     => 'Leave empty to apply the link on the title.',
                          'admin_label'	=> true,
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
                            "type" => "dropdown",
                            "heading" => __("Open Popup instead of link", "js_composer"),
                            "param_name" => "btn_popup_id",
                            "admin_label" => true,
                            // "dependency" => array(
                            //       "element" => "btn_open_popup",
                            //       "value" => "yes"
                            //   ),
                            "value" => array_flip($popups),
                        ),


        		  )
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
                'param_name' 	=> 'align',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Text alignment', 'pix-opts'),
                'description' 	=> __('Select the position of the text.', 'pix-opts'),
                'admin_label'	=> false,
                'value'			=> array_flip(array(
                    'text-left'			=> 'Left',
                    'text-center'		=> 'Center',
                    'text-right' 		=> 'Right',
                )),
            ),


            array (
                'param_name' 	=> 'nav_style',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Navigation style', 'pix-opts'),
                'description' 	=> __('Select the style of the navigation.', 'pix-opts'),
                'admin_label'	=> false,
                'value'			=> array_flip(array(
                    'default'			=> 'Default',
                    'circles'		    => 'Circles',
                )),
            ),

            array (
                'param_name' 	=> 'nav_align',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Circles align', 'pix-opts'),
                'description' 	=> __('Select the position of the text.', 'pix-opts'),
                'admin_label'	=> false,
                'value'			=> array_flip(array(
                    'center'		=> 'Center',
                    'left'			=> 'Left',
                    'right' 		=> 'Right',
                )),
                "dependency" => array(
                      "element" => "nav_style",
                      "value" => "circles"
                  ),
            ),

            array (
                'param_name' 	=> 'circles_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Circles color', 'pix-opts'),
                'admin_label'	=> false,
                // 'group'         => 'Advanced',
                'value' 		=> $bg_colors,
                'std'			=> 'gradient-primary',
                "dependency" => array(
                      "element" => "nav_style",
                      "value" => "circles"
                  ),
            ),

            // array (
            //     'param_name' 	=> 'width',
            //     'type' 			=> 'textfield',
            //     'heading' 		=> __('Width (Optional)', 'pix-opts'),
            //     "description" => __( "Please input the value (with the unit: %, px,.. etc).", "pix-opts"),
            //     'admin_label'	=> false,
            // ),
            // array (
            //     'param_name' 	=> 'height',
            //     'type' 			=> 'textfield',
            //     'heading' 		=> __('Height (Optional)', 'pix-opts'),
            //     "description" => __( "Please input the value (with the unit: %, px,.. etc).", "pix-opts"),
            //     'admin_label'	=> false,
            // ),



              // array(
              //       "type" => "checkbox",
              //       "heading" => __( "Animation type", "pix-opts" ),
              //       "param_name" => "pix_scroll_parallax",
              //       "value" => array_flip(array(
              //         "scroll_parallax"       => "Scroll Parallax",
              //     )),
              //   ),
              //   array(
              //         "type" => "checkbox",
              //         "param_name" => "pix_tilt",
              //         "value" => array_flip(array(
              //           "tilt"       => "3D Hover",
              //       )),
              //     ),
              //   array (
              //       'param_name' 	=> 'xaxis',
              //       'type' 			=> 'textfield',
              //       'heading' 		=> __('X axis', 'pix-opts'),
              //       'admin_label'	=> false,
              //       'std'			=> '0',
                    // "dependency" => array(
                    //       "element" => "pix_scroll_parallax",
                    //       "value" => "scroll_parallax"
                    //   ),
              //   ),
              //   array (
              //       'param_name' 	=> 'yaxis',
              //       'type' 			=> 'textfield',
              //       'heading' 		=> __('Y axis', 'pix-opts'),
              //       'admin_label'	=> false,
              //       'std'			=> '0',
              //       "dependency" => array(
              //             "element" => "pix_scroll_parallax",
              //             "value" => "scroll_parallax"
              //         ),
              //   ),
              //   array (
              //       'param_name' 	=> 'pix_tilt_size',
              //       'type' 			=> 'dropdown',
              //       'heading' 		=> __('3d hover size', 'pix-opts'),
              //       // 'description' 	=> __('Select the position of the image.', 'pix-opts'),
              //       'admin_label'	=> false,
              //       'value'			=> array_flip(array(
              //           'tilt'			=> 'Default',
              //           'tilt_big'		=> 'Big',
              //           'tilt_small' 		=> 'Small',
              //       )),
              //       "dependency" => array(
              //             "element" => "pix_tilt",
              //             "not_empty" => true
              //         ),
              //   ),




              // Advanced
              array(
                    "type" => "checkbox",
                    "heading" => __( "Title format", "pix-opts" ),
                    "param_name" => "bold",
                    "value" => array("Bold" => "font-weight-bold"),
                    "std" => "font-weight-bold",
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
                  'param_name' 	=> 'title_color',
                  'type' 			=> 'dropdown',
                  'heading' 		=> __('Title color', 'pix-opts'),
                  'admin_label'	=> false,
                  'value' 		=> $colors,
                  'std'			=> 'heading-default',
                  "group"   => "Advanced",
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
                    "group"   => "Advanced",
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
                  'std'   => 'h2',
                  "group"   => "Advanced",
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
                    "group"   => "Advanced",
              ),


              array (
                  'param_name' 	=> 'content_color',
                  'type' 			=> 'dropdown',
                  'heading' 		=> __('Content color', 'pix-opts'),
                  'admin_label'	=> false,
                  'std'           => 'body-default',
                  'value' 		=> $colors,
                  "group"   => "Advanced",
              ),


              array (
                  'param_name' 	=> 'content_custom_color',
                  'type' 			=> 'colorpicker',
                  'heading' 		=> __('Content custom color', 'pix-opts'),
                  'admin_label'	=> false,
                  "dependency" => array(
                        "element" => "content_color",
                        "value" => "custom"
                    ),
                    "group"   => "Advanced",
              ),

              array (
                  'param_name' 	=> 'content_size',
                  'type' 			=> 'dropdown',
                  'heading' 		=> __('Size', 'pix-opts'),
                  'description' 	=> __('Select the size of the text.', 'pix-opts'),
                  'admin_label'	=> false,
                  'std'         => 'text-24',
                  'value'			=> array_flip(array(
                      'text-xs'		=> '12px',
                      'text-sm'		=> '14px',
                      ''			=> '16px',
                      'text-18' 		=> '18px',
                      'text-20' 		=> '20px',
                      'text-24' 		=> '24px',
                  )),
                  "group"   => "Advanced",
              ),




              array (
                  'param_name' 	=> 'overlay_color',
                  'type' 			=> 'dropdown',
                  'heading' 		=> __('Overlay color', 'pix-opts'),
                  'admin_label'	=> false,
                  'group'         => 'Advanced',
                  'value' 		=> $colors,
                  'std'			=> 'black',
              ),

              array (
                  'param_name' 	=> 'overlay_custom_color',
                  'type' 			=> 'colorpicker',
                  'heading' 		=> __('Custom overlay color', 'pix-opts'),
                  'admin_label'	=> false,
                  'group'         => 'Advanced',
                  "dependency" => array(
                        "element" => "overlay_color",
                        "value" => "custom"
                    ),
              ),
              array(
                "type" => "dropdown",
                "heading" => __("Overlay opacity", "pix-opts"),
                "param_name" => "overlay_opacity",
                   'group'         => 'Advanced',
                   "std"      => 'pix-opacity-7',
                "value" => array_flip(array(
                   "pix-opacity-0" 			=> "100%",
                   "pix-opacity-1" 			=> "90%",
                   "pix-opacity-2" 			=> "80%",
                   "pix-opacity-3" 			=> "70%",
                   "pix-opacity-4" 			=> "60%",
                   "pix-opacity-5" 			=> "50%",
                   "pix-opacity-6" 			=> "40%",
                   "pix-opacity-7" 			=> "30%",
                   "pix-opacity-8" 			=> "20%",
                   "pix-opacity-9" 			=> "10%",
                   "pix-opacity-10" 			=> "Disable",

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

           //  array(
           //     "type" => "dropdown",
           //     "heading" => __( "Infinite Animation type", "pix-opts" ),
           //     "param_name" => "pix_infinite_animation",
           //     "value" => $infinite_animation,
           //     'admin_label'	=> false,
           // ),
           //  array(
           //     "type" => "dropdown",
           //     "heading" => __( "Infinite Animation Speed", "pix-opts" ),
           //     "param_name" => "pix_infinite_speed",
           //     "value" => $animation_speeds,
           //     'admin_label'	=> false,
           //     "dependency" => array(
           //           "element" => "pix_infinite_animation",
           //           "not_empty" => true
           //       ),
           // ),


            array(
              'type' => 'css_editor',
              'heading' => __( 'Css', 'essentials-core' ),
              'param_name' => 'css',
              'group' => __( 'Design options', 'essentials-core' ),
              ),
        ),
        pix_add_params_to_group($slider_btns, "button"),
        $effects_params
    )
));

 ?>
