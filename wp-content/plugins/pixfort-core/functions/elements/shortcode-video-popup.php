<?php

// Video Popup -----------------------------
vc_map( array (
    'base' 			=> 'pix_video_popup',
    'name' 			=> __('Pix Video Popup', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    'class'         => 'pixfort_element',
    "weight"	=> "1000",
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/video-popup.png',
    'description' 	=> __('Add button for video popup', 'pix-opts'),
    'params' 		=>
        array (

            array (
                'param_name' 	=> 'embed_code',
                'type' 			=> 'textarea_raw_html',
                'heading' 		=> __('Embed Code', 'pix-opts'),
                'admin_label'	=> false,
            ),


            array (
                'param_name' 	=> 'aspect',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Aspect ratio', 'pix-opts'),
                'admin_label'	=> false,
                'value' 		=> array(
                    __('21:9 aspect ratio','pix-opts') 	    => 'embed-responsive-21by9',
                    __('16:9 aspect ratio','pix-opts')	    => 'embed-responsive-16by9',
                    __('4:3 aspect ratio','pix-opts')	    => 'embed-responsive-4by3',
                    __('1:1 aspect ratio','pix-opts')	    => 'embed-responsive-1by1'
                )
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


            array (
                'param_name' 	=> 'text_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Icon color', 'pix-opts'),
                'admin_label'	=> false,
                'group' => __( 'Advanced', 'essentials-core' ),
                'value' 		=> $colors_no_custom,
                'std'           => 'primary'
            ),


            array (
                'param_name' 	=> 'bg_color',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Background color', 'pix-opts'),
                'admin_label'	=> false,
                'value' 		=> $bg_colors,
                'std'			=> 'white',
                'group' => __( 'Advanced', 'essentials-core' ),
            ),
            array (
                'param_name' 	=> 'custom_bg_color',
                'type' 			=> 'colorpicker',
                'heading' 		=> __('Custom Background Color', 'pix-opts'),
                'admin_label'	=> false,
                'group' => __( 'Advanced', 'essentials-core' ),
                "dependency" => array(
                    "element" => "bg_color",
                    "value" => "custom"
                ),
            ),

            array (
                'param_name' 	=> 'size',
                'type' 			=> 'textfield',
                'heading' 		=> __('Button size', 'pix-opts'),
                'description' 		=> __('Input the size in pixels (without writing the unit.)', 'pix-opts'),
                'admin_label'	=> true,
                'std'           => '100',
                'group' => __( 'Advanced', 'essentials-core' ),
            ),

            array (
                'param_name' 	=> 'icon_style',
                'type' 			=> 'dropdown',
                'heading' 		=> __('Icon style', 'pix-opts'),
                'admin_label'	=> false,
                'group' => __( 'Advanced', 'essentials-core' ),
                'value' 		=> array(
                    __('Filled','pix-opts')	    => 'due',
                    __('Outline','pix-opts') 	    => 'line',
                )
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
