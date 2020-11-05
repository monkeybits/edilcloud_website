<?php

$content_stack_params = array(

    array (
        'param_name' 	=> 'image',
        'type' 			=> 'attach_image',
        'heading' 		=> __('Image', 'pix-opts'),
        'admin_label'	=> false,
    ),

    array (
        'param_name' 	=> 'content_pos',
        'type' 			=> 'dropdown',
        'heading' 		=> __('Content Position', 'pix-opts'),
        'admin_label'	=> false,
        'value' 		=> array(
            __('Left','pix-opts') 	=> 'pix-left-content',
            __('Right','pix-opts')	    => 'pix-right-content'
        )
    ),
    array (
        'param_name' 	=> 'content_padding',
        'type' 			=> 'dropdown',
        'heading' 		=> __('Content padding', 'pix-opts'),
        'admin_label'	=> false,
        'value' 		=> array(
            __('none','pix-opts') 	=> 'p-0',
            __('5px','pix-opts')	    => 'pix-p-5',
            __('10px','pix-opts')	    => 'pix-p-10',
            __('15px','pix-opts')	    => 'pix-p-15',
            __('20px','pix-opts')	    => 'pix-p-20',
            __('25px','pix-opts')	    => 'pix-p-25',
            __('30px','pix-opts')	    => 'pix-p-30',
            __('35px','pix-opts')	    => 'pix-p-35',
            __('40px','pix-opts')	    => 'pix-p-40'
        ),
        'std'           => 'pix-p-40'
    ),

    array (
        'param_name' 	=> 'rounded_box',
        'type' 			=> 'dropdown',
        'heading' 		=> __('Rounded corners', 'pix-opts'),
        'admin_label'	=> false,
        'value' 		=> array(
            __('No','pix-opts') 	=> 'rounded-0',
            __('Rounded','pix-opts')	    => 'rounded',
            __('Rounded Large','pix-opts')	    => 'rounded-lg',
            __('Rounded 5px','pix-opts')	    => 'rounded-xl',
            __('Rounded 10px','pix-opts')	    => 'rounded-10',
        )
    ),
);

vc_map( array(
  "name" => __("Content Stack", "js_composer"),
  "base" => "pix_content_stack",
  "content_element" => true,
  "show_settings_on_create" => true,
  'category' 		=> __('pixfort', 'pix-opts'),
  "weight"	=> "1000",
  'class'         => 'pixfort_element',
  'icon' 			=> PIX_CORE_PLUGIN_URI . 'functions/images/elements/content-stack.png',
  'description' 	=> __('Create custom content box with image', 'pix-opts'),
  "is_container" => true,
  "params" => array_merge(
      $content_stack_params,
        $effects_params,

        array(
            array(
             "type" => "dropdown",
             "heading" => __("Image Shadow Style", "js_composer"),
             "param_name" => "img_style",
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
             "description" => __( "Please select the style you wish for the box to display in.", "js_composer")
            ),
            array(
            "type" => "dropdown",
            "heading" => __("Image Shadow Hover Style", "js_composer"),
            "param_name" => "img_hover_effect",
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
            "description" => __( "Please select the style you wish for the box to display in.", "js_composer")
            ),
            array(
            "type" => "dropdown",
            "heading" => __("Image Hover Animation", "js_composer"),
            "param_name" => "img_add_hover_effect",
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
            "description" => __( "Please select the style you wish for the box to display in.", "js_composer")
            )
        ),

        $animation_params,
        array(


    array(
          "type" => "checkbox",
          "heading" => __( "Gradient Background on hover", "pix-opts" ),
          "param_name" => "pix_bg_gradient_hover",
          "value" => array(
                   "Yes" => "1"
           ),
      ),


array(
      "type" => "checkbox",
      "heading" => __( "Enable Particles", "pix-opts" ),
      "param_name" => "pix_particles_check",
      'group' => __( 'Particles', 'essentials-core' ),
      "value" => array(
               "Yes" => "1"
       ),
      "description" => __( "Enable animated images in the background.", "pix-opts" )
  ),
  array(
      'type' => 'param_group',
      'value' => '',
      'param_name' => 'pix_particles',
      'heading' 		=> __('Particles', 'pix-opts'),
      "dependency" => array(
            "element" => "pix_particles_check",
            "value" => "1"
        ),
      'group' => __( 'Particles', 'essentials-core' ),
      'params' => array(
          array (
              'param_name' 	=> 'image',
              'type' 			=> 'attach_image',
              'heading' 		=> __('Image', 'pix-opts'),
              'admin_label'	=> false,
          ),

          array(
           "type" => "dropdown",
           "heading" => __("Horizontal Position", "pix-opts"),
           "param_name" => "h_position",
           "value" => array_flip(array(
                  "left" 			=> "Left",
                  "right"       => "Right"
              )),
               "description" => __( "Please select the horizontal origin of the alignment.", "pix-opts")
            ),
          array (
              'param_name' 	=> 'horizontal',
              'type' 			=> 'textfield',
              'heading' 		=> __('Horizontal value', 'pix-opts'),
              "description" => __( "Please input the value (with the unit: %, px,.. etc).", "pix-opts"),
              'admin_label'	=> false,
              'save_always' => true,
              'value'           => '0',
          ),
          array(
           "type" => "dropdown",
           "heading" => __("Vertical Position", "pix-opts"),
           "param_name" => "v_position",
           "value" => array_flip(array(
                  "top" 			=> "Top",
                  "bottom"       => "Bottom"
              )),
               "description" => __( "Please select the horizontal origin of the alignment.", "pix-opts")
            ),
          array (
              'param_name' 	=> 'vertical',
              'type' 			=> 'textfield',
              'heading' 		=> __('Vertical value', 'pix-opts'),
              'value'           => '0',
              'save_always' => true,
              "description" => __( "Please input the value (with the unit: %, px,.. etc).", "pix-opts"),
              'admin_label'	=> false,
          ),
          array(
                "type" => "checkbox",
                "heading" => __( "Animation type", "pix-opts" ),
                "param_name" => "pix_particles_type",
                "value" => array_flip(array(
                  "scroll_parallax"       => "Scroll Parallax",
              )),
            ),
          array(
                "type" => "checkbox",
                "param_name" => "pix_particles_type_2",
                "value" => array_flip(array(
                  "mouse_parallax" 			=> "Mouse Parallax"
              )),
            ),
          array(
                "type" => "checkbox",
                "param_name" => "pix_particles_type_3",
                "value" => array_flip(array(
                  "scroll_rotate" 			=> "Scroll rotate"
              )),
            ),


          array (
              'param_name' 	=> 'depth',
              'type' 			=> 'textfield',
              'heading' 		=> __('Parallax Depth', 'pix-opts'),
              'admin_label'	=> false,
              'std'			=> '0.2',
              "description" => __( "Depth value is between 0 and 1.", "pix-opts" ),
              "dependency" => array(
                    "element" => "pix_particles_type_2",
                    "value" => "mouse_parallax"
                ),
          ),

          array (
              'param_name' 	=> 'xaxis',
              'type' 			=> 'textfield',
              'heading' 		=> __('X axis', 'pix-opts'),
              'admin_label'	=> false,
              'value'			=> '100',
              "dependency" => array(
                    "element" => "pix_particles_type",
                    "value" => "scroll_parallax"
                ),
          ),
          array (
              'param_name' 	=> 'yaxis',
              'type' 			=> 'textfield',
              'heading' 		=> __('Y axis', 'pix-opts'),
              'admin_label'	=> false,
              'std'			=> '0',
              "dependency" => array(
                    "element" => "pix_particles_type",
                    "value" => "scroll_parallax"
                ),
          ),


          array (
              'param_name' 	=> 'rotation_speed',
              'type' 			=> 'textfield',
              'heading' 		=> __('Roatation speed', 'pix-opts'),
              'admin_label'	=> false,
              'std'			=> '300',
              "description" => __( "A bigger number is a slower speed.", "pix-opts" ),
              "dependency" => array(
                    "element" => "pix_particles_type_3",
                    "value" => "scroll_rotate"
                ),
          ),

          array(
                "type" => "checkbox",
                "heading" => __( "Inverse rotation direction", "pix-opts" ),
                "param_name" => "pix_inverse_rotation",
                "value" => array_flip(array(
                  "scroll_inverse"       => "Yes",
              )),
              "dependency" => array(
                    "element" => "pix_particles_type_3",
                    "value" => "scroll_rotate"
                ),
            ),

          array (
              'param_name' 	=> 'img_width',
              'type' 			=> 'textfield',
              'heading' 		=> __('Image width', 'pix-opts'),
              'description' 	=> __('Please add the unit (for example: px or %).', 'pix-opts'),
              'admin_label'	=> false,
          ),



          array (
              'param_name' 	=> 'animation',
              'type' 			=> 'dropdown',
              'heading' 		=> __('Start Animation', 'pix-opts'),
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
             "heading" => __( "Infinite Animation type", "pix-opts" ),
             "param_name" => "pix_infinite_animation",
             "value" => $infinite_animation,
             'admin_label'	=> false,
         ),
          array(
             "type" => "dropdown",
             "heading" => __( "Infinite Animation Speed", "pix-opts" ),
             "param_name" => "pix_infinite_speed",
             "value" => $animation_speeds,
             'admin_label'	=> false,
             "dependency" => array(
                   "element" => "pix_infinite_animation",
                   "not_empty" => true
               ),
         ),


          array(
                "type" => "checkbox",
                "heading" => __( "Hide on mobile", "pix-opts" ),
                "param_name" => "hide",
                "value" => __( "1", "pix-opts" ),
                "description" => __( "Hide the element on mobile devices.", "pix-opts" )
            ),

      )
),

array(
      "type" => "checkbox",
      "heading" => __( "Show Particles on top of the content", "pix-opts" ),
      "param_name" => "particles_top_index",
      "value" => array("Yes" => "overflow-hidden",),
      "dependency" => array(
            "element" => "pix_particles_check",
            "value" => "1"
        ),
        'group' => __( 'Particles', 'essentials-core' ),
  ),

array(
      "type" => "checkbox",
      "heading" => __( "Hide content outside the box", "pix-opts" ),
      "param_name" => "overflow",
      "value" => array("Yes" => "overflow-hidden",),
  ),

array(
    "type" => "textfield",
    "heading" => __("Extra class name", "my-text-domain"),
    "param_name" => "el_class",
    "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "my-text-domain"),
    'value'       => 'mb-2',
),

array(
  'type' => 'css_editor',
  'heading' => __( 'Css', 'essentials-core' ),
  'param_name' => 'css',
  'group' => __( 'Content Design options', 'essentials-core' ),
  ),
array(
  'type' => 'css_editor',
  'heading' => __( 'Css', 'essentials-core' ),
  'param_name' => 'el_css',
  'group' => __( 'Element Design options', 'essentials-core' ),
  ),


)),
  "js_view" => 'VcColumnView'
  )
 );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
  class WPBakeryShortCode_pix_content_stack extends WPBakeryShortCodesContainer {
  }
}


 ?>
