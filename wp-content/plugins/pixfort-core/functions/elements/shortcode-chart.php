<?php

// Chart ----------------------------------------------
vc_map( array (
    'base' 			=> 'chart',
    'name' 			=> __('Chart', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/chart.jpg',
    'description' 	=> __('Display awesome animated charts', 'pix-opts'),
    'params' 		=> array (

        array (
            'param_name' 	=> 'percent',
            'type' 			=> 'textfield',
            'heading' 		=> __('Percent', 'pix-opts'),
            'desc' 			=> __('Number between 0-100', 'pix-opts'),
            'value'         => '50',
            'admin_label'	=> true,
        ),

        array (
            'param_name' 	=> 'title',
            'type' 			=> 'textfield',
            'heading' 		=> __('Title', 'pix-opts'),
            'admin_label'	=> true,
        ),
        array (
            'param_name' 	=> 'text',
            'type' 			=> 'textarea',
            'heading' 		=> __('Chart text', 'pix-opts'),
            'admin_label'	=> true,
        ),
        array (
            'param_name' 	=> 'color1',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Chart color', 'pix-opts'),
            'admin_label'	=> false,
        ),
        array (
            'param_name' 	=> 'color2',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Second Chart color', 'pix-opts'),
            'desc' 			=> __('Optional: Use it to enable gradiant', 'pix-opts'),
            'admin_label'	=> false,
        ),
        array (
            'param_name' 	=> 'color3',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Third Chart color', 'pix-opts'),
            'desc' 			=> __('Optional: Use it to enable gradiant', 'pix-opts'),
            'admin_label'	=> false,
        ),
        array (
            'param_name' 	=> 'track_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Track background color', 'pix-opts'),
            // 'desc' 			=> __('Optional: Use it to enable gradiant', 'pix-opts'),
            'admin_label'	=> false,
        ),








        array(
            "type" => "checkbox",
            "heading" => __( "Percent format", "pix-opts" ),
            "param_name" => "p_bold",
            "value" => array("Bold" => "font-weight-bold"),
            'group' => __( 'Percent', 'essentials-core' ),
            "std" => "font-weight-bold"
        ),
        array(
            "type" => "checkbox",
            "param_name" => "p_italic",
            'group' => __( 'Percent', 'essentials-core' ),
            "value" => array("Italic" => "font-italic",),
        ),
        array(
            "type" => "checkbox",
            "param_name" => "p_secondary_font",
            'group' => __( 'Percent', 'essentials-core' ),
            "value" => array("Secondary font" => "secondary-font",),
        ),

        array (
            'param_name' 	=> 'p_color',
            'type' 			=> 'dropdown',
            'group' => __( 'Percent', 'essentials-core' ),
            'heading' 		=> __('Percent color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'std'			=> 'heading-default',
        ),

        array (
            'param_name' 	=> 'p_custom_color',
            'type' 			=> 'colorpicker',
            'group' => __( 'Percent', 'essentials-core' ),
            'heading' 		=> __('Percent color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "p_color",
                "value" => "custom"
            ),
        ),

        array (
            'param_name' 	=> 'p_size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Percent size', 'pix-opts'),
            'description' 	=> __('Wrap title into H1 instead of H2', 'pix-opts'),
            'group' => __( 'Percent', 'essentials-core' ),
            'admin_label'	=> false,
            'std'	=> 'h4',
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
            'param_name' 	=> 'p_custom_size',
            'type' 			=> 'textfield',
            'heading' 		=> __('Percent Size', 'pix-opts'),
            'group' => __( 'Percent', 'essentials-core' ),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "p_size",
                "value" => "custom"
            ),
        ),




        array(
            "type" => "checkbox",
            "heading" => __( "Title format", "pix-opts" ),
            "param_name" => "bold",
            "value" => array("Bold" => "font-weight-bold"),
            'group' => __( 'Title', 'essentials-core' ),
            "std" => "font-weight-bold"
        ),
        array(
            "type" => "checkbox",
            "param_name" => "italic",
            'group' => __( 'Title', 'essentials-core' ),
            "value" => array("Italic" => "font-italic",),
        ),
        array(
            "type" => "checkbox",
            "param_name" => "secondary_font",
            'group' => __( 'Title', 'essentials-core' ),
            "value" => array("Secondary font" => "secondary-font",),
        ),

        array (
            'param_name' 	=> 'title_color',
            'type' 			=> 'dropdown',
            'group' => __( 'Title', 'essentials-core' ),
            'heading' 		=> __('Title color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'std'			=> 'heading-default',
        ),

        array (
            'param_name' 	=> 'title_custom_color',
            'type' 			=> 'colorpicker',
            'group' => __( 'Title', 'essentials-core' ),
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
            'group' => __( 'Title', 'essentials-core' ),
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
            'heading' 		=> __('Title Size', 'pix-opts'),
            'group' => __( 'Title', 'essentials-core' ),
            'admin_label'	=> false,
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
            'group' => __( 'Content', 'essentials-core' ),
            'std'           => 'body-default',
            'value' 		=> $colors,
        ),


        array (
            'param_name' 	=> 'content_custom_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Content custom color', 'pix-opts'),
            'admin_label'	=> false,
            'group' => __( 'Content', 'essentials-core' ),
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
            'group' => __( 'Content', 'essentials-core' ),
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
            'param_name' 	=> 'content_align',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Content align', 'pix-opts'),
            // 'description' 	=> __('Wrap title into H1 instead of H2', 'pix-opts'),
            // 'group' => __( 'Title', 'essentials-core' ),
            'admin_label'	=> false,
            'std'	=> '',
            'value' 		=> array(
                __('Center (Default)','pix-opts') 	=> '',
                __('Left','pix-opts')	    => 'left',
                __('Right','pix-opts')	    => 'right',
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
            'type' => 'css_editor',
            'heading' => __( 'Css', 'essentials-core' ),
            'param_name' => 'chart_css',
            'group' => __( 'Design options', 'essentials-core' ),
        ),


    )
));

?>
