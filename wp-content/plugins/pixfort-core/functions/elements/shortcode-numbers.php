<?php

// Numbers -------------------------------------------
vc_map( array (
    'base' 			=> 'pix_numbers',
    'name' 			=> __('Numbers', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/numbers.gif',
    'description' 	=> __('Display stunning animated numbers', 'pix-opts'),
    'params' 		=> array (

        array (
            'param_name' 	=> 'numbers_style',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Style', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> array(
                'Inline' => 'numbers-inline',
                'Stack' => 'numbers-stack',
            )
        ),

        array (
            'param_name' 	=> 'text_before',
            'type' 			=> 'textfield',
            'heading' 		=> __('Text Before', 'pix-opts'),
            'admin_label'	=> false,
        ),

        array(
              "type" => "checkbox",
              "heading" => __( "Text Before format", "pix-opts" ),
              "param_name" => "before_bold",
              "value" => array("Bold" => "font-weight-bold"),
              "std" => "font-weight-bold"
          ),
        array(
              "type" => "checkbox",
              "param_name" => "before_italic",
              "value" => array("Italic" => "font-italic",),
          ),
        array(
              "type" => "checkbox",
              "param_name" => "before_secondary_font",
              "value" => array("Secondary font" => "secondary-font",),
          ),

        array (
            'param_name' 	=> 'number',
            'type' 			=> 'textfield',
            'heading' 		=> __('Number', 'pix-opts'),
            'admin_label'	=> true,
        ),
        array(
              "type" => "checkbox",
              "heading" => __( "Number format", "pix-opts" ),
              "param_name" => "number_bold",
              "value" => array("Bold" => "font-weight-bold"),
              "std" => "font-weight-bold"
          ),
        array(
              "type" => "checkbox",
              "param_name" => "number_italic",
              "value" => array("Italic" => "font-italic",),
          ),
        array(
              "type" => "checkbox",
              "param_name" => "number_secondary_font",
              "value" => array("Secondary font" => "secondary-font",),
          ),

        array (
            'param_name' 	=> 'duration',
            'type' 			=> 'textfield',
            'heading' 		=> __('Duration', 'pix-opts'),
            'admin_label'	=> true,
            'value'         => '3000',
            'description'       => 'The duration in miliseconds.'
        ),

        array (
            'param_name' 	=> 'text_after',
            'type' 			=> 'textfield',
            'heading' 		=> __('Text After', 'pix-opts'),
            'admin_label'	=> false,
        ),

        array(
              "type" => "checkbox",
              "heading" => __( "Text After format", "pix-opts" ),
              "param_name" => "after_bold",
              "std" => "font-weight-bold",
              "value" => array("Bold" => "font-weight-bold",)
          ),
        array(
              "type" => "checkbox",
              "param_name" => "after_italic",
              "value" => array("Italic" => "font-italic",),
          ),
        array(
              "type" => "checkbox",
              "param_name" => "after_secondary_font",
              "value" => array("Secondary font" => "secondary-font",),
          ),

        array (
            'param_name' 	=> 'content',
            'type' 			=> 'textarea',
            'heading' 		=> __('Content', 'pix-opts'),
            'admin_label'	=> false,
        ),

        array(
              "type" => "checkbox",
              "heading" => __( "Content format", "pix-opts" ),
              "param_name" => "content_bold",
              "value" => array("Bold" => "font-weight-bold",),
              "std" => "font-weight-bold"
          ),
        array(
              "type" => "checkbox",
              "param_name" => "content_italic",
              "value" => array("Italic" => "font-italic",),
          ),
        array(
              "type" => "checkbox",
              "param_name" => "content_secondary_font",
              "value" => array("Secondary font" => "secondary-font",),
          ),


          array (
              'param_name' 	=> 'title_color',
              'type' 			=> 'dropdown',
              'group' => __( 'Advanced', 'essentials-core' ),
              'heading' 		=> __('Title color', 'pix-opts'),
              'admin_label'	=> false,
              'value' 		=> $colors,
              'std'			=> '',
          ),

          array (
              'param_name' 	=> 'title_custom_color',
              'type' 			=> 'colorpicker',
              'group' => __( 'Advanced', 'essentials-core' ),
              'heading' 		=> __('Title color', 'pix-opts'),
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
              'description' 	=> __('Wrap title into H1 instead of H2', 'pix-opts'),
              'group' => __( 'Advanced', 'essentials-core' ),
              'admin_label'	=> false,
              'std'	=> 'h3',
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
              'group' => __( 'Advanced', 'essentials-core' ),
              'admin_label'	=> false,
              "dependency" => array(
                    "element" => "title_size",
                    "value" => "custom"
                ),
          ),

          array (
              'param_name' 	=> 'title_display',
              'type' 			=> 'dropdown',
              'heading' 		=> __('Bigger Title Text', 'pix-opts'),
              'description' 	=> __('Larger heading text size to stand out.', 'pix-opts'),
              'admin_label'	=> false,
              'group' => __( 'Advanced', 'essentials-core' ),
              'value'			=> array_flip(array(
                  ''		=> 'None',
                  'display-1'		=> 'Display 1',
                  'display-2'		=> 'Display 2',
                  'display-3'		=> 'Display 3',
                  'display-4'		=> 'Display 4',
              )),
          ),

          array (
              'param_name' 	=> 'content_color',
              'type' 			=> 'dropdown',
              'heading' 		=> __('Content color', 'pix-opts'),
              'admin_label'	=> false,
              'group' => __( 'Advanced', 'essentials-core' ),
              'std'           => 'dark-opacity-5',
              'value' 		=> $colors,
          ),


          array (
              'param_name' 	=> 'content_custom_color',
              'type' 			=> 'colorpicker',
              'heading' 		=> __('Content custom color', 'pix-opts'),
              'admin_label'	=> false,
              'group' => __( 'Advanced', 'essentials-core' ),
              "dependency" => array(
                    "element" => "content_color",
                    "value" => "custom"
                ),
          ),

          array (
              'param_name' 	=> 'content_size',
              'type' 			=> 'dropdown',
              'heading' 		=> __('Content size', 'pix-opts'),
              'group' => __( 'Advanced', 'essentials-core' ),
              'admin_label'	=> false,
              'std'	=> 'h6',
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
              'param_name' 	=> 'content_custom_size',
              'type' 			=> 'textfield',
              'heading' 		=> __('Content Size', 'pix-opts'),
              'group' => __( 'Advanced', 'essentials-core' ),
              'admin_label'	=> false,
              "dependency" => array(
                    "element" => "content_size",
                    "value" => "custom"
                ),
          ),
          array (
              'param_name' 	=> 'content_position',
              'type' 			=> 'dropdown',
              'heading' 		=> __('Content position', 'pix-opts'),
              'group' => __( 'Advanced', 'essentials-core' ),
              'admin_label'	=> false,
              'std'	=> 'text-left',
              'value' 		=> array(
                  __('Left','pix-opts') 	=> 'text-left',
                  __('Center','pix-opts') 	=> 'text-center',
                  __('Right','pix-opts') 	=> 'text-right',
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
