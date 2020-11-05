<?php

// Text -----------------------------
vc_map( array (
    'base' 			=> 'pix_levels',
    'name' 			=> __('Levels', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/levels.png',
    'description' 	=> __('Create beautiful events timeline', 'pix-opts'),
    'params' 		=> array_merge( array(

        array (
            'param_name' 	=> 'items_count',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Items per Line', 'pix-opts'),
            'description' 	=> __('The number of items to show at the same line', 'pix-opts'),
            'admin_label'	=> false,
            'std'           => 4,
            'value' 		=> array(
                "1" 	=> 1,
                "2" 	=> 2,
                "3" 	=> 3,
                "4" 	=> 4,
                "6" 	=> 6,
            ),
        ),

        array(
              'type' => 'param_group',
              'value' => '',
              'param_name' => 'items',
              'heading' 		=> __('Icons', 'pix-opts'),
              'description' 	=> __('Add each icon in the desired order.', 'pix-opts'),
              'params' => array(

                  array (
                      'param_name' 	=> 'title',
                      'type' 			=> 'textfield',
                      'heading' 		=> __('Title', 'pix-opts'),
                      'admin_label'	=> true,
                      'value'       => 'Level X',
                  ),

                  array (
                      'param_name' 	=> 'text',
                      'type' 			=> 'textarea',
                      'heading' 		=> __('Text', 'pix-opts'),
                      'admin_label'	=> true,
                      'value' 		=> "",
                  ),

                  array (
                      'param_name' 	=> 'link',
                      'type' 			=> 'textfield',
                      'heading' 		=> __('Link', 'pix-opts'),
                      'admin_label'	=> true,
                  ),

                  array (
                      'param_name' 	=> 'target',
                      'type' 			=> 'dropdown',
                      'heading' 		=> __('Target', 'pix-opts'),
                      'admin_label'	=> false,
                      'value' 		=> array( '', '_blank' ),
                      "dependency" => array(
                            "element" => "link",
                            "not_empty" => true
                        ),
                  ),



              )
        ),

        array (
            'param_name' 	=> 'active',
            'type' 			=> 'textfield',
            'heading' 		=> __('Active levels until', 'pix-opts'),
            'description' 	=> __('Make the levels active until a specific level (for example 2), keep this field empty to activate all levels.', 'pix-opts'),
            'admin_label'	=> true,
        )

    ),
    pix_get_text_format_params(array(
        'prefix' 		=> '',
        'name' 		=> 'Title',
        'bold' 		=> true,
        'bold_value' 		=> 'font-weight-bold',
        'italic' 		=> true,
        'italic_value' 		=> '',
        'secondary_font' 		=> true,
        'secondary_font_value' 		=> 'secondary-font',
        'color' 		=> true,
        'color_value' 		=> 'heading-default',
        'text_group'            => "Advanced"
    )),
    array(
        array (
            'param_name' 	=> 'title_size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Title size', 'pix-opts'),
            'group' => __( 'Advanced', 'essentials-core' ),
            'admin_label'	=> false,
            'std'	=> 'h5',
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
            'group' => __( 'Advanced', 'essentials-core' ),
            'heading' 		=> __('Title custom Size', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                  "element" => "title_size",
                  "value" => "custom"
              ),
        ),
    ),
    pix_get_text_format_params(array(
        'prefix' 		=> 'text_',
        'name' 		=> 'Text',
        'bold' 		=> true,
        'bold_value' 		=> '',
        'italic' 		=> true,
        'italic_value' 		=> '',
        'secondary_font' 		=> true,
        'secondary_font_value' 		=> '',
        'text_group'            => "Advanced",
        'color' 		=> true,
        'color_value' 		=> 'body-default',
    )),
     array(

         array (
             'param_name' 	=> 'active_color',
             'type' 			=> 'dropdown',
             'heading' 		=> __('Active color', 'pix-opts'),
             'admin_label'	=> false,
             'value' 		=> $colors,
             'group' => __( 'Advanced', 'essentials-core' ),
             'std'			=> 'primary',
         ),
         array (
             'param_name' 	=> 'active_custom_color',
             'type' 			=> 'colorpicker',
             'group' => __( 'Advanced', 'essentials-core' ),
             'heading' 		=> __('Active custom color', 'pix-opts'),
             'admin_label'	=> false,
             "dependency" => array(
                   "element" => "active_color",
                   "value" => "custom"
               ),
         ),
         array (
             'param_name' 	=> 'not_active_color',
             'type' 			=> 'dropdown',
             'heading' 		=> __('Inactive color', 'pix-opts'),
             'admin_label'	=> false,
             'value' 		=> $colors,
             'group' => __( 'Advanced', 'essentials-core' ),
             'std'			=> 'gray-2',
         ),
         array (
             'param_name' 	=> 'not_active_custom_color',
             'type' 			=> 'colorpicker',
             'group' => __( 'Advanced', 'essentials-core' ),
             'heading' 		=> __('Inactive custom color', 'pix-opts'),
             'admin_label'	=> false,
             "dependency" => array(
                   "element" => "not_active_color",
                   "value" => "custom"
               ),
         ),

        array(
          'type' => 'css_editor',
          'heading' => __( 'Css', 'essentials-core' ),
          'param_name' => 'css',
          'group' => __( 'Design options', 'essentials-core' ),
          )



    ))
));

 ?>
