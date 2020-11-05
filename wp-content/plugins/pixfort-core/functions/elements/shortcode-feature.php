<?php

// Feature -------------------------------------------
vc_map( array (
    'base' 			=> 'pix_feature',
    'name' 			=> __('Feature', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/feature.png',
    'description' 	=> __('Create custom Feature element', 'pix-opts'),
    'params' 		=> array (

        array (
            'param_name' 	=> 'title',
            'type' 			=> 'textfield',
            'heading' 		=> __('Title', 'pix-opts'),
            'admin_label'	=> true,
        ),


        array(
            "type" => "dropdown",
            "heading" => __( "Use image or icon", "pix-opts" ),
            "param_name" => "media_type",
            "value" => array(
                "None" => "none",
                "Image" => "image",
                "Icon" => "icon",
                "Duo tone icon" => "duo_icon",
                "Character" => "char"
            ),
            "group"	      => "Image / Icon",
        ),



        array (
            'param_name' 	=> 'title_size',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Title size', 'pix-opts'),
            'admin_label'	=> false,
            'group'         => 'Advanced',
            'std'			=> 'h5',
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
            'group'         => 'Advanced',
            'heading' 		=> __('Custom Title Size', 'pix-opts'),
            'admin_label'	=> false,
            "description" => __( "Please input the value with the unit, for example 18px.", "pix-opts"),
            "dependency" => array(
                "element" => "title_size",
                "value" => "custom"
            ),
        ),


        array (
            'param_name' 	=> 'title_color',
            'type' 			=> 'dropdown',
            'group'         => 'Advanced',
            'heading' 		=> __('Title color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'std'			=> 'heading-default',
        ),
        array (
            'param_name' 	=> 'title_custom_color',
            'type' 			=> 'colorpicker',
            'group'         => 'Advanced',
            'heading' 		=> __('Title custom color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "title_color",
                "value" => "custom"
            ),
        ),

        array(
            "type" => "checkbox",
            "heading" => __( "Title format", "pix-opts" ),
            "param_name" => "title_bold",
            "value" => array("Bold" => "font-weight-bold",),
            'group'         => 'Advanced',

        ),
        array(
            "type" => "checkbox",
            "param_name" => "title_italic",
            "value" => array("Italic" => "font-italic",),
            'group'         => 'Advanced',
        ),
        array(
            "type" => "checkbox",
            "param_name" => "title_secondary_font",
            "value" => array("Secondary font" => "secondary-font",),
            'group'         => 'Advanced',
        ),


        array (
            'param_name' 	=> 'content',
            'type' 			=> 'textarea',
            'heading' 		=> __('Content', 'pix-opts'),
            'admin_label'	=> true,
            'value' 		=> __('', 'pix-opts'),
        ),
        array (
            'param_name' 	=> 'content_size',
            'type' 			=> 'dropdown',
            'group'         => 'Advanced',
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
            'group'         => 'Advanced',
            'heading' 		=> __('Content color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'std'			=> 'text-gray',
            "dependency" => array(
                "element" => "content",
                "not_empty" => true
            ),
        ),
        array (
            'param_name' 	=> 'content_custom_color',
            'type' 			=> 'colorpicker',
            'group'         => 'Advanced',
            'heading' 		=> __('Content custom color', 'pix-opts'),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "content_color",
                "value" => "custom"
            ),
        ),
        array(
            "type" => "checkbox",
            "heading" => __( "Content format", "pix-opts" ),
            "param_name" => "content_bold",
            'group'         => 'Advanced',
            "value" => array("Bold" => "font-weight-bold",),
            "dependency" => array(
                "element" => "content",
                "not_empty" => true
            ),
        ),
        array(
            "type" => "checkbox",
            "param_name" => "content_italic",
            'group'         => 'Advanced',
            "value" => array("Italic" => "font-italic",),
            "dependency" => array(
                "element" => "content",
                "not_empty" => true
            ),
        ),
        array(
            "type" => "checkbox",
            'group'         => 'Advanced',
            "param_name" => "content_secondary_font",
            "value" => array("Secondary font" => "secondary-font",),
        ),


        array(
            "type" => "checkbox",
            "heading" => __( "Justify Content", "pix-opts" ),
            "param_name" => "justify",
            'group'         => 'Advanced',
            "value" => __( "1", "pix-opts" ),
            "dependency" => array(
                "element" => "content",
                "not_empty" => true
            ),
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
            'param_name' 	=> 'char',
            'type' 			=> 'textfield',
            'heading' 		=> __('Character', 'pix-opts'),
            "std"           => "1",
            'description' => __( 'Please input only one character.', 'js_composer' ),
            'admin_label'	=> false,
            "dependency" => array(
                "element" => "media_type",
                "value" => "char"
            ),
            "group"	      => "Image / Icon",
        ),

        array (
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'js_composer' ),
            'param_name' => 'icon',
            'settings' => array(
                'emptyIcon' => true, // default true, display an "EMPTY" icon?
                'type' => 'pix-icons',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            "group"	      => "Image / Icon",
            'description' => __( 'Select icon from library.', 'js_composer' ),
            "dependency" => array(
                "element" => "media_type",
                "value" => "icon"
            ),
        ),
        array (
            'param_name' 	=> 'icon_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Icon color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $colors,
            'std'			=> 'primary',
            "group"	      => "Image / Icon",
            "dependency" => array(
                "element" => "media_type",
                "value" => array("icon", "char", "duo_icon")
            ),
        ),



        array (
            'param_name' 	=> 'custom_icon_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Icon Color', 'pix-opts'),
            'admin_label'	=> false,
            "group"	      => "Image / Icon",
            "dependency" => array(
                "element" => "icon_color",
                "value" => "custom"
            ),

        ),

        array(
            "type" => "checkbox",
            "heading" => __( "Background circle", "pix-opts" ),
            "param_name" => "has_icon_bg",
            "group"	      => "Image / Icon",
            "value" => __( "Yes", "pix-opts" ),
            "dependency" => array(
                "element" => "media_type",
                "value" => array("icon", "char", "duo_icon")
            ),
        ),


        array (
            'param_name' 	=> 'icon_bg_color',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Icon Background color', 'pix-opts'),
            'admin_label'	=> false,
            'value' 		=> $bg_colors,
            'std'			=> 'primary-light',
            "group"	      => "Image / Icon",
            "dependency" => array(
                "element" => "has_icon_bg",
                // "value" => array("icon", "char", "duo_icon")
                "not_empty" => true
            ),
        ),
        array (
            'param_name' 	=> 'icon_custom_bg_color',
            'type' 			=> 'colorpicker',
            'heading' 		=> __('Custom Icon Background Color', 'pix-opts'),
            'admin_label'	=> false,
            "group"	      => "Image / Icon",
            "dependency" => array(
                "element" => "icon_bg_color",
                "value" => "custom"
            ),
        ),
        array (
            'param_name' 	=> 'icon_size',
            'type' 			=> 'textfield',
            'heading' 		=> __('Icon Size', 'pix-opts'),
            "std"           => "30",
            'description' => __( 'The size of the icon in pixels (without writing the unit).', 'js_composer' ),
            'admin_label'	=> false,
            "group"	      => "Image / Icon",
            "dependency" => array(
                "element" => "media_type",
                "value" => array("icon", "char", "duo_icon")
            ),
        ),



        array (
            'param_name' 	=> 'padding_title',
            'group'         => 'Advanced',
            'type' 			=> 'textfield',
            'heading' 		=> __('Padding before title', 'pix-opts'),
            "std"           => "20px",
            'admin_label'	=> false,
        ),
        array (
            'param_name' 	=> 'padding_content',
            'group'         => 'Advanced',
            'type' 			=> 'textfield',
            'heading' 		=> __('Padding before content', 'pix-opts'),
            "std"           => "20px",
            'admin_label'	=> false,
        ),


        array (
            'param_name' 	=> 'image',
            'type' 			=> 'attach_image',
            'heading' 		=> __('Image', 'pix-opts'),
            'admin_label'	=> false,
            "group"	      => "Image / Icon",
            "dependency" => array(
                "element" => "media_type",
                "value" => "image"
            ),
        ),
        array (
            'param_name' 	=> 'image_size',
            'type' 			=> 'textfield',
            'heading' 		=> __('Image Size', 'pix-opts'),
            'description' => __( 'The size of the image (with the unit), leave empty for full size.', 'js_composer' ),
            'admin_label'	=> false,
            "group"	      => "Image / Icon",
            "dependency" => array(
                "element" => "media_type",
                "value" => "image"
            ),
        ),

        array(
            "type" => "checkbox",
            "heading" => __( "Circle image", "pix-opts" ),
            "param_name" => "circle",
            "value" => __( "Yes", "pix-opts" ),
            "group"	      => "Image / Icon",
            "dependency" => array(
                "element" => "media_type",
                "value" => 'image'
            ),
        ),

        array (
            'param_name' 	=> 'icon_position',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Icon Position', 'pix-opts'),
            "group"	      => "Image / Icon",
            'admin_label'	=> false,
            'value'			=> array_flip(array(
                'top'	=> 'Top',
                'left'	=> 'Left',
            )),
            "dependency" => array(
                "element" => "media_type",
                "value" => array("icon", "image", "char", "duo_icon")
            ),
        ),

        array (
            'param_name' 	=> 'content_align',
            'type' 			=> 'dropdown',
            'heading' 		=> __('Content align', 'pix-opts'),
            'admin_label'	=> false,
            'value'			=> array_flip(array(
                'left'	=> 'Left',
                'center'	=> 'Center',
                'right'	=> 'Right',
            )),
            "dependency" => array(
                "element" => "icon_position",
                "value" => "top"
            ),
        ),





        array (
            'param_name' 	=> 'link',
            'type' 			=> 'textfield',
            'heading' 		=> __('Link', 'pix-opts'),
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

        array (
            'param_name' 	=> 'class',
            'type' 			=> 'textfield',
            'group'         => 'Advanced',
            'heading' 		=> __('Custom CSS classes for link', 'pix-opts'),
            'description' 	=> __('This option is useful when you want to use PrettyPhoto (prettyphoto) or Scroll (scroll).', 'pix-opts'),
            'admin_label'	=> true,
        ),
        array(
            'type' => 'el_id',
            'param_name' => 'element_id',
            'settings' => array(
                'auto_generate' => true,
            ),
            'heading' => esc_html__( 'Element ID', 'js_composer' ),
            'description' => sprintf( esc_html__( 'Enter element ID (Note: make sure it is unique and valid according to %sw3c specification%s).', 'js_composer' ), '<a href="https://www.w3schools.com/tags/att_global_id.asp" target="_blank">', '</a>' ),
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
