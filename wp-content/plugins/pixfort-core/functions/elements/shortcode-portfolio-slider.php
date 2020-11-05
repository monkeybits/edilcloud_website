<?php

// Portfolio -------------------------------------------
vc_map( array (
    'base' 			=> 'pix_portfolio_slider',
    'name' 			=> __('Portfolio Carousel', 'pix-opts'),
    'description' 	=> __('Recommended column size: 1/1', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/portfolio-carousel.png',
    'description' 	=> __('Add carousel for portfolio items', 'pix-opts'),
    'params' 		=> array (

        array (
            'param_name' 	=> 'count',
            'type' 			=> 'textfield',
            'heading' 		=> __('Count', 'pix-opts'),
            'admin_label'	=> true,
            'value'			=> 6,
        ),

        array (
            'param_name' 	=> 'category',
            'type' 			=> 'textfield',
            'heading' 		=> __('Category', 'pix-opts'),
            'description' 	=> __('Portfolio Category slug', 'pix-opts'),
            'admin_label'	=> true,
        ),

        array (
            'param_name' 	=> 'portfolio_style',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Style', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> array(
                "Default" 	    => '',
                "Mini" 	        => 'mini',
                "Transparent" 	=> 'transparent',
                "3D"        	=> '3d',
            ),
        ),

        array (
            'param_name' 	=> 'orderby',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Order by', 'pix-opts'),
            'description' 	=> __('Portfolio items order by column.', 'pix-opts'),
            'admin_label'	=> true,
            'value' 		=> array_flip(array(
                'date'			=> 'Date',
                'menu_order' 	=> 'Menu order',
                'title'			=> 'Title',
                'rand'			=> 'Random',
            )),
        ),

        array (
            'param_name' 	=> 'order',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Order', 'pix-opts'),
            'description' 	=> __('Portfolio items order.', 'pix-opts'),
            'admin_label'	=> true,
            'value' 		=> array_flip(array(
                'DESC' 	=> 'Descending',
                'ASC' 	=> 'Ascending',
            )),
        ),


       // Styling

       array (
           'param_name' 	=> 'title_color',
           'type' 			=> 'dropdown',
           'heading' 		=> __('Titles color', 'pix-opts'),
           'admin_label'	=> false,
           'value' 		=> $colors,
           'std'			=> 'heading-default',
           "group"   => "Styling",
           "dependency" => array(
                 "element" => "portfolio_style",
                 "value" => array('transparent', "3d")
             ),
       ),

       array (
           'param_name' 	=> 'title_custom_color',
           'type' 			=> 'colorpicker',
           'heading' 		=> __('Titles color', 'pix-opts'),
           'admin_label'	=> false,
           "dependency" => array(
                 "element" => "title_color",
                 "value" => "custom"
             ),
             "group"   => "Styling",
       ),


       array (
           'param_name' 	=> 'rounded_img',
           'type' 			=> 'dropdown',
           'heading' 		=> __('Rounded corners', 'pix-opts'),
           'admin_label'	=> false,
             "group"   => "Styling",
             "std"   => "rounded-lg",
           'value' 		=> array(
               __('No','pix-opts') 	=> 'rounded-0',
               __('Rounded','pix-opts')	    => 'rounded',
               __('Rounded Large','pix-opts')	    => 'rounded-lg',
               __('Rounded 5px','pix-opts')	    => 'rounded-xl',
               __('Rounded 10px','pix-opts')	    => 'rounded-10',
           )
       ),

       array (
           'param_name' 	=> 'overlay_color',
           'type' 			=> 'dropdown',
           'heading' 		=> __('Overlay color', 'pix-opts'),
           'admin_label'	=> false,
           'value' 		=> $bg_colors,
           'std'			=> 'black',
           "group"   => "Styling",
           "dependency" => array(
               "element" => "portfolio_style",
               "value" => "3d"
           ),
       ),
       array (
           'param_name' 	=> 'custom_overlay_color',
           'type' 			=> 'colorpicker',
           'heading' 		=> __('Custom Overlay Color', 'pix-opts'),
           'admin_label'	=> false,
           "group"   => "Styling",
           "dependency" => array(
               "element" => "overlay_color",
               "value" => "custom"
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
             "group" => __( "Advanced", "pix-opts" ),
             'value' 		=> array_flip(array(
                 ''			=> 'Default',
                 'light-dots' 	=> 'Light',
             )),
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
));

 ?>
