<?php


// Testimonials Slider ----------------------------------------------
vc_map( array (
    'base' 			=> 'testimonials_slider',
    'name' 			=> __('Testimonials Carousel', 'pix-opts'),
    'description' 	=> __('Add custom testimonials carousel', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/testimonials-carousel.png',
    'params' 		=> array_merge(
        array (



            // array (
            //     'param_name' 	=> 'style',
            //     'type' 			=> 'dropdown',
            //     'heading' 		=> __('Style', 'pix-opts'),
            //     'admin_label'	=> false,
            //     'value' 		=> array_flip(array(
            //         ''			=> 'Default',
            //         'nobox' 	=> 'Without boxes',
            //     )),
            // ),

            // array (
            //     'param_name' 	=> 'dots_style',
            //     'type' 			=> 'dropdown',
            //     'heading' 		=> __('Dots', 'pix-opts'),
            //     'admin_label'	=> false,
            //     'value' 		=> array_flip(array(
            //         ''			=> 'Default',
            //         'light-dots' 	=> 'Light',
            //         'no-dots' 	=> 'Hide dots',
            //     )),
            // ),

            array(
        		  'type' => 'param_group',
        		  'value' => '',
        		  'param_name' => 'testimonials',
        		  'heading' 		=> __('Testimonials', 'pix-opts'),
        		  'params' => array(

                      array (
                          'param_name' 	=> 'text',
                          'type' 			=> 'textarea',
                          'heading' 		=> __('Content', 'pix-opts'),
                          'admin_label'	=> true,
                          'value' 		=> __('Insert your content here', 'pix-opts'),
                      ),

                      array (
                         'param_name' 	=> 'name',
                         'type' 			=> 'textfield',
                         'heading' 		=> __('Name', 'pix-opts'),
                         'admin_label'	=> false,
                     ),

                     array (
                         'param_name' 	=> 'title',
                         'type' 			=> 'textfield',
                         'heading' 		=> __('Title', 'pix-opts'),
                         'admin_label'	=> false,
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
          				  'admin_label'	=> false,
          			  ),


        		  )
        	),


            // Styling
            array (
                'param_name' 	=> 'img_style',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Image style', 'pix-opts'),
                // 'description' 	=> __('Wrap name into H1 instead of H2', 'pix-opts'),
                'admin_label'	=> false,
                'std'           => 'circle_bottom',
                'save_always' => true,
                "group" => __( "Styling", "pix-opts" ),
                'value' 		=> array(
                    __('Standard','pix-opts')	    => 'standard',
                    __('Circle Bottom','pix-opts') 	=> 'circle_bottom',
                    __('Circle Top','pix-opts') 	=> 'circle_top',
                ),
            ),
        ),
        pix_get_text_format_params(array(
            'prefix' 		=> 'name_',
            'name' 		=> 'Name',
            'bold' 		=> true,
            'bold_value' 		=> 'font-weight-bold',
            'italic' 		=> true,
            'italic_value' 		=> '',
            'secondary_font' 		=> true,
            'secondary_font_value' 		=> '',
            'text_group'            => 'Styling'
        )),
        array(

            array (
                'param_name' 	=> 'name_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Name color', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Styling',
                'value' 		=> $colors,
                'std'			=> 'dark-opacity-4',
            ),

            array (
                'param_name' 	=> 'name_custom_color',
                'type' 			=> 'colorpicker',
                'heading' 		=> __('Name custom color', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Styling',
                "dependency" => array(
                      "element" => "name_color",
                      "value" => "custom"
                  ),
            ),


            array (
                'param_name' 	=> 'name_size',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Name size', 'pix-opts'),
                // 'description' 	=> __('Wrap name into H1 instead of H2', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Styling',
                'std'           => 'h6',
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
                'param_name' 	=> 'name_custom_size',
                'type' 			=> 'textfield',
                'heading' 		=> __('Name Size', 'pix-opts'),
                'group'         => 'Styling',
                'admin_label'	=> false,
                "dependency" => array(
                      "element" => "name_size",
                      "value" => "custom"
                  ),
            ),

        ),
        pix_get_text_format_params(array(
            'prefix' 		=> 'title_',
            'name' 		=> 'Title',
            'bold' 		=> true,
            'bold_value' 		=> 'font-weight-bold',
            'italic' 		=> true,
            'italic_value' 		=> '',
            'secondary_font' 		=> true,
            'secondary_font_value' 		=> '',
            'text_group'            => 'Styling'
        )),
        array(

            array (
                'param_name' 	=> 'title_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Title color', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Styling',
                'value' 		=> $colors,
                'std'			=> 'primary',
            ),

            array (
                'param_name' 	=> 'title_custom_color',
                'type' 			=> 'colorpicker',
                'heading' 		=> __('Title custom color', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Styling',
                "dependency" => array(
                      "element" => "title_color",
                      "value" => "custom"
                  ),
            ),


            array (
                'param_name' 	=> 'title_size',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Title font Size', 'pix-opts'),
                'description' 	=> __('Select the size of the text.', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Styling',
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
        ),
        pix_get_text_format_params(array(
            'prefix' 		=> 'text_',
            'name' 		=> 'Text',
            'bold' 		=> true,
            'bold_value' 		=> '',
            'italic' 		=> true,
            'italic_value' 		=> 'font-italic',
            'secondary_font' 		=> true,
            'secondary_font_value' 		=> '',
            'text_group'            => 'Styling'
        )),
        array(

            array (
                'param_name' 	=> 'text_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Text color', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Styling',
                'value' 		=> $colors,
                'std'			=> 'body-default',
            ),

            array (
                'param_name' 	=> 'text_custom_color',
                'type' 			=> 'colorpicker',
                'heading' 		=> __('Text custom color', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Styling',
                "dependency" => array(
                      "element" => "text_color",
                      "value" => "custom"
                  ),
            ),

            array (
                'param_name' 	=> 'text_size',
                'type' 			=> 'dropdown',
                'heading' 		=> __('text font Size', 'pix-opts'),
                'description' 	=> __('Select the size of the text.', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Styling',
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
                'param_name' 	=> 'items_bg_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Background color', 'pix-opts'),
                'admin_label'	=> false,
                'value' 		=> $bg_colors,
                'std'			=> 'light-opacity-5',
                "group"	      => "Styling",
            ),
            array (
                'param_name' 	=> 'items_custom_bg_color',
                'type' 			=> 'colorpicker',
                'heading' 		=> __('Custom Background Color', 'pix-opts'),
                'admin_label'	=> false,
                "group"	      => "Styling",
                "dependency" => array(
                      "element" => "items_bg_color",
                      "value" => "custom"
                  ),
            ),
            array (
                'param_name' 	=> 'circle_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Circle Color', 'pix-opts'),
                "group"	      => "Styling",
                'description' 	=> __('Select the color of the circle.', 'pix-opts'),
                'admin_label'	=> false,
                'std'	=> 'gradient-primary',
                'value'			=> array_merge(
                    array("None"    => 'pix-bg-custom'),
                    $bg_colors
                ),
            ),
            array (
                'param_name' 	=> 'circle_custom_color',
                'type' 			=> 'colorpicker',
                'heading' 		=> __('Custom Circle color', 'pix-opts'),
                'admin_label'	=> false,
                "group"	      => "Styling",
                "dependency" => array(
                      "element" => "circle_color",
                      "value" => "custom"
                  ),
            ),

            array (
                'param_name' 	=> 'rounded_box',
                'type' 			=> 'dropdown',
                "group"	      => "Styling",
                'heading' 		=> __('Rounded corners', 'pix-opts'),
                'admin_label'	=> false,
                'std'	=> 'rounded-lg',
                'value' 		=> array(
                    __('No','pix-opts') 	=> 'rounded-0',
                    __('Rounded','pix-opts')	    => 'rounded',
                    __('Rounded Large','pix-opts')	    => 'rounded-lg',
                    __('Rounded 5px','pix-opts')	    => 'rounded-xl',
                    __('Rounded 10px','pix-opts')	    => 'rounded-10',
                )
            ),




        ),
        $effects_params,
        array(









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
                'std'	=> 'pix-standard',
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
                'std'	=> 'pix-opacity-slider',
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
                  'heading' 		=> __('Dots & Navigation style', 'pix-opts'),
                  'admin_label'	=> false,
                  // 'save_always' => true,
                  "group" => __( "Advanced", "pix-opts" ),
                  'value' 		=> array_flip(array(
                      ''			=> 'Default',
                      'light-dots' 	=> 'Light',
                      // 'no-dots' 	=> 'Hide dots',
                  )),
                  // "dependency" => array(
                  //       "element" => "pagedots",
                  //       "not_empty" => true
                  //   ),
              ),
              array (
                  'param_name' 	=> 'dots_align',
                  'type' 			=> 'dropdown',
                  'heading' 		=> __('Dots', 'pix-opts'),
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
                      'p-0'			       => '0px',
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





        )
    )
));

 ?>
