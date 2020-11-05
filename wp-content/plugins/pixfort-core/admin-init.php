<?php

    define( 'PIX_CORE_PLUGIN_URI', plugin_dir_url( __FILE__ ) );

    define( 'PIX_CORE_PLUGIN_DIR', dirname( __FILE__ ) );
    define( 'PLUGIN_VERSION', PIXFORT_PLUGIN_VERSION );

    define( 'PIX_IMG_PLACEHOLDER', PIX_CORE_PLUGIN_URI .'functions/images/placeholder.png' );

    $theme = wp_get_theme(get_template());

    $pixfort_themes = array('Essentials', 'Essentials Child', 'MEGAPACK', 'MEGAPACK Child');

    // if ( !in_array($theme->name, $pixfort_themes) ) {
    //     return false;
    // }

    // Load functions meta
    if ( file_exists( dirname( __FILE__ ) . '/functions/meta-functions.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/meta-functions.php';
    }

    // Load Global functions
    if ( file_exists( dirname( __FILE__ ) . '/functions/global-functions.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/global-functions.php';
    }
    // Load Page meta
    if ( file_exists( dirname( __FILE__ ) . '/functions/meta-page.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/meta-page.php';
    }
    // Load Post meta
    if ( file_exists( dirname( __FILE__ ) . '/functions/meta-post.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/meta-post.php';
    }

    // Load Header meta
    if ( file_exists( dirname( __FILE__ ) . '/functions/header.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/header.php';
    }
    // Load Footer meta
    if ( file_exists( dirname( __FILE__ ) . '/functions/footer.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/footer.php';
    }
    // Load Popup meta
    if ( file_exists( dirname( __FILE__ ) . '/functions/popup.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/popup.php';
    }
    // Load Portfolio meta
    if ( file_exists( dirname( __FILE__ ) . '/functions/portfolio.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/portfolio.php';
    }
    // Load Post category meta
    if ( file_exists( dirname( __FILE__ ) . '/functions/categories.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/categories.php';
    }


    // Load the TGM init if it exists
    if ( file_exists( dirname( __FILE__ ) . '/tgm/tgm-init.php' ) ) {
        require_once dirname( __FILE__ ) . '/tgm/tgm-init.php';
    }

    // Load the embedded Redux Framework
    if ( file_exists( dirname( __FILE__ ).'/redux-framework/framework.php' ) ) {
        require_once dirname(__FILE__).'/redux-framework/framework.php';
    }

    // Load the theme/plugin options
    if ( file_exists( dirname( __FILE__ ) . '/options-init.php' ) ) {
        require_once dirname( __FILE__ ) . '/options-init.php';
    }

    // Load Redux extensions
    if ( file_exists( dirname( __FILE__ ) . '/redux-extensions/extensions-init.php' ) ) {
        require_once dirname( __FILE__ ) . '/redux-extensions/extensions-init.php';
    }
    if ( file_exists( dirname( __FILE__ ) . '/functions/style/pix-css.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/style/pix-css.php';
    }

    // Load shortcodes
    if ( file_exists( dirname( __FILE__ ) . '/functions/shortcodes.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/shortcodes.php';
    }
    // Widgets
    if ( file_exists( dirname( __FILE__ ) . '/functions/widgets.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/widgets.php';
    }

    // Widgets
    if ( file_exists( dirname( __FILE__ ) . '/functions/product.php' ) ) {
        require_once dirname( __FILE__ ) . '/functions/product.php';
    }

    // if ( file_exists( dirname( __FILE__ ) . '/functions/gutenberg/init.php' ) ) {
    //     require_once dirname( __FILE__ ) . '/functions/gutenberg/init.php';
    // }


    add_action('init', 'admin_only');
    function admin_only() {
        if ( defined( 'WPB_VC_VERSION' ) ) {
        // Load visual-composer shortcodes
            if ( file_exists( dirname( __FILE__ ) . '/functions/visual-composer.php' ) ) {
                require_once dirname( __FILE__ ) . '/functions/visual-composer.php';
            }
            if ( file_exists( dirname( __FILE__ ) . '/functions/params.php' ) ) {
                require_once dirname( __FILE__ ) . '/functions/params.php';
            }

        }
        if ( defined( 'WPB_VC_VERSION') || class_exists( '\Elementor\Plugin' ) ) {
           if ( file_exists( dirname( __FILE__ ) . '/functions/visual-composer-icons.php' ) ) {
               require_once dirname( __FILE__ ) . '/functions/visual-composer-icons.php';
           }
       }


    }

    add_action ('plugins_loaded', 'pix_after_plugin_loaded');

    function pix_after_plugin_loaded () {
        // Elementor
        if( class_exists( '\Elementor\Plugin' ) ) {
            if ( file_exists( dirname( __FILE__ ) . '/functions/elementor/init.php' ) ) {
                $code = get_option('envato_purchase_code_27889640');
                if($code){
                    require_once dirname( __FILE__ ) . '/functions/elementor/init.php';
                }
            }
        }
    }


    add_action( 'wp_head', 'pix_head_options', 2 );
    function pix_head_options(){
        if(pix_plugin_get_option('favicon-img')){
    		?>
    		<link rel="Shortcut Icon" type="image/x-icon" href="<?php echo esc_url( pix_plugin_get_option('favicon-img')['url'] ); ?>" />
    		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( pix_plugin_get_option('favicon-img')['url'] ); ?>" />
    		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( pix_plugin_get_option('favicon-img')['url'] ); ?>" />
    		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( pix_plugin_get_option('favicon-img')['url'] ); ?>" />
    		<?php
    	}
        if(pix_plugin_get_option('website-preview')){
            if(pix_plugin_get_option('website-preview')['url']){
        		?>
        		<meta property="og:image" content="<?php echo esc_url( pix_plugin_get_option('website-preview')['url'] ); ?>" />
        		<meta name="twitter:image" content="<?php echo esc_url( pix_plugin_get_option('website-preview')['url'] ); ?>" />
        		<?php
            }
    	}
    }
