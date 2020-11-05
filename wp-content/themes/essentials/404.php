<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package essentials
 */

get_header();


$classes = '';
$styles = '';
if(!empty(pix_get_option('pages-bg-color'))){
	if(!empty(pix_get_option('blog-bg-color'))){
 	  if(pix_get_option('blog-bg-color')=='custom'){
 		  $styles = 'background:'.pix_get_option('custom-blog-bg-color').';';
 	  }else{
 		  $classes = 'bg-'.pix_get_option('blog-bg-color'). ' ';
 	  }
    }
}
if(pix_get_option('pix-header')){
    $single_header = pix_get_option('pix-header');
	if(!empty($single_header)){
		$post = get_post( $single_header );
		if(!empty(get_post_field('pix-header-style', $post))){
	        $header_style = get_post_field('pix-header-style', $post);
			if(!empty($header_style)){
				if($header_style=='boxed' || $header_style=='transparent'){
					get_template_part( 'template-parts/intro' );
				}
			}
	    }
	}
}

?>

<div id="content" class="site-content <?php echo esc_attr( $classes ); ?> error-404 not-found text-center pix-py-100" style="<?php echo esc_attr( $styles ); ?>" >
	<div class="container">
		<div class="row">
				<header class="page-header w-100">
					<div class="w-100">
					<img src="<?php echo get_template_directory_uri(). '/inc/images/404.svg'; ?>" />
					<h4 class="page-title2 pix-mt-10 pix-sliding-headline font-weight-bold"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'essentials' ); ?></h4>
					</div>
				</header><!-- .page-header -->

				<div class="page-content text-center w-100 pix-pt-20">
					<?php
						if(function_exists('sc_pix_search')){
							?>
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'essentials' ); ?></p>
							<?php
							echo sc_pix_search(array(
								'max_width'		=> '600px'
							));
						}
					?>
				</div>
		</div>
	</div>
</div>
<?php
get_footer();
