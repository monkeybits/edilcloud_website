<?php

// Fancy box ----------------------------------------------
vc_map( array (
    'base' 			=> 'fancy_box',
    'name' 			=> __('Fancy box', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/fancy-box.jpg',
    'description' 	=> __('Add custom fancy box', 'pix-opts'),
    'params' 		=> array_merge(
        array (

            array (
                'param_name' 	=> 'title',
                'type' 			=> 'textfield',
                'heading' 		=> __('Title', 'pix-opts'),
                'admin_label'	=> true,
            ),
            array (
                'param_name' 	=> 'text',
                'type' 			=> 'textarea',
                'heading' 		=> __('Text', 'pix-opts'),
                'admin_label'	=> true,
            ),

            array (
                'param_name' 	=> 'bg_img',
                'type' 			=> 'attach_image',
                'heading' 		=> __('Image', 'pix-opts'),
                'admin_label'	=> false,
            ),

            array (
                'param_name' 	=> 'position',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Text position', 'pix-opts'),
                'admin_label'	=> false,
                'value'			=> array_flip(array(
                    'bottom'		=> 'Bottom',
                    'top'			=> 'Top',
                )),
            ),

            array (
                'param_name' 	=> 'link',
                'type' 			=> 'textfield',
                'heading' 		=> __('Box link', 'pix-opts'),
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
                'std'			=> '',
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

            array(
                "type" => "checkbox",
                "heading" => __( "Content Bold", "pix-opts" ),
                "param_name" => "content_bold",
                "value" => array("Yes" => "font-weight-bold"),
                "std" => "",
                "group"   => "Advanced",
            ),
            array (
                'param_name' 	=> 'content_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Content color', 'pix-opts'),
                'admin_label'	=> false,
                'std'           => 'dark-opacity-5',
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
                'value'			=> array_flip(array(
                    ''			=> 'Default (16px)',
                    'text-xs'		=> '12px',
                    'text-sm'		=> '14px',
                    'text-sm'		=> '14px',
                    'text-18' 		=> '18px',
                    'text-20' 		=> '20px',
                    'text-24' 		=> '24px',
                )),
                "group"   => "Advanced",
            ),



            array (
                'param_name' 	=> 'overlay_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Hover overlay color', 'pix-opts'),
                'admin_label'	=> false,
                'group'         => 'Advanced',
                'value' 		=> $colors,
                'std'			=> 'light-opacity-8',
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
                "type" => "checkbox",
                "heading" => __( "Enable blur", "pix-opts" ),
                "param_name" => "enable_blur",
                "value" => array("Yes" => "yes"),
                "group"   => "Advanced",
            ),


            array(
                'type' => 'css_editor',
                'heading' => __( 'Css', 'essentials-core' ),
                'param_name' => 'css',
                'group' => __( 'Design options', 'essentials-core' ),
            ),

        ),
        pix_add_params_group($effects_params, "Effects")
    )
));

?>
