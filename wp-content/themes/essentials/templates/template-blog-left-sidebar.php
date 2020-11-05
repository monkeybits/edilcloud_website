<?php /* Template Name: Blog Left sidebar */

    get_header();
    $classes = '';
    $styles = '';

    if(!empty(pix_get_option('blog-bg-color'))){
        if(pix_get_option('blog-bg-color')=='custom'){
            $styles = 'style="background:'.pix_get_option('custom-blog-bg-color').';"';
        }else{
            $classes = 'bg-'.pix_get_option('blog-bg-color'). ' ';
        }
    }
    get_template_part( 'template-parts/intro' );
    if(!get_post_meta( get_the_ID(), 'pix-hide-top-padding', true )){
        $classes .= 'pt-5';
    }
?>
<div id="content" class="site-content template-blog-left-sidebar <?php echo esc_html( $classes ); ?> bg-white2 pb-52" <?php echo esc_html( $styles ); ?> >
    <div class="container">
        <div class="row">
            <?php get_sidebar("test"); ?>
            <div class="col-12 col-md-8 pix-mb-20">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php
                        essentials_get_blog_page();
                        ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
