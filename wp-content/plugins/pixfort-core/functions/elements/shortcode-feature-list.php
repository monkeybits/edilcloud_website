<?php


$features_list_params = array(
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
    ),


    array (
        'param_name' 	=> 'content_color',
        'type' 			=> 'dropdown',
        'heading' 		=> __('Content color', 'pix-opts'),
        'admin_label'	=> false,
        'value' 		=> $colors,
        'std'			=> 'primary',
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
    ),


    array (
        'param_name' 	=> 'icon_color',
        'type' 			=> 'dropdown',
        'heading' 		=> __('Icon color', 'pix-opts'),
        'admin_label'	=> false,
        'value' 		=> $colors,
        'std'			=> 'primary',
    ),
    array (
        'param_name' 	=> 'custom_icon_color',
        'type' 			=> 'colorpicker',
        'heading' 		=> __('Icon Color', 'pix-opts'),
        'admin_label'	=> false,
        "dependency" => array(
            "element" => "icon_color",
            "value" => "custom"
        ),

    ),


    array(
        'type' => 'param_group',
        'value' => '',
        'param_name' => 'features',
        'heading' 		=> __('Features', 'pix-opts'),
        'description' 	=> __('Add each feature in the desired order.', 'pix-opts'),
        'params' => array(
            array (
                'param_name' 	=> 'text',
                'type' 			=> 'textfield',
                'heading' 		=> __('Text', 'pix-opts'),
                'admin_label'	=> true,
            ),


            array(
                "type" => "dropdown",
                "heading" => __( "Use image or icon", "pix-opts" ),
                "param_name" => "media_type",
                "std" => "icon",
                "value" => array(
                    "Icon" => "icon",
                    "Duo tone icon" => "duo_icon",
                ),
                "group"	      => "Image / Icon",
            ),

            array(
                'type'        => 'pix_icons_select',
                'heading'  => 'Shapes Builder',
                'param_name'  => 'pix_duo_icon',
                "class" => "my_param_field",
                'value'       => '0',
                "group"	      => "Image / Icon",
                "dependency" => array(
                    "element" => "media_type",
                    "value" => "duo_icon"
                ),
            ),

            array (
                'type' => 'iconpicker',
                'heading' => __( 'Line Icon', 'pix-opts' ),
                'param_name' => 'icon',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'pix-icons',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                "dependency" => array(
                    "element" => "media_type",
                    "value" => "icon"
                ),
                'description' => __( 'Select icon from library.', 'pix-opts' ),
            ),

        )
    ),

    array(
        "type" => "checkbox",
        "heading" => __( "Text format", "pix-opts" ),
        "param_name" => "flist_bold",
        "value" => array("Bold" => "font-weight-bold"),
        "std" => "font-weight-bold",
        'save_always' => true,
    ),
    array(
        "type" => "checkbox",
        "param_name" => "flist_italic",
        "value" => array("Italic" => "font-italic",),
    ),
    array(
        "type" => "checkbox",
        "param_name" => "flist_secondary_font",
        "value" => array("Secondary font" => "secondary-font",),
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
);
// Feature List --------------------------------------
vc_map( array (
    'base' 			=> 'pix_feature_list',
    'name' 			=> __('Features List', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/features-list.jpg',
    'description' 	=> __('Create custom features list element', 'pix-opts'),
    'params' 		=> array_merge($features_list_params, array (

        array (
            'param_name' 	=> 'features_content_align',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Content align', 'pix-opts'),
            'admin_label'	=> false,
            'value'			=> array_flip(array(
                ''			=> 'Default',
                'justify-content-start'			=> 'Left',
                'justify-content-center'		=> 'Center',
                'justify-content-end' 		=> 'Right',
            )),
        ),

        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'essentials-core' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'essentials-core' ),
        ),

    )

)
));

?>
