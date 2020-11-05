<?php

// Call to Action -------------------------------------------
vc_map( array (
    'base' 			=> 'pix_cta',
    'name' 			=> __('Call to Action', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/cta.jpg',
    'description' 	=> __('Increase conversion with a CTA', 'pix-opts'),
    'params' 		=> array_merge(

        array (

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
                "std" => "font-weight-bold"
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
                'param_name' 	=> 'content',
                'type' 			=> 'textarea',
                'heading' 		=> __('Content', 'pix-opts'),
                'admin_label'	=> true,
                'value' 		=> __('Insert your content here', 'pix-opts'),
            ),

            array(
                "type" => "checkbox",
                "heading" => __( "Content format", "pix-opts" ),
                "param_name" => "content_bold",
                "value" => array("Bold" => "font-weight-bold"),
                "std" => ""
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
                'param_name' 	=> 'cta_style',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Style', 'pix-opts'),
                'admin_label'	=> false,
                'std' => '',
                'value' 		=> array(
                    __('Default (Full width)','pix-opts') 	=> 'default',
                    __('Small','pix-opts')	    => 'small',
                ),
            ),

            array (
                'param_name' 	=> 'title_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Title color', 'pix-opts'),
                'admin_label'	=> false,
                'group' => __( 'Advanced', 'essentials-core' ),
                'value' 		=> $colors,
                'std'			=> 'heading-default',
            ),

            array (
                'param_name' 	=> 'title_custom_color',
                'type' 			=> 'colorpicker',
                'heading' 		=> __('Title color', 'pix-opts'),
                'admin_label'	=> false,
                'group' => __( 'Advanced', 'essentials-core' ),
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
                'admin_label'	=> false,
                'group' => __( 'Advanced', 'essentials-core' ),
                'std' => 'h4',
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
                'group' => __( 'Advanced', 'essentials-core' ),
                "dependency" => array(
                    "element" => "title_size",
                    "value" => "custom"
                ),
            ),
            array (
                'param_name' 	=> 'content_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Content color', 'pix-opts'),
                'admin_label'	=> false,
                'group' => __( 'Advanced', 'essentials-core' ),
                'std'           => 'body-default',
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
                'heading' 		=> __('Size', 'pix-opts'),
                'description' 	=> __('Select the size of the text.', 'pix-opts'),
                'admin_label'	=> false,
                'group' => __( 'Advanced', 'essentials-core' ),
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

        ),
        pix_add_params_to_group($button_params, "Button Settings"),
        $effects_params

    )
));

?>
