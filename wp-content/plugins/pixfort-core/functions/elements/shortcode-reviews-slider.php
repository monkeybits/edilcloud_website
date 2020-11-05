<?php


// Reviews Slider ----------------------------------------------
vc_map( array (
    'base' 			=> 'pix_reviews_slider',
    'name' 			=> __('Reviews Carousel', 'pix-opts'),
    "weight"	=> "1000",
    'description' 	=> __('Add clean reviews carousel', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/reviews-slider.png',
    // "front_enqueue_js" => PIX_CORE_PLUGIN_URI . 'functions/js/views/reviews_slider.js',
    'params' 		=> array_merge(array (

        // array (
        //     'param_name' 	=> 'in_row',
        //     'type' 			=> 'textfield',
        //     'heading' 		=> __('Items in Row', 'pix-opts'),
        //     'desc' 			=> __('Number of items in row. Recommended number: 3-6', 'pix-opts'),
        //     'admin_label'	=> true,
        //     'value'			=> 6,
        // ),
        //
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

        array(
    		  'type' => 'param_group',
    		  'value' => '',
    		  'param_name' => 'slides',
    		  'heading' 		=> __('Reviews', 'pix-opts'),
    		  'params' => array(

                  array (
                      'param_name' 	=> 'content',
                      'type' 			=> 'textarea',
                      'heading' 		=> __('Content', 'pix-opts'),
                      'admin_label'	=> false,
                      'value' 		=> __('Insert your content here', 'pix-opts'),
                  ),

                  array (
                     'param_name' 	=> 'name',
                     'type' 			=> 'textfield',
                     'heading' 		=> __('Name', 'pix-opts'),
                     'admin_label'	=> true,
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
                      'param_name' 	=> 'rating',
                      'type' 			=> 'dropdown',
                      'heading' 		=> __('Rating', 'pix-opts'),
                      'admin_label'	=> false,
                      'value' 		=> array_flip(array(
                          ''			=> 'None',
                          '1' 	=> '1',
                          '2' 	=> '2',
                          '3' 	=> '3',
                          '4' 	=> '4',
                          '5' 	=> '5',
                      )),
                  ),


                  array (
      				  'param_name' 	=> 'link',
      				  'type' 			=> 'textfield',
      				  'heading' 		=> __('Link', 'pix-opts'),
      				  'admin_label'	=> false,
      			  ),


    		  )
    	),


        // array (
        //     'param_name' 	=> 'slider_size',
        //     'type' 			=> 'dropdown',
        //     'heading' 		=> __('Size', 'pix-opts'),
        //     'admin_label'	=> false,
        //     'std'           => 'pix-slider-2',
        //     'value' 		=> array(
        //         __('1/4 of width','pix-opts') 	=> 'pix-slider-4',
        //         __('1/3 of width','pix-opts') 	=> 'pix-slider-3',
        //         __('1/2 of width','pix-opts')	    => 'pix-slider-2',
        //         __('Full width','pix-opts')	    => 'pix-slider-1',
        //     )
        // ),
        //
        // array (
        //     'param_name' 	=> 'slider_style',
        //     'type' 			=> 'dropdown',
        //     'heading' 		=> __('Style', 'pix-opts'),
        //     'admin_label'	=> false,
        //     'std'           => 'pix-opacity-slider-2',
        //     'value' 		=> array(
        //         __('Default (One active item)','pix-opts') 	=> 'pix-opacity-slider-2',
        //         __('Faded items','pix-opts') 	=> 'pix-opacity-slider',
        //         __('Circle effect','pix-opts') 	=> 'pix-slider-effect-1',
        //     )
        // ),

        array (
            'param_name' 	=> 'animation',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Animation', 'pix-opts'),
            'description' 	=> __('Select the animation of the heading.', 'pix-opts'),
            'admin_label'	=> false,
            'value'			=> $animations,
            'std'           => 'fade-in-up'
        ),

        array (
            'param_name' 	=> 'delay',
            'type' 			=> 'textfield',
            'heading' 		=> __('Animation delay (in miliseconds)', 'pix-opts'),
            'admin_label'	=> true,
            'std'           => '500',
            "dependency" => array(
                  "element" => "animation",
                  "not_empty" => true
              ),
        ),




        // Styling
        array(
              "type" => "checkbox",
              "heading" => __( "Name format", "pix-opts" ),
              "param_name" => "bold",
              "value" => array("Bold" => "font-weight-bold"),
              "std" => "font-weight-bold",
              "group"   => "Styling",
          ),
        array(
              "type" => "checkbox",
              "param_name" => "italic",
              "value" => array("Italic" => "font-italic",),
              "group"   => "Styling",
          ),
        array(
              "type" => "checkbox",
              "param_name" => "secondary_font",
              "value" => array("Secondary font" => "secondary-font",),
              "group"   => "Styling",
          ),

        array (
            'param_name' 	=> 'name_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Name color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'std'           => 'dark-opacity-8',
            "group"   => "Styling",
        ),

        array (
            'param_name' 	=> 'name_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Title color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                  "element" => "name_color",
                  "value" => "custom"
              ),
              "group"   => "Styling",
        ),


        array (
            'param_name' 	=> 'title_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Title color', 'pix-opts'),
            'admin_label'	=> false,
            'std'           => 'dark-opacity-6',
            'value' 		=> $colors,
            "group"   => "Styling",
        ),


        array (
            'param_name' 	=> 'title_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Content title color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                  "element" => "title_color",
                  "value" => "custom"
              ),
              "group"   => "Styling",
        ),

        array (
            'param_name' 	=> 'title_size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Size', 'pix-opts'),
            'description' 	=> __('Select the size of the text.', 'pix-opts'),
            'admin_label'	=> false,
            'std'           => '',
            'value'			=> array_flip(array(
                ''			=> 'Default (16px)',
                'text-xs'		=> '12px',
                'text-sm'		=> '14px',
                'text-sm'		=> '14px',
                'text-18' 		=> '18px',
                'text-20' 		=> '20px',
                'text-24' 		=> '24px',
            )),
            "group"   => "Styling",
        ),








        array(
              "type" => "checkbox",
              "heading" => __( "Content format", "pix-opts" ),
              "param_name" => "content_bold",
              "value" => array("Bold" => "font-weight-bold"),
              "group"   => "Styling",
          ),
        array(
              "type" => "checkbox",
              "param_name" => "content_italic",
              "value" => array("Italic" => "font-italic",),
              "group"   => "Styling",
          ),
        array(
              "type" => "checkbox",
              "param_name" => "content_secondary_font",
              "value" => array("Secondary font" => "secondary-font",),
              "group"   => "Styling",
          ),


        array (
            'param_name' 	=> 'content_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Content color', 'pix-opts'),
            'admin_label'	=> false,
            'std'           => 'dark-opacity-5',
            'value' 		=> $colors,
            "group"   => "Styling",
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
              "group"   => "Styling",
        ),

        array (
            'param_name' 	=> 'content_size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Size', 'pix-opts'),
            'description' 	=> __('Select the size of the text.', 'pix-opts'),
            'admin_label'	=> false,
            'std'           => 'text-20',
            'value'			=> array_flip(array(
                ''			=> 'Default (16px)',
                'text-xs'		=> '12px',
                'text-sm'		=> '14px',
                'text-sm'		=> '14px',
                'text-18' 		=> '18px',
                'text-20' 		=> '20px',
                'text-24' 		=> '24px',
            )),
            "group"   => "Styling",
        ),



    ),
    pix_add_params_to_group($effects_params, "Styling"),
    array(

        array (
            'param_name' 	=> 'bg_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Background color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $bg_colors,
            'std'			=> 'transparent',
            "group"	      => "Styling",
        ),
        array (
            'param_name' 	=> 'custom_bg_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Custom Background Color', 'pix-opts'),
            'admin_label'	=> false,
            "group"	      => "Styling",
            "dependency" => array(
                  "element" => "bg_color",
                  "value" => "custom"
              ),
        ),

        array (
            'param_name' 	=> 'rounded_box',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Rounded corners', 'pix-opts'),
            'admin_label'	=> false,
            "group"	      => "Styling",
            'value' 		=> array(
                __('No','pix-opts') 	=> 'rounded-0',
                __('Rounded','pix-opts')	    => 'rounded',
                __('Rounded Large','pix-opts')	    => 'rounded-lg',
                __('Rounded 5px','pix-opts')	    => 'rounded-xl',
                __('Rounded 10px','pix-opts')	    => 'rounded-10',
            )
        ),

        // array (
        //     'param_name' 	=> 'dots_style',
        //     'type' 			=> 'dropdown',
        //     'heading' 		=> __('Dots', 'pix-opts'),
        //     'admin_label'	=> false,
        //     "group"	      => "Styling",
        //     'value' 		=> array_flip(array(
        //         ''			=> 'Default',
        //         'light-dots' 	=> 'Light',
        //         'no-dots' 	=> 'Hide dots',
        //     )),
        // ),












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
              'heading' 		=> __('Dots', 'pix-opts'),
              'admin_label'	=> false,
              "group" => __( "Advanced", "pix-opts" ),
              'value' 		=> array_flip(array(
                  ''			=> 'Default',
                  'light-dots' 	=> 'Light',
                  // 'no-dots' 	=> 'Hide dots',
              )),
              "dependency" => array(
                    "element" => "pagedots",
                    "not_empty" => true
                ),
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



    ))
));

 ?>
