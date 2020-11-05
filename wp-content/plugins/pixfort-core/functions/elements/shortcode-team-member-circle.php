<?php

// Team member -----------------------------
vc_map( array (
    'base' 			=> 'pix_team_member_circle',
    'name' 			=> __('Team member circle', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/team-member-circle.png',
    'description' 	=> __('Add circle team member', 'pix-opts'),
    'params' 		=> array (


        array (
            'param_name' 	=> 'name',
            'type' 			=> 'textfield',
            'heading' 		=> __('Name', 'pix-opts'),
            'admin_label'	=> true,
        ),


        array(
              "type" => "checkbox",
              "heading" => __( "Name format", "pix-opts" ),
              "param_name" => "name_bold",
              "value" => array("Bold" => "font-weight-bold"),
              "std" => "font-weight-bold"
          ),
        array(
              "type" => "checkbox",
              "param_name" => "name_italic",
              "value" => array("Italic" => "font-italic",),
          ),
        array(
              "type" => "checkbox",
              "param_name" => "name_secondary_font",
              "value" => array("Secondary font" => "secondary-font",),
          ),

        array (
            'param_name' 	=> 'name_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Name color', 'pix-opts'),
            'admin_label'	=> false,
            'group'         => 'Advanced',
            'value' 		=> $colors,
            'std'			=> '',
        ),

        array (
            'param_name' 	=> 'name_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Name color', 'pix-opts'),
            'admin_label'	=> false,
            'group'         => 'Advanced',
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
            'group'         => 'Advanced',
            'std'           => 'h4',
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
            'group'         => 'Advanced',
            'admin_label'	=> false,
            "dependency" => array(
                  "element" => "name_size",
                  "value" => "custom"
              ),
        ),




        array (
            'param_name' 	=> 'title',
            'type' 			=> 'textfield',
            'heading' 		=> __('Title', 'pix-opts'),
            'admin_label'	=> true,
        ),

        array(
              "type" => "checkbox",
              "heading" => __( "Title format", "pix-opts" ),
              "param_name" => "bold",
              "value" => array("Bold" => "font-weight-bold"),
              // "std" => "font-weight-bold"
          ),
        array(
              "type" => "checkbox",
              "param_name" => "italic",
              "value" => array("Italic" => "font-italic",),
          ),
        array(
              "type" => "checkbox",
              "param_name" => "secondary_font",
              "value" => array("Secondary font" => "secondary-font",),
          ),

        array (
            'param_name' 	=> 'title_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Title color', 'pix-opts'),
            'admin_label'	=> false,
            'group'         => 'Advanced',
            'value' 		=> $colors,
            'std'			=> '',
        ),

        array (
            'param_name' 	=> 'title_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Title color', 'pix-opts'),
            'group'         => 'Advanced',
            'admin_label'	=> false,
            "dependency" => array(
                  "element" => "title_color",
                  "value" => "custom"
              ),
        ),

        array (
            'param_name' 	=> 'title_size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Title size', 'pix-opts'),
            // 'description' 	=> __('Wrap title into H1 instead of H2', 'pix-opts'),
            'admin_label'	=> false,
            'std'           => 'h6',
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


        array (
            'param_name' 	=> 'description',
            'type' 			=> 'textarea',
            'heading' 		=> __('Description', 'pix-opts'),
            'admin_label'	=> true,
            'value' 		=> __('', 'pix-opts'),
        ),

        array (
            'param_name' 	=> 'description_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Description color', 'pix-opts'),
            'admin_label'	=> false,
            'std'           => 'light-opacity-5',
            'group'         => 'Advanced',
            'value' 		=> $colors,
            "dependency" => array(
                  "element" => "description",
                  "not_empty" => true
              ),
        ),


        array (
            'param_name' 	=> 'description_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Description custom color', 'pix-opts'),
            'admin_label'	=> false,
            'group'         => 'Advanced',
            "dependency" => array(
                  "element" => "description_color",
                  "value" => "custom"
              ),
        ),

        array (
            'param_name' 	=> 'description_size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Description font Size', 'pix-opts'),
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
            "dependency" => array(
                  "element" => "description",
                  "not_empty" => true
              ),
        ),


        array (
            'param_name' 	=> 'items_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Icons color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
        ),

        array (
            'param_name' 	=> 'items_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Custom icons color', 'pix-opts'),
            'admin_label'	=> false,
            'value'       => '#333',
            "dependency" => array(
                  "element" => "items_color",
                  "value" => "custom"
              ),
        ),


        array (
            'param_name' 	=> 'position',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Position', 'pix-opts'),
            'description' 	=> __('Select the position of the text.', 'pix-opts'),
            'admin_label'	=> false,
            'group'         => 'Advanced',
            'std'         => 'text-center',
            'value'			=> array_flip(array(
                'text-left'			=> 'Left',
                'text-center'		=> 'Center',
                'text-right' 		=> 'Right',
            )),
        ),

        array(
            "type" => "checkbox",
            "heading" => __( "Enable color border", "pix-opts" ),
            "param_name" => "outer_border",
            "value" => array("Yes" => true),
            "std"    => true,
            'save_always' => true,
            "group"   => "Advanced",
        ),
        array (
            'param_name' 	=> 'color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Border color', 'pix-opts'),
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
            'param_name' 	=> 'image',
            'type' 			=> 'attach_image',
            'heading' 		=> __('Image', 'pix-opts'),
            'admin_label'	=> false,
        ),



        array(
              'type' => 'param_group',
              'value' => '',
              'param_name' => 'items',
              'heading' 		=> __('Icons', 'pix-opts'),
              'description' 	=> __('Add each icon in the desired order.', 'pix-opts'),
              'params' => array(
                  array (
                      'type' => 'iconpicker',
                      'heading' => __( 'Icon', 'js_composer' ),
                      'param_name' => 'icon',
                      'settings' => array(
                          'emptyIcon' => true, // default true, display an "EMPTY" icon?
                          'type' => 'pix-icons',
                          'iconsPerPage' => 200, // default 100, how many icons per/page to display
                      ),
                      'description' => __( 'Select icon from library.', 'js_composer' ),
                  ),

                  array (
                      'param_name' 	=> 'item_link',
                      'type' 			=> 'textfield',
                      'heading' 		=> __('Icon Link', 'pix-opts'),
                      'admin_label'	=> false,
                  ),

                  array(
  					  "type" => "checkbox",
  					  "heading" => __( "Different color", "pix-opts" ),
  					  "param_name" => "has_color",
  					  "value" => __( "Yes", "pix-opts" ),
  				  ),

                  array (
                      'param_name' 	=> 'item_color',
                      'type' 			=> 'dropdown',
                      'heading' 		=> __('Color', 'pix-opts'),
                      'admin_label'	=> false,
                      'value' 		=> $colors,
                      "dependency" => array(
                            "element" => "has_color",
                            'not_empty' => true,
                        ),
                  ),

                  array (
                      'param_name' 	=> 'item_custom_color',
                      'type' 			=> 'colorpicker',
                      'heading' 		=> __('Custom color', 'pix-opts'),
                      'admin_label'	=> false,
                      'value'       => '#333',
                      "dependency" => array(
                            "element" => "item_color",
                            "value" => "custom"
                        ),
                  ),


              )
        ),




        // array (
        //     'param_name' 	=> 'size',
        //     'type' 			=> 'dropdown',
        //     'heading' 		=> __('Size', 'pix-opts'),
        //     'description' 	=> __('Select the size of the text.', 'pix-opts'),
        //     'admin_label'	=> false,
        //     'value'			=> array_flip(array(
        //         ''			=> 'Default (16px)',
        //         'text-xs'		=> '12px',
        //         'text-sm'		=> '14px',
        //         'text-sm'		=> '14px',
        //         'text-18' 		=> '18px',
        //         'text-20' 		=> '20px',
        //         'text-24' 		=> '24px',
        //     )),
        // ),
        //
        // array (
        //     'param_name' 	=> 'content_color',
        //     'type' 			=> 'dropdown',
        //     'heading' 		=> __('Content color', 'pix-opts'),
        //     'admin_label'	=> false,
        //     'value' 		=> $colors,
        //     'std'			=> '',
        //
        // ),
        //
        //
        // array (
        //     'param_name' 	=> 'content_custom_color',
        //     'type' 			=> 'colorpicker',
        //     'heading' 		=> __('Content custom color', 'pix-opts'),
        //     'admin_label'	=> false,
        //     "dependency" => array(
        //           "element" => "content_color",
        //           "value" => "custom"
        //       ),
        // ),
        //
        // array (
        //     'param_name' 	=> 'position',
        //     'type' 			=> 'dropdown',
        //     'heading' 		=> __('Position', 'pix-opts'),
        //     'description' 	=> __('Select the position of the text.', 'pix-opts'),
        //     'admin_label'	=> false,
        //     'value'			=> array_flip(array(
        //         'text-left'			=> 'Left',
        //         'text-center'		=> 'Center',
        //         'text-right' 		=> 'Right',
        //     )),
        // ),

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
          'type' => 'css_editor',
          'heading' => __( 'Css', 'essentials-core' ),
          'param_name' => 'css',
          'group' => __( 'Design options', 'essentials-core' ),
          ),



    )
));

 ?>
