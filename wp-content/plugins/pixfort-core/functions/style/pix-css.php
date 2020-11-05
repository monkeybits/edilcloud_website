<?php

$loadStyleInHeader = false;
if( !empty(pix_plugin_get_option('site-page-transition')) ){
	if(pix_plugin_get_option('site-page-transition')=='disable-page-transition'){
		$loadStyleInHeader = true;
	}
}
if($loadStyleInHeader){
	add_action( 'wp_enqueue_scripts', 'pix_essentials_enqueue_styles', 20 );
}else{
	add_action( 'wp_footer', 'pix_essentials_enqueue_styles', 11 );

}

function pix_essentials_enqueue_styles() {
	// if(WP_DEBUG){
	// 	require_once 'WP_SCSS_Compiler.php';
	// 	pix_update_style_url();
	// }
	$g_middle = false;
	if(pix_get_option('opt-primary-gradient-switch')){
		$g_middle = true;
	}
	$gradient_1 = '#F27121';
	if(!empty(pix_get_option('opt-color-gradient-primary-1'))){
		$gradient_1 = pix_get_option('opt-color-gradient-primary-1');
	}
	$gradient_middle = '#E94057';
	if(!empty(pix_get_option('opt-color-gradient-primary-middle'))){
		$gradient_middle = pix_get_option('opt-color-gradient-primary-middle');
	}

	$gradient_2 = '#8A2387';
	if(!empty(pix_get_option('opt-color-gradient-primary-2'))){
		$gradient_2 = pix_get_option('opt-color-gradient-primary-2');
	}
	echo '<div class="d-flex"><svg width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="svg-gradient-primary">
          <stop offset="0%" stop-color="'.$gradient_1.'" />';
		  if($g_middle&&!empty($gradient_middle)){
			  echo '<stop offset="50%" stop-color="'.$gradient_middle.'" />';
		  }
          echo '<stop offset="100%" stop-color="'.$gradient_2.'" />
        </linearGradient>
      </defs>
    </svg></div>';
	if( get_option('pix_essentials_style_url') ){
		wp_enqueue_style( 'pix-essentials-style-2', get_option('pix_essentials_style_url'), array(), null, 'all'  );
	}else{
		require_once 'WP_SCSS_Compiler.php';
		$comp = WP_SCSS_Compiler::instance();
		$script_url = $comp->parse_stylesheet(get_template_directory_uri() . '/inc/scss/essentials.scss', 'pix-essentials-style-2' );
		update_option( 'pix_essentials_style_url', $script_url, 'yes' );
		wp_enqueue_style( 'pix-essentials-style-2', $script_url, array(), null, 'all' );
	}
}

function pix_get_style_url(){
	$script_url = false;
	if( get_option('pix_essentials_style_url') ){
		$script_url = get_option('pix_essentials_style_url');
	}else{
		$comp = WP_SCSS_Compiler::instance();
		$script_url = $comp->parse_stylesheet(get_template_directory_uri() . '/inc/scss/essentials.scss', 'pix-essentials-style-2' );
	}
	return $script_url;
}

function pix_update_style_url(){
	require_once 'WP_SCSS_Compiler.php';
	$comp = WP_SCSS_Compiler::instance();
	$script_url = $comp->parse_stylesheet(get_template_directory_uri() . '/inc/scss/essentials.scss', 'pix-essentials-style-2' );
	update_option( 'pix_essentials_style_url', $script_url, 'yes' );
}



add_filter( 'wp_scss_variables', 'pix_scss_vars', 10, 2 );
function pix_scss_vars( $vars, $handle ) {

	if ( ! is_array( $vars ) ) {
		$vars = array();
	}

	// colors
	if(!empty(pix_get_option('opt-primary-color'))){
		$vars['primary'] = pix_get_option('opt-primary-color');
	}
	if(!empty(pix_get_option('opt-secondary-color'))){
		$vars['secondary'] = pix_get_option('opt-secondary-color');
	}
	if(!empty(pix_get_option('opt-body-color'))){
		if(pix_get_option('opt-body-color')!='custom'){
			$vars['body-color'] = 'final-color("'.pix_get_option('opt-body-color').'")';
		}else{
			$vars['body-color'] = pix_get_option('opt-custom-body-color');
		}

	}
	if(!empty(pix_get_option('opt-dark-body-color'))){
		if(pix_get_option('opt-dark-body-color')!='custom'){
			$vars['dark-body-color'] = 'final-color("'.pix_get_option('opt-dark-body-color').'")';
		}else{
			$vars['dark-body-color'] = pix_get_option('opt-custom-dark-body-color');
		}

	}

	if(!empty(pix_get_option('opt-heading-color'))){
		if(pix_get_option('opt-heading-color')!='custom'){
			// $vars['paragraph-color'] = '$'.pix_get_option('opt-heading-color');
			$vars['heading-color'] = 'final-color("'.pix_get_option('opt-heading-color').'")';
		}else{
			if(!empty(pix_get_option('opt-custom-heading-color'))){
				$vars['heading-color'] = pix_get_option('opt-custom-heading-color');
			}else{
				$vars['heading-color'] = '#495057';
			}

		}

	}else{
		$vars['heading-color'] = 'gray-7';
	}
	if(!empty(pix_get_option('opt-dark-heading-color'))){
		if(pix_get_option('opt-dark-heading-color')!='custom'){
			$vars['dark-heading-color'] = 'final-color("'.pix_get_option('opt-dark-heading-color').'")';
		}else{
			if(!empty(pix_get_option('opt-custom-dark-heading-color'))){
				$vars['dark-heading-color'] = pix_get_option('opt-custom-dark-heading-color');
			}else{
				$vars['dark-heading-color'] = '#ffffff';
			}

		}
	}else{
		$vars['dark-heading-color'] = 'white';
	}


	if(!empty(pix_get_option('opt-link-color'))){
		$vars['link-color'] = pix_get_option('opt-link-color');
	}
	if(!empty(pix_get_option('opt-font-size-base'))){
		$vars['font-size-base'] = pix_get_option('opt-font-size-base');
	}else{
		$vars['font-size-base'] = '1rem';
	}

	if(!empty(pix_get_option('opt-primary-font-spacing'))){
		$vars['letter-spacing-base'] = pix_get_option('opt-primary-font-spacing');
	}else{
		$vars['letter-spacing-base'] = '-0.1px';
	}
	if(!empty(pix_get_option('opt-secondary-font-spacing'))){
		$vars['letter-spacing-secondary'] = pix_get_option('opt-secondary-font-spacing');
	}else{
		$vars['letter-spacing-secondary'] = '-0.1px';
	}
// pix_plugin_get_option
	$g_middle = false;
	if(pix_plugin_get_option('opt-primary-gradient-switch')){
		$vars['middle-gradient'] = 'yes';
		$g_middle = true;
	}else{
		$vars['middle-gradient'] = 'no';
	}
	$gradient_1 = '#F27121';
	if(!empty(pix_get_option('opt-color-gradient-primary-1'))){
		$vars['gradient-primary-1'] = pix_get_option('opt-color-gradient-primary-1');
		$gradient_1 = $vars['gradient-primary-1'];
	}
	$gradient_middle = '#E94057';
	if(!empty(pix_get_option('opt-color-gradient-primary-middle'))){
		$vars['gradient-primary-middle'] = pix_get_option('opt-color-gradient-primary-middle');
		$gradient_middle = $vars['gradient-primary-middle'];
	}

	$gradient_2 = '#8A2387';
	if(!empty(pix_get_option('opt-color-gradient-primary-2'))){
		$vars['gradient-primary-2'] = pix_get_option('opt-color-gradient-primary-2');
		$gradient_2 = $vars['gradient-primary-2'];
	}
	if(!empty(pix_get_option('opt-primary-gradient-dir'))){
		$vars['gradient-direction'] = pix_get_option('opt-primary-gradient-dir');
	}


	if(!empty(pix_get_option('opt-primary-font'))){
		$vars['font-family-base'] = pix_get_option('opt-primary-font')['font-family'];
	}
	if(!empty(pix_get_option('opt-secondary-font'))){
		$vars['font-family-secondary'] = pix_get_option('opt-secondary-font')['font-family'];
	}
	if(!empty(pix_get_option('opt-regular-font-weight'))){
		$vars['font-weight-normal'] = pix_get_option('opt-regular-font-weight');
	}
	if(!empty(pix_get_option('opt-bold-font-weight'))){
		$vars['font-weight-bold'] = pix_get_option('opt-bold-font-weight');
	}
	if ( class_exists( 'WooCommerce' ) ) {
		$vars['enable_woocommerce'] = 'true';
	}

	return $vars;
}



function wpb_add_google_fonts() {

	$reg = '400';
	$bold = '700';
	if(!empty(pix_get_option('opt-regular-font-weight'))){
		$reg = pix_get_option('opt-regular-font-weight');
	}
	if(!empty(pix_get_option('opt-bold-font-weight'))){
		$bold = pix_get_option('opt-bold-font-weight');
	}

	if(!empty(pix_get_option('opt-primary-font'))){

		if( pix_get_option('opt-primary-font')['google'] && strcmp(pix_get_option('opt-primary-font')['google'],'false') != 0  ){
			if( pix_get_option('opt-primary-font')['font-family']!=pix_get_option('opt-external-font-1-name')
				&& pix_get_option('opt-primary-font')['font-family']!=pix_get_option('opt-external-font-2-name')
			){
				$url = esc_url( 'https://fonts.googleapis.com/css?family='.pix_get_option('opt-primary-font')['font-family'].':'.$reg.','.$bold.'&display=swap' );
				wp_enqueue_style( 'wpb-google-font-primary', $url, false );
			}
		}
	}
	if(!empty(pix_get_option('opt-secondary-font'))){
		if( pix_get_option('opt-secondary-font')['google']
			&& strcmp(pix_get_option('opt-secondary-font')['google'],'false') != 0
			&& pix_get_option('opt-secondary-font')['google'] != false
		){
			if( pix_get_option('opt-secondary-font')['font-family']!=pix_get_option('opt-external-font-1-name')
				&& pix_get_option('opt-secondary-font')['font-family']!=pix_get_option('opt-external-font-2-name')
			){
				wp_enqueue_style( 'wpb-google-font-secondary', 'https://fonts.googleapis.com/css?family='.pix_get_option('opt-secondary-font')['font-family'].':'.$reg.','.$bold.'&display=swap', false );
			}
		}
	}
}

// add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
add_action( 'wp_footer', 'wpb_add_google_fonts' );

function pix_add_custom_fonts() {
	if(!empty(pix_get_option('opt-primary-font'))){
		if(!empty(pix_get_option('opt-external-font-1-url'))){
			wp_enqueue_style( 'pix-external-font-1', pix_get_option('opt-external-font-1-url'), false );
		}
	}

	if(!empty(pix_get_option('opt-secondary-font'))){
		if(!empty(pix_get_option('opt-external-font-2-url'))){
			wp_enqueue_style( 'pix-external-font-2', pix_get_option('opt-external-font-2-url'), false );
		}
	}
}
add_action( 'wp_footer', 'pix_add_custom_fonts' );
?>
