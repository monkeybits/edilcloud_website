<?php


add_action ( 'vc_before_init', 'pix_vc_params' );
    if( ! function_exists( 'pix_vc_params' ) ){
        function pix_vc_params(){
            function pix_param_icons_select( $settings, $value ) {
                require dirname( __FILE__ ) . '/images/icons_list.php';
                $opts_out = '';


                foreach ($pix_icons_list as $key) {

                    $opts_out .= '<div class="pix_param_icon" title="'.$key.'" data-val="'.$key.'"><img src="'.PIX_CORE_PLUGIN_URI.'functions/images/icons/'.$key.'.svg" /></div>';
                }

             return '<div class="pix_param_block pix_param_icon_out '.$settings['class'].'">'.
             '<div style="pading-bottom:5px;"><input type="text" class="pix_param_icons_search" placeholder="Search..." /></div>'.
             '<div class="pix_param_icon_container">'.
                $opts_out.
                '</div>'.
                 '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value pix_param_val wpb-textinput ' .
                 esc_attr( $settings['param_name'] ) . ' ' .
                 esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />'
                 .'</div>';
            }

            vc_add_shortcode_param('pix_icons_select', 'pix_param_icons_select', PIX_CORE_PLUGIN_URI .'/functions/js/params/icons.js');


            function pix_param_img_select( $settings, $value ) {

                $opts_out = '';
                for ($x = 1; $x <= 23; $x++) {
                    $opts_out .= '<div class="pix_param_img" data-val="'.$x.'"><img src="'.PIX_CORE_PLUGIN_URI.'functions/images/shapes/divider-'.$x.'.png" /></div>';
                }
             return '<div class="pix_param_block '.$settings['class'].'">'.
            '<div class="pix_param_img selected" data-val="0"><img src="'.PIX_CORE_PLUGIN_URI.'functions/images/shapes/none.png" /></div>'.
            '<div class="pix_param_img" data-val="dynamic"><img src="'.PIX_CORE_PLUGIN_URI.'functions/images/shapes/divider-dynamic.gif" /></div>'.
            $opts_out.

             '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value pix_param_val wpb-textinput ' .
             esc_attr( $settings['param_name'] ) . ' ' .
             esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />'
             .'</div>';
            }

            vc_add_shortcode_param('pix_img_select', 'pix_param_img_select', PIX_CORE_PLUGIN_URI .'/functions/js/params/shapes.js');



            function pix_param_title( $settings, $value ) {

             return '<div class="pix_param_block">'.

            esc_attr( $settings['param_name'] ).

             '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value pix_param_val wpb-textinput ' .
             esc_attr( $settings['param_name'] ) . ' ' .
             esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />'
             .'</div>';
            }

            vc_add_shortcode_param('pix_title', 'pix_param_title');


            function pix_param_globals( $settings, $value ) {

             return '<div class="pix_param_block">'.
             '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value pix_param_val wpb-textinput ' .
             esc_attr( $settings['param_name'] ) . ' ' .
             esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />'
             .'</div>';
            }

            vc_add_shortcode_param('pix_param_globals', 'pix_param_globals', PIX_CORE_PLUGIN_URI .'/functions/js/params/global.js');


            function pix_param_section( $settings, $value ) {

             return '<div class="pix_param_block">'.
             '<div class="pix_param_section"><hr /><h3><strong>'.$settings['pix_title'].'</strong></h3></div>'.

             '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value pix_param_val wpb-textinput ' .
             esc_attr( $settings['param_name'] ) . ' ' .
             esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />'
             .'</div>';
            }

            vc_add_shortcode_param('pix_param_section', 'pix_param_section');

            function pix_param_section_notice( $settings, $value ) {

             return '<div class="pix_param_block">'.
             '<div class="pix_param_section"><h4>'.$settings['pix_title'].'</h4></div>'.

             '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value pix_param_val wpb-textinput ' .
             esc_attr( $settings['param_name'] ) . ' ' .
             esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />'
             .'</div>';
            }

            vc_add_shortcode_param('pix_param_section_notice', 'pix_param_section_notice');



        }

    }


 ?>
