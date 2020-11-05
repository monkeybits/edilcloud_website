<?php

// Image carousel -----------------------------
vc_map( array (
    'base' 			=> 'pix_img_carousel',
    'name' 			=> __('Image Carousel', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/image-carousel.png',
    'description' 	=> __('Create custom image carousel', 'pix-opts'),
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


           // Advanced
           array (
               'param_name' 	=> 'slider_num',
               'type' 			=> 'dropdown',
               'heading' 		=> __('Slides per page', 'pix-opts'),
               'admin_label'	=> false,
               'value' 		=> array(
                   "1" 	=> 1,
                   "2" 	=> 2,
                   "3" 	=> 3,
                   "4" 	=> 4,
                   "5" 	=> 5,
                   "6" 	=> 6,
               ),
               "std"   => 3,
                "group" => __( "Advanced", "pix-opts" ),
           ),
           array (
               'param_name' 	=> 'slider_style',
               'type' 			=> 'dropdown',
               'heading' 		=> __('Slides style', 'pix-opts'),
               'admin_label'	=> false,
               'std'	=> 'pix-style-standard',
               'value' 		=> array(
                   __('Standard','pix-opts')         	        => 'pix-style-standard',
                   __('One active item','pix-opts')         	=> 'pix-one-active',
                   __('Faded items','pix-opts') 	            => 'pix-opacity-slider',
               ),
               "group" => __( "Advanced", "pix-opts" ),
           ),
           array (
               'param_name' 	=> 'slider_effect',
               'type' 			=> 'dropdown',
               'heading' 		=> __('Slides effect', 'pix-opts'),
               'admin_label'	=> false,
               'std'	=> 'pix-effect-standard',
               'value' 		=> array(
                   __('Standard','pix-opts') 	                => 'pix-effect-standard',
                   __('Circular effect','pix-opts') 	        => 'pix-circular-slider',
                   __('Circular Left only','pix-opts') 	        => 'pix-circular-left',
                   __('Circular Right only','pix-opts') 	    => 'pix-circular-right',
                    __('Fade out','pix-opts') 	                => 'pix-fade-out-effect',
               ),
                "group" => __( "Advanced", "pix-opts" ),
           ),

           array(
                 "type" => "checkbox",
                 "heading" => __( "Show navigation buttons", "pix-opts" ),
                 "param_name" => "prevnextbuttons",
                 "value" => array('Yes' => true),
                 'save_always' => true,
                 'std' => true,
                 "group" => __( "Advanced", "pix-opts" ),
             ),
           array(
                 "type" => "checkbox",
                 "heading" => __( "Dots", "pix-opts" ),
                 "param_name" => "pagedots",
                 "value" => array('Yes' => true),
                 'std' => true,
                 'save_always' => true,
                 "group" => __( "Advanced", "pix-opts" ),
             ),
             array (
                 'param_name' 	=> 'dots_style',
                 'type' 			=> 'dropdown',
                 'heading' 		=> __('Dots style', 'pix-opts'),
                 'admin_label'	=> false,
                 "group" => __( "Advanced", "pix-opts" ),
                 'value' 		=> array_flip(array(
                     ''			=> 'Default',
                     'light-dots' 	=> 'Light',
                 )),
                 "dependency" => array(
                       "element" => "pagedots",
                       "not_empty" => true
                   ),
             ),
             array (
                 'param_name' 	=> 'dots_align',
                 'type' 			=> 'dropdown',
                 'heading' 		=> __('Dots align', 'pix-opts'),
                 'admin_label'	=> false,
                 "group" => __( "Advanced", "pix-opts" ),
                 'value' 		=> array_flip(array(
                     ''			=> 'Center',
                     'pix-dots-left' 	=> 'Left',
                     'pix-dots-right' 	=> 'Right',
                 )),
                 "dependency" => array(
                       "element" => "pagedots",
                       "not_empty" => true
                   ),
             ),
           array(
                 "type" => "checkbox",
                 "heading" => __( "Free Scroll", "pix-opts" ),
                 "param_name" => "freescroll",
                 "value" => array('Yes' => true),
                 'save_always' => true,
                 "group" => __( "Advanced", "pix-opts" ),
             ),
             array (
                 'param_name' 	=> 'cellalign',
                 'type' 			=> 'dropdown',
                 'heading' 		=> __('Main cell Align', 'pix-opts'),
                 'admin_label'	=> false,
                 'group'	=> 'Advanced',
                 'value' 		=> array_flip(array(
                     'center'			=> 'Center',
                     'left' 	=> 'Left',
                     'right' 	=> 'Right',
                 )),
             ),
             array(
                   "type" => "checkbox",
                   "heading" => __( "Scale main item", "pix-opts" ),
                   "param_name" => "slider_scale",
                   "value" => array('Yes' => 'pix-slider-scale'),
                   'save_always' => true,
                   "group" => __( "Advanced", "pix-opts" ),
               ),
             array (
                 'param_name' 	=> 'cellpadding',
                 'type' 			=> 'dropdown',
                 'heading' 		=> __('Cells padding', 'pix-opts'),
                 'admin_label'	=> false,
                 'group'	=> 'Advanced',
                 'std'	=> 'pix-p-10',
                 'value' 		=> array_flip(array(
                     'p-0'			        => '0px',
                     'pix-p-5'			=> '5px',
                     'pix-p-10'			=> '10px',
                     'pix-p-15'			=> '15px',
                     'pix-p-20'			=> '20px',
                     'pix-p-25'			=> '25px',
                     'pix-p-30'			=> '30px',
                     'pix-p-35'			=> '35px',
                     'pix-p-40'			=> '40px',
                     'pix-p-45'			=> '45px',
                     'pix-p-50'			=> '50px',
                 )),
             ),
             array(
                   "type" => "checkbox",
                   "heading" => __( "autoplay", "pix-opts" ),
                   "param_name" => "autoplay",
                   "value" => array('Yes' => true),
                   'save_always' => true,
                   "group" => __( "Advanced", "pix-opts" ),
               ),
               array (
                   'param_name' 	=> 'autoplay_time',
                   'type' 			=> 'textfield',
                   'heading' 		=> __('Autoplay time', 'pix-opts'),
                   'description' 		=> __('The time between auto slides in milliseconds.', 'pix-opts'),
                   'admin_label'	=> false,
                   'std'			=> '1500',
                   'group'			=> 'Advanced',
                   "dependency" => array(
                         "element" => "autoplay",
                         "not_empty" => true
                     ),
               ),
           array(
                 "type" => "checkbox",
                 "heading" => __( "Adaptive height", "pix-opts" ),
                 "param_name" => "adaptiveheight",
                 "value" => true,
                 'save_always' => true,
                 'std' => true,
                 "group" => __( "Advanced", "pix-opts" ),
             ),
           array(
                 "type" => "checkbox",
                 "heading" => __( "Right to Left", "pix-opts" ),
                 "param_name" => "righttoleft",
                 "value" => true,
                 'save_always' => true,
                 "group" => __( "Advanced", "pix-opts" ),
             ),
           array(
                 "type" => "checkbox",
                 "heading" => __( "Wrap slides", "pix-opts" ),
                 "param_name" => "slider_wrap",
                 "value" => true,
                 "std" => true,
                 'save_always' => true,
                 "group" => __( "Advanced", "pix-opts" ),
             ),
           array(
                 "type" => "checkbox",
                 "heading" => __( "Increas vertial view", "pix-opts" ),
                 "param_name" => "visible_y",
                 "value" => array("Yes" => 'pix-overflow-y-visible'),
                 'save_always' => true,
                 "group" => __( "Advanced", "pix-opts" ),
             ),
           array(
                 "type" => "checkbox",
                 "heading" => __( "Visible overflow", "pix-opts" ),
                 "description" => "slides outside the slider view box will be visible.",
                 "param_name" => "visible_overflow",
                 "value" => array("Yes" => 'pix-overflow-all-visible'),
                 'save_always' => true,
                 "group" => __( "Advanced", "pix-opts" ),
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
