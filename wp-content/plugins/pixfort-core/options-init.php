<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "pix_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.





    $args = array(
        'opt_name' => 'pix_options',
        'display_name' => 'Essentials',
        'display_version' => $theme->get('Version'),
        'page_slug' => 'pixfort',
        'page_title' => 'Theme Options',
        'update_notice' => FALSE,
        // 'intro_text' => 'Text to appear at the top of the options panel, below the title.',
        // 'footer_text' => 'Text to be displayed at the bottom of the options panel, in the footer area.',
        'admin_bar' => TRUE,
        'menu_type' => 'submenu',
        'menu_title' => 'Theme Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'page_parent'          => 'pixfort-dashboard',
        'page_priority' => TRUE,
        'customizer' => TRUE,
        'default_mark' => '*',

        'templates_path'    =>  PIX_CORE_PLUGIN_DIR . '/pixfort-redux/templates/panel/',
        'google_api_key' => 'AIzaSyAYj4cql4olnmb_c9U4Br0V5CMStgOwLTk',
        // 'google_api_key' => 'AIzaSyDTKXECdJYAfVeh5EXoM_9Uwk5l1uiP1-0',
        // 'google_update_weekly' => true,
        // 'disable_google_fonts_link' => true,
        'class' => 'pixfort_options_container',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
        'use_cdn' => FALSE,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.

    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pixfort',
        'title' => 'Like us on Facebook',
        'svg'  => PIX_CORE_PLUGIN_DIR.'/functions/images/options/social/fb.svg',
    );

    $args['share_icons'][] = array(
        'url'   => 'https://www.dribbble.com/pixfort',
        'title' => 'Follow us on Dribbble',
        'svg'  => PIX_CORE_PLUGIN_DIR.'/functions/images/options/social/dribbble.svg',
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.twitter.com/pixfort',
        'title' => 'Follow us on Twitter',
        'svg'  => PIX_CORE_PLUGIN_DIR.'/functions/images/options/social/twitter.svg',
    );

    $args['share_icons'][] = array(
        'url'   => 'https://www.behance.net/pixfort',
        'title' => 'Follow us on Behance',
        'svg'  => PIX_CORE_PLUGIN_DIR.'/functions/images/options/social/behance.svg',
    );

    $args['share_icons'][] = array(
        'url'   => 'https://www.instagram.com/pixfort',
        'title' => 'Follow us on Instagram',
        'svg'  => PIX_CORE_PLUGIN_DIR.'/functions/images/options/social/instagram.svg',
    );

    // add_filter('redux/options/' . $args['opt_name'] . '/compiler', array( $this, 'compiler_action' ), 10, 3);
    add_filter('redux/options/' . $opt_name . '/saved', 'compiler_action', 10, 2);

    Redux::setArgs( $opt_name, $args );


    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    // $tabs = array(
    //     array(
    //         'id'      => 'redux-help-tab-1',
    //         'title'   => __( 'Theme Information 1', 'admin_folder' ),
    //         'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
    //     ),
    //     array(
    //         'id'      => 'redux-help-tab-2',
    //         'title'   => __( 'Theme Information 2', 'admin_folder' ),
    //         'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
    //     )
    // );
    // Redux::setHelpTab( $opt_name, $tabs );
    //
    // // Set the help sidebar
    // $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    // Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */


    require_once dirname( __FILE__ ) . '/theme-options.php';

    /*
     * <--- END SECTIONS
     */



     /**
      * This is used to return option value from the options array
      */
     function pix_plugin_get_option( $opt_name_val, $default = null ){
         global $opt_name;
         $redux_demo = get_option( $opt_name );
         if( !empty($redux_demo[$opt_name_val]) ){
             return $redux_demo[$opt_name_val];
         }else{
             return $default;
         }
     }
     /**
      * This is used to echo option value from the options array
      */
     function pix_plugin_show_option( $opt_name_val, $default = null ){
         global $opt_name;
         $redux_demo = get_option( $opt_name );
         $val = $redux_demo[$opt_name_val];
         if($val){
             echo $val;
         }else{
             echo $default;
         }
     }

     function compiler_action($options, $css) {
         if(function_exists('pix_update_style_url')){
             pix_update_style_url();
         }
     }

    function pix_customizer_update(){
        if(function_exists('pix_update_style_url')){
            pix_update_style_url();
        }
    }
    add_action( 'customize_save', 'pix_customizer_update' );
    add_action( 'customize_save_after', 'pix_customizer_update', 99 );
    add_action( 'redux/customizer/live_preview	', 'pix_customizer_update' );
