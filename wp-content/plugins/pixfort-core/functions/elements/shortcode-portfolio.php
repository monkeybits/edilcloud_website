<?php

// Portfolio -------------------------------------------
vc_map( array (
    'base' 			=> 'pix_portfolio',
    'name' 			=> __('Portfolio', 'pix-opts'),
    'description' 	=> __('Recommended column size: 1/1', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/portfolio.png',
    'description' 	=> __('Showcase your portfolio items', 'pix-opts'),
    'params' 		=> array (

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
            'param_name' 	=> 'count',
            'type' 			=> 'textfield',
            'heading' 		=> __('Count', 'pix-opts'),
            'admin_label'	=> true,
            'value'			=> 6,
        ),

        array (
            'param_name' 	=> 'line_count',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Items per line', 'pix-opts'),
            'admin_label'	=> false,
            'std'           => '4',
            'value' 		=> array_flip(array(
                "6" 	    => "2 items",
                "4" 	    => "3 items",
                "3" 	    => "4 items",
                "2"        	=> "6 items",

            )),
        ),

        array (
            'param_name' 	=> 'category',
            'type' 			=> 'textfield',
            'heading' 		=> __('Category', 'pix-opts'),
            'description' 	=> __('Portfolio Category slug', 'pix-opts'),
            'admin_label'	=> true,
        ),

        array (
            'param_name' 	=> 'style',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Style', 'pix-opts'),
            'admin_label'	=> true,
            'value' 		=> array_flip(array(
                'normal'			=> 'Normal',
                'flat'			=> 'Flat',
                'flatbox'			=> 'FlatBox',
                'masonry-normal'		=> 'Masonry Normal',
                'masonry-flat'	=> 'Masonry Flat',
                'masonry-flatbox'	=> 'Masonry FlatBox',
            )),
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

        array (
            'param_name' 	=> 'filters',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Show Filters', 'pix-opts'),
            'description' 	=> __('This option works in <b>Category: All</b>', 'pix-opts'),
            'admin_label'	=> false,
            'std'	        => 1,
            'value' 		=> array(
                __('No','pix-opts') 	=> 0,
                __('Yes','pix-opts')	=> 1,
            ),
        ),

        array (
            'param_name' 	=> 'filters_align',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Filters Align', 'pix-opts'),
            'admin_label'	=> true,
            'value' 		=> array_flip(array(
                'center'			=> 'Center',
                'left'			=> 'Left',
                'right'			=> 'Right',
            )),
        ),

        array(
              "type" => "checkbox",
              "heading" => __( "Light filter buttons color", "pix-opts" ),
              "param_name" => "filter_light",
              "value" => array("Yes" => "is-dark"),
              'std'      => '',
          ),

        array (
            'param_name' 	=> 'rounded_img',
            'type' 			=> 'dropdown',
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

        array (
            'param_name' 	=> 'pagination',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Show | Pagination', 'pix-opts'),
            'description' 	=> __('<strong>Notice:</strong> Pagination will <strong>not</strong> work if you put item on Homepage of WordPress Multilangual Site.', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> array_flip(array(
                '' 	=> 'No',
                1 	=> 'Yes',
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
            'heading' 		=> __('Custom titles color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                  "element" => "title_color",
                  "value" => "custom"
              ),
              "group"   => "Styling",
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



        array(
          'type' => 'css_editor',
          'heading' => __( 'Css', 'essentials-core' ),
          'param_name' => 'css',
          'group' => __( 'Design options', 'essentials-core' ),
          ),



    )
));

 ?>
