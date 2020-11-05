<?php
$map_params = array(
    array (
        'param_name' 	=> 'address',
        'type' 			=> 'textfield',
        'heading' 		=> __('Map text (Address)', 'pix-opts'),
        'admin_label'	=> true,
        'value'         => '',
    ),
    array (
        'param_name' 	=> 'latitude',
        'type' 			=> 'textfield',
        'heading' 		=> __('Latitude', 'pix-opts'),
        'admin_label'	=> true,
        'value'         => '48.892506',
    ),
    array (
        'param_name' 	=> 'longitude',
        'type' 			=> 'textfield',
        'heading' 		=> __('Longitude', 'pix-opts'),
        'admin_label'	=> true,
        'value'         => '2.236413'
    ),
    array (
        'param_name' 	=> 'map_zoom',
        'type' 			=> 'textfield',
        'heading' 		=> __('Map zoom', 'pix-opts'),
        'admin_label'	=> true,
        'value'         => '14'
    ),
    array (
        'param_name' 	=> 'map_style',
        'type' 			=> 'dropdown',
        'heading' 		=> __('Map style', 'pix-opts'),
        'admin_label'	=> true,
        'value'			=> array(
            'Silver'		=> 'silver',
            'Standard'		=> 'standard',
            'Retro' 		=> 'retro',
            'Dark' 		    => 'dark',
            'Night' 		=> 'night',
            'Aubergine'     => 'aubergine',
            'Custom' 		=> 'custom'
        ),
    ),
    array (
        'param_name' 	=> 'custom_color',
        'type' 			=> 'colorpicker',
        'heading' 		=> __('Custom color', 'pix-opts'),
        'admin_label'	=> true,
        'value'         => '#1274E7',
        'dependency' => array(
            "element" => "map_style",
            "value" => array("custom")
        )
    ),
    array (
        'param_name' 	=> 'custom_saturation',
        'type' 			=> 'textfield',
        'heading' 		=> __('Custom saturation', 'pix-opts'),
        'admin_label'	=> true,
        'value'         => '-20',
        'dependency' => array(
            "element" => "map_style",
            "value" => array("custom")
        )
    ),
    array (
        'param_name' 	=> 'custom_brightness',
        'type' 			=> 'textfield',
        'heading' 		=> __('Custom brightness', 'pix-opts'),
        'admin_label'	=> true,
        'value'         => '5',
        'dependency' => array(
            "element" => "map_style",
            "value" => array("custom")
        )
    ),



    array (
        'param_name' 	=> 'marker',
        'type' 			=> 'attach_image',
        'heading' 		=> __('Marker Image', 'pix-opts'),
        "description" => __( "Upload custom marker image if you want to replace the default one.", "pix-opts" ),
        'admin_label'	=> false,
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
     "type" => "dropdown",
     "heading" => __("Shadow Style", "js_composer"),
     "param_name" => "style",
     "admin_label" => true,
     "value" => array_flip(array(
        "" => "Default",
        "1"       => "Small shadow",
        "2"       => "Medium shadow",
        "3"       => "Large shadow",
        "4"       => "Inverse Small shadow",
        "5"       => "Inverse Medium shadow",
        "6"       => "Inverse Large shadow",
    )),
     'save_always' => true,
     'group' => __( 'Advanced', 'essentials-core' ),
     "description" => __( "Please select the style you wish for the box to display in.", "js_composer")
    ),
    array(
    "type" => "dropdown",
    "heading" => __("Shadow Hover Style", "js_composer"),
    "param_name" => "hover_effect",
    "admin_label" => true,
    "value" => array_flip(array(
      ""       => "None",
      "1"       => "Small hover shadow",
      "2"       => "Medium hover shadow",
      "3"       => "Large hover shadow",
      "4"       => "Inverse Small hover shadow",
      "5"       => "Inverse Medium hover shadow",
      "6"       => "Inverse Large hover shadow",
    )),
    'save_always' => true,
    'group' => __( 'Advanced', 'essentials-core' ),
    "description" => __( "Please select the style you wish for the box to display in.", "js_composer")
    ),
    array(
    "type" => "dropdown",
    "heading" => __("Hover Animation", "js_composer"),
    "param_name" => "add_hover_effect",
    "admin_label" => true,
    "value" => array_flip(array(
      ""       => "None",
      "1"       => "Fly Small",
      "2"       => "Fly Medium",
      "3"       => "Fly Large",
      "4"       => "Scale Small",
      "5"       => "Scale Medium",
      "6"       => "Scale Large",
      "7"       => "Scale Inverse Small",
      "8"       => "Scale Inverse Medium",
      "9"       => "Scale Inverse Large",
    )),
    'save_always' => true,
    'group' => __( 'Advanced', 'essentials-core' ),
    "description" => __( "Please select the style you wish for the box to display in.", "js_composer")
    ),


    array(
     "type" => "dropdown",
     "heading" => __("Map height", "js_composer"),
     "param_name" => "map_height",
     "admin_label" => true,
     "std" => '',
     "description" => 'To use full height you should enable the "Equal height" option in the containg section/row.',
     "value" => array_flip(array(
         ""  => "Big",
         "map-md" => "Medium",
         "map-sm" => "Small",
        "full-height"       => "Full height",
    )),
     'save_always' => true,
     'group' => __( 'Advanced', 'essentials-core' ),
    ),


    array(
      'type' => 'css_editor',
      'heading' => __( 'Css', 'essentials-core' ),
      'param_name' => 'css',
      'group' => __( 'Design options', 'essentials-core' ),
      ),
);
if(empty(pix_plugin_get_option('google-api-key'))){
$map_params = array_merge(array(
    array(
        'type'        => 'pix_param_section_notice',
        'pix_title'  => 'Google Maps API key is not configured in theme options, for more information check <a target="_blank" href="https://essentials.pixfort.com/knowledge-base/using-advanced-google-maps-styles/">this article</a> from our knowledge base.',
        'param_name'	=> 'pix_maps_notice',
    )
), $map_params);
}
// Map -----------------------------
vc_map( array (
    'base' 			=> 'pix_map',
    'name' 			=> __('pixfort Google Maps', 'pix-opts'),
    'category' 		=> __('pixfort', 'pix-opts'),
    "weight"	=> "1000",
    'class'         => 'pixfort_element',
    'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/maps.png',
    'description' 	=> __('Add awesome Google Maps with premium skins', 'pix-opts'),
    'params' 		=> $map_params
));

 ?>
