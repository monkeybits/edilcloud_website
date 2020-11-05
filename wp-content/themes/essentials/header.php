<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package essentials
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<?php
$body_style = '';
$pix_overlay = 'pix-overlay-2';
if(pix_get_option('search-style')){
	$pix_overlay = 'pix-overlay-'.pix_get_option('search-style');
}


if(pix_get_option('pix-body-bg-color')){
	if(pix_get_option('pix-body-bg-color')=='custom'){
		$body_style .= 'background: '.pix_get_option('custom-body-bg-color').';';
	}
}


$exit_data = '';
$exit_link = '';
$link = '';
if(pix_get_option('pix-exit-popup')){
	if( pix_show_exit_popup() ) {
		$nonce = wp_create_nonce("popup_nonce");
		$exit_link = admin_url('admin-ajax.php?action=pix_popup_content&id='.pix_get_option('pix-exit-popup').'&nonce='.$nonce.'&exitpopup=true');
	}
}

$auto_popup_data = '';

if(pix_get_option('pix-automatic-popup')){
	if( pix_show_automatic_popup() ){
		$nonce = wp_create_nonce("popup_nonce");
		$link = admin_url('admin-ajax.php?action=pix_popup_content&id='.pix_get_option('pix-automatic-popup').'&nonce='.$nonce.'&autopopup=true');
		$exit_data = pix_get_option('pix-automatic-popup-time');
	}
}
$check_nonce = wp_create_nonce("popup_nonce");
$popup_check_link = admin_url('admin-ajax.php?action=pix_check_popup_status&nonce='.$check_nonce);

$pageTransitionLoading = true;

if(!empty(pix_get_option('site-disable-loading-icon'))){
	if (pix_get_option('site-disable-loading-icon')) {
		$pageTransitionLoading = false;
	}
}
?>
<body
<?php body_class(); ?>
 data-pix-overlay="<?php echo esc_attr( $pix_overlay ); ?>"
 style="<?php echo esc_attr( $body_style ); ?>"
 data-auto-popup="<?php echo esc_url( $link ); ?>"
 data-exit-popup="<?php echo esc_url( $exit_link ); ?>"
 data-auto-popup-time="<?php echo esc_attr( $exit_data ); ?>"
 data-popup-check="<?php echo esc_attr( $popup_check_link ); ?>"
>
<?php wp_body_open(); ?>
<div class="pix-page-loading-bg"></div>
<?php
if($pageTransitionLoading){
?>
<div class="pix-loading-circ-path"></div>
<?php
}

if(pix_get_option('show-banner')){
	if(pix_show_banner()){
		get_template_part( 'template-parts/banner' );
	}
}
$siteClass = 'bg-white';
if(!function_exists('essentials_core_plugin')){
	$siteClass = 'bg-gray-1';
}
?>
<div id="page" class="site <?php echo esc_attr($siteClass); ?> shadow-lg">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'essentials' ); ?></a>
	<?php
	if(pix_get_option('pix-header')){
		get_template_part( 'template-parts/headers/main' );
	}else{
		if(!function_exists('essentials_core_plugin')){
			get_template_part( 'template-parts/headers/main' );
		}
	}
