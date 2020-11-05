<?php




function pix_templates_reviews(){
    $templates = array();

    // Software

    $data = array(); // Create new array
    $data['name'] = __( 'Reviews carousel circular', 'essentials-core' ); // Assign name for your custom template
    $data['weight'] = 0; // Weight of your template in the template list
    $data['type'] = 'default_templates'; // Weight of your template in the template list
    $data['category'] = 'default_templates'; // Weight of your template in the template list
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/reviews/software-reviews-right.png', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px
    $data['custom_class'] = 'custom_template_for_vc_custom_template all reviews'; // CSS class name
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" css=".vc_custom_1589908208998{background-color: #ffffff !important;}"][vc_row full_width="stretch_row" content_placement="middle" pix_visibility="1" css=".vc_custom_1589908218775{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/2" css=".vc_custom_1589829246651{padding-top: 2px !important;padding-bottom: 40px !important;}"][pix_badge bold="font-weight-bold" secondary_font="secondary-font" text_color="white" bg_color="secondary" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" text="Word to Trust" css=".vc_custom_1561773151041{margin-bottom: 15px !important;padding-top: 9px !important;padding-right: 15px !important;padding-bottom: 8px !important;padding-left: 15px !important;}" delay="300"][heading title_color="heading-default" title_size="h2" position="text-left" animation="fade-in-up" title="Create beautiful reviews with ♾️ possibilities."][pix_text size="text-20" content_color="body-default" animation="fade-in-up" delay="200" css=".vc_custom_1589846618240{padding-top: 10px !important;padding-bottom: 10px !important;}" max_width="500px"]Be ready to use the next generation of WordPress themes. Be ready to met Essentials by pixfort.[/pix_text][pix_button btn_text="Purchase a License" btn_target="true" btn_color="white" btn_text_color="heading-default" btn_size="normal" btn_rounded="btn-rounded" btn_effect="2" btn_hover_effect="2" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-up" btn_link="https://pixfort.website/redirect?to=essentials" btn_icon="pixicon-bag-2" btn_anim_delay="800"][/vc_column][vc_column width="1/2"][pix_reviews_slider slides="%5B%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Tommy%20haffman%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/software/wp-content/uploads/sites/2/2020/05/google-logo.png%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Marc%20Antoine%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/software/wp-content/uploads/sites/2/2020/05/twitter-logo.png%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Carla%20Megan%22%2C%22title%22%3A%22via%20pixfort.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/software/wp-content/uploads/sites/2/2020/05/pixfort-logo.png%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Sara%20Smith%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/software/wp-content/uploads/sites/2/2020/05/google-logo.png%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Lili%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/software/wp-content/uploads/sites/2/2020/05/twitter-logo.png%22%2C%22rating%22%3A%225%22%7D%5D" name_color="heading-default" title_color="body-default" content_color="body-default" content_size="text-18" style="3" hover_effect="3" add_hover_effect="1" bg_color="white" rounded_box="rounded-10" slider_num="1" slider_style="pix-opacity-slider" slider_effect="pix-circular-left" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="pix-slider-scale" cellpadding="pix-p-20" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="true" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" autolay=""][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);


    $data = array(); // Create new array
    $data['name'] = __( 'Reviews carousel circular', 'essentials-core' ); // Assign name for your custom template
    $data['weight'] = 0; // Weight of your template in the template list
    $data['type'] = 'default_templates'; // Weight of your template in the template list
    $data['category'] = 'default_templates'; // Weight of your template in the template list
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/reviews/software-reviews-left.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all reviews'; // CSS class name
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" css=".vc_custom_1589908208998{background-color: #ffffff !important;}"][vc_row full_width="stretch_row" content_placement="middle" pix_visibility="1" css=".vc_custom_1589908218775{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/2"][pix_reviews_slider slides="%5B%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Tommy%20haffman%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/software/wp-content/uploads/sites/2/2020/05/google-logo.png%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Marc%20Antoine%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/software/wp-content/uploads/sites/2/2020/05/twitter-logo.png%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Carla%20Megan%22%2C%22title%22%3A%22via%20pixfort.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/software/wp-content/uploads/sites/2/2020/05/pixfort-logo.png%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Sara%20Smith%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/software/wp-content/uploads/sites/2/2020/05/google-logo.png%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Lili%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/software/wp-content/uploads/sites/2/2020/05/twitter-logo.png%22%2C%22rating%22%3A%225%22%7D%5D" name_color="heading-default" title_color="body-default" content_color="body-default" content_size="text-18" style="3" hover_effect="3" add_hover_effect="1" bg_color="white" rounded_box="rounded-10" slider_num="1" slider_style="pix-opacity-slider" slider_effect="pix-circular-right" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="pix-slider-scale" cellpadding="pix-p-20" autoplay="" adaptiveheight="true" righttoleft="true" slider_wrap="true" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" autolay=""][/vc_column][vc_column width="1/2" css=".vc_custom_1589829246651{padding-top: 2px !important;padding-bottom: 40px !important;}"][pix_badge bold="font-weight-bold" secondary_font="secondary-font" text_color="white" bg_color="secondary" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" text="Word to Trust" css=".vc_custom_1561773151041{margin-bottom: 15px !important;padding-top: 9px !important;padding-right: 15px !important;padding-bottom: 8px !important;padding-left: 15px !important;}" delay="300"][heading title_color="heading-default" title_size="h2" position="text-left" animation="fade-in-up" title="Create beautiful reviews with ♾️ possibilities."][pix_text size="text-20" content_color="body-default" animation="fade-in-up" delay="200" css=".vc_custom_1589846618240{padding-top: 10px !important;padding-bottom: 10px !important;}" max_width="500px"]Be ready to use the next generation of WordPress themes. Be ready to met Essentials by pixfort.[/pix_text][pix_button btn_text="Purchase a License" btn_target="true" btn_color="white" btn_text_color="heading-default" btn_size="normal" btn_rounded="btn-rounded" btn_effect="2" btn_hover_effect="2" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-up" btn_link="https://pixfort.website/redirect?to=essentials" btn_icon="pixicon-bag-2" btn_anim_delay="800"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // saas

    $data = array(); // Create new array
    $data['name'] = __( 'Reviews carousel standard', 'essentials-core' ); // Assign name for your custom template
    $data['weight'] = 0; // Weight of your template in the template list
    $data['type'] = 'default_templates'; // Weight of your template in the template list
    $data['category'] = 'default_templates'; // Weight of your template in the template list
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/reviews/saas-reviews-carousel.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all reviews'; // CSS class name
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" b_flip_h="true" css=".vc_custom_1590019418485{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;border-radius: 10px !important;}" b_custom_height="400px"][vc_row full_width="stretch_row" css=".vc_custom_1590020387821{padding-bottom: 20px !important;}"][vc_column][pix_badge bold="font-weight-bold" secondary_font="" text_color="white" bg_color="gray-4" style="" hover_effect="" add_hover_effect="" animation="fade-in-left" element_div="text-center" padding="" text="UNLIMITED POSSIBILITIES" css=".vc_custom_1590019330454{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 7px !important;padding-right: 12px !important;padding-bottom: 7px !important;padding-left: 12px !important;border-left-color: #e9ecef !important;border-right-color: #e9ecef !important;border-top-color: #e9ecef !important;border-bottom-color: #e9ecef !important;}" delay="600"][sliding-text bold="font-weight-bold" secondary_font="secondary-font" position="center" size="h3" text_color="gradient-primary" max_width="500px" css=".vc_custom_1590079478444{padding-top: 20px !important;}"]Create beautiful reviews with unlimited possibilities.[/sliding-text][pix_text size="text-18" content_color="body-default" position="text-center" animation="fade-in-up" max_width="500px" delay="1000"]Be ready to use the next generation of WordPress themes. Be ready to met Essentials by pixfort.[/pix_text][/vc_column][/vc_row][vc_row full_width="stretch_row" content_placement="middle" pix_visibility="1" css=".vc_custom_1590019430879{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column][pix_reviews_slider slides="%5B%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Tommy%20haffman%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https%3A%2F%2Fessentials.pixfort.com%2Fsoftware%2Fwp-content%2Fuploads%2Fsites%2F2%2F2020%2F05%2Fgoogle-logo.png%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Marc%20Antoine%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https%3A%2F%2Fessentials.pixfort.com%2Fsoftware%2Fwp-content%2Fuploads%2Fsites%2F2%2F2020%2F05%2Ftwitter-logo.png%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Carla%20Megan%22%2C%22title%22%3A%22via%20pixfort.com%22%2C%22image%22%3A%22https%3A%2F%2Fessentials.pixfort.com%2Fsoftware%2Fwp-content%2Fuploads%2Fsites%2F2%2F2020%2F05%2Fpixfort-logo.png%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Sara%20Smith%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https%3A%2F%2Fessentials.pixfort.com%2Fsoftware%2Fwp-content%2Fuploads%2Fsites%2F2%2F2020%2F05%2Fgoogle-logo.png%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Lili%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https%3A%2F%2Fessentials.pixfort.com%2Fsoftware%2Fwp-content%2Fuploads%2Fsites%2F2%2F2020%2F05%2Ftwitter-logo.png%22%2C%22rating%22%3A%225%22%7D%5D" name_color="heading-default" title_color="body-default" content_color="body-default" content_size="text-18" style="3" hover_effect="3" add_hover_effect="1" bg_color="white" rounded_box="rounded-10" slider_num="2" slider_style="pix-opacity-slider" slider_effect="pix-effect-standard" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="pix-slider-scale" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="true" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" autolay=""][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // services

    $data = array();
    $data['name'] = __( 'Reviews carousel Services', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/reviews/services-reviews-carousel.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all reviews';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" b_flip_h="true" css=".vc_custom_1590623961974{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;border-radius: 10px !important;}" b_custom_height="400px"][vc_row full_width="stretch_row" css=".vc_custom_1590020387821{padding-bottom: 20px !important;}"][vc_column][sliding-text bold="font-weight-bold" secondary_font="secondary-font" position="center" size="h3" text_color="heading-default" max_width="500px" css=".vc_custom_1590623954692{padding-top: 20px !important;}"]Create beautiful reviews with unlimited possibilities.[/sliding-text][pix_text size="text-18" content_color="body-default" position="text-center" animation="fade-in-up" max_width="500px" delay="1000"]Be ready to use the next generation of WordPress themes. Be ready to met Essentials by pixfort.[/pix_text][/vc_column][/vc_row][vc_row full_width="stretch_row" content_placement="middle" pix_visibility="1" css=".vc_custom_1590019430879{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column][pix_reviews_slider slides="%5B%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20easier!%22%2C%22name%22%3A%22Tommy%20haffman%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https%3A%2F%2Fessentials.pixfort.com%2Fsoftware%2Fwp-content%2Fuploads%2Fsites%2F2%2F2020%2F05%2Fgoogle-logo.png%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20easier!%22%2C%22name%22%3A%22Marc%20Antoine%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https%3A%2F%2Fessentials.pixfort.com%2Fsoftware%2Fwp-content%2Fuploads%2Fsites%2F2%2F2020%2F05%2Ftwitter-logo.png%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20easier!%22%2C%22name%22%3A%22Carla%20Megan%22%2C%22title%22%3A%22via%20pixfort.com%22%2C%22image%22%3A%22https%3A%2F%2Fessentials.pixfort.com%2Fsoftware%2Fwp-content%2Fuploads%2Fsites%2F2%2F2020%2F05%2Fpixfort-logo.png%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20easier!%22%2C%22name%22%3A%22Sara%20Smith%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https%3A%2F%2Fessentials.pixfort.com%2Fsoftware%2Fwp-content%2Fuploads%2Fsites%2F2%2F2020%2F05%2Fgoogle-logo.png%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20easier!%22%2C%22name%22%3A%22Lili%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https%3A%2F%2Fessentials.pixfort.com%2Fsoftware%2Fwp-content%2Fuploads%2Fsites%2F2%2F2020%2F05%2Ftwitter-logo.png%22%2C%22rating%22%3A%225%22%7D%5D" name_color="heading-default" title_color="body-default" content_color="body-default" content_size="" style="3" hover_effect="3" add_hover_effect="1" bg_color="white" rounded_box="rounded-10" slider_num="3" slider_style="pix-style-standard" slider_effect="pix-circular-slider" prevnextbuttons="1" pagedots="1" freescroll="" slider_scale="" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="true" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" autolay=""][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // landing

    $data = array();
    $data['name'] = __( 'Reviews carousel Landing', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/reviews/landing-reviews.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all reviews';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" top_divider_select="8" t_has_animation="true" t_2_is_gradient="true" t_2_color="#e6dbff" t_2_animation="fade-in-up" t_3_is_gradient="true" t_3_color="#ffffff" t_3_color_2="#f6f2ff" t_3_animation="fade-in-up" css=".vc_custom_1592528807431{padding-top: 120px !important;padding-bottom: 120px !important;}" t_2_delay="150" t_3_delay="300"][vc_row css=".vc_custom_1592438688706{padding-bottom: 20px !important;}"][vc_column][sliding-text bold="font-weight-bold" secondary_font="secondary-font" position="center" size="h2" text_color="heading-default" css=".vc_custom_1592438877947{padding-top: 40px !important;}" max_width="600px"]4.8/5 Average rate[/sliding-text][pix_text size="text-20" content_color="body-default" position="text-center" animation="fade-in-up" delay="500" max_width="600px"]Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.[/pix_text][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column offset="vc_col-md-offset-3 vc_col-md-6"][pix_reviews_slider slides="%5B%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Tommy%20haffman%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/landing/wp-content/uploads/sites/16/2020/06/google-logo.png%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Marc%20Antoine%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/landing/wp-content/uploads/sites/16/2020/06/twitter-logo.png%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Carla%20Megan%22%2C%22title%22%3A%22via%20pixfort.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/landing/wp-content/uploads/sites/16/2020/06/pixfort-logo.png%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Sara%20Smith%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/landing/wp-content/uploads/sites/16/2020/06/google-logo.png%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Lili%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/landing/wp-content/uploads/sites/16/2020/06/twitter-logo.png%22%2C%22rating%22%3A%225%22%7D%5D" name_color="heading-default" title_color="body-default" content_color="body-default" content_size="text-18" style="3" hover_effect="3" add_hover_effect="1" bg_color="white" rounded_box="rounded-10" slider_num="1" slider_style="pix-one-active" slider_effect="pix-effect-standard" prevnextbuttons="1" pagedots="1" freescroll="" slider_scale="pix-slider-scale" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="true" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" autolay=""][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // original

    $data = array();
    $data['name'] = __( 'Reviews carousel Features page', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/reviews/original-features-page-reviews.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all reviews';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" bottom_divider_select="19" css=".vc_custom_1593050617036{padding-top: 80px !important;padding-bottom: 80px !important;border-radius: 10px !important;}"][vc_row full_width="stretch_row" css=".vc_custom_1587686878373{padding-top: 60px !important;padding-bottom: 60px !important;}"][vc_column][pix_badge bold="font-weight-bold" secondary_font="secondary-font" text_color="heading-default" bg_color="gray-2" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" element_div="text-center" padding="" text="Rated 4.9 of 5" css=".vc_custom_1588951539597{padding-top: 5px !important;padding-right: 9px !important;padding-bottom: 5px !important;padding-left: 9px !important;}"][sliding-text bold="font-weight-bold" secondary_font="secondary-font" position="center" size="h2" text_color="gradient-primary" css=".vc_custom_1588953159638{padding-top: 10px !important;padding-bottom: 40px !important;}" max_width="600px"]See what our customers say about Essentials[/sliding-text][pix_reviews_slider slides="%5B%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Carla%20Megan%22%2C%22title%22%3A%22via%20pixfort.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/04/thumbnail-person-3.jpg%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Sara%20Smith%22%2C%22title%22%3A%22via%20pixfort.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/04/thumbnail-person-4.jpg%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Marc%20Antoine%22%2C%22title%22%3A%22via%20pixfort.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/04/thumbnail-person-1.jpg%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Lili%22%2C%22title%22%3A%22via%20pixfort.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2019/12/team-4.jpg%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20a%20lot%20easier!%22%2C%22name%22%3A%22Tommy%20haffman%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/04/thumbnail-person-5.jpg%22%2C%22rating%22%3A%224%22%7D%5D" name_color="gradient-primary" title_color="body-default" content_color="body-default" content_size="text-18" style="3" hover_effect="3" add_hover_effect="1" bg_color="white" rounded_box="rounded-10" slider_num="3" slider_style="pix-style-standard" slider_effect="pix-effect-standard" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="pix-slider-scale" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="true" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" autolay=""][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // finance

    $data = array();
    $data['name'] = __( 'Reviews Finance', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/reviews/finance-reviews.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all reviews';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" b_flip_h="true" css=".vc_custom_1600638325703{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;border-radius: 10px !important;}" b_custom_height="400px"][vc_row pix_particles_check="" css=".vc_custom_1600635886901{padding-bottom: 20px !important;}"][vc_column][pix_icon media_type="duo_icon" pix_duo_icon="clipboard-check" icon_color="gradient-primary" content_align="center" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" css=".vc_custom_1600734935262{padding-bottom: 30px !important;}"][heading title_color="heading-default" title_size="h3" animation="fade-in-up" title="Join The Next Revolution. Create your Website Now!" delay="200" css=".vc_custom_1600634338832{padding-bottom: 20px !important;}" max_width="550px"][pix_text size="text-18" content_color="body-default" position="text-center" animation="fade-in-up" max_width="550px" delay="300"]Advanced cameras combined with a large display, fast performance, and highly calibrated sensors have always made uniquely capable.[/pix_text][/vc_column][/vc_row][vc_row full_width="stretch_row_content" content_placement="middle" pix_particles_check="" pix_visibility="1" css=".vc_custom_1600636409677{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column][pix_reviews_slider slides="%5B%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20easier!%22%2C%22name%22%3A%22Tommy%20haffman%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/finance/wp-content/uploads/sites/38/2020/09/thumbnail-person-5.jpg%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20easier!%22%2C%22name%22%3A%22Carla%20Megan%22%2C%22title%22%3A%22via%20pixfort.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/finance/wp-content/uploads/sites/38/2020/09/thumbnail-person-2.jpg%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20easier!%22%2C%22name%22%3A%22Marc%20Antoine%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/finance/wp-content/uploads/sites/38/2020/09/thumbnail-person-1.jpg%22%2C%22rating%22%3A%225%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20easier!%22%2C%22name%22%3A%22Sara%20Smith%22%2C%22title%22%3A%22via%20google.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/finance/wp-content/uploads/sites/38/2020/09/thumbnail-person-3.jpg%22%2C%22rating%22%3A%224%22%7D%2C%7B%22content%22%3A%22I%20am%20a%20web%20designer%2C%20you%20guys%20are%20very%20inspiring.%20I%20wish%20to%20see%20more%20work%20from%20you%2C%20maybe%20more%20freebies.%20Using%20pixfort%20products%20made%20my%20life%20easier!%22%2C%22name%22%3A%22Lili%22%2C%22title%22%3A%22via%20twitter.com%22%2C%22image%22%3A%22https://essentials.pixfort.com/finance/wp-content/uploads/sites/38/2020/09/thumbnail-person-4.jpg%22%2C%22rating%22%3A%225%22%7D%5D" name_color="heading-default" title_color="body-default" content_color="body-default" content_size="" style="3" hover_effect="3" add_hover_effect="1" bg_color="white" rounded_box="rounded-10" slider_num="4" slider_style="pix-style-standard" slider_effect="pix-circular-slider" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="true" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" autolay=""][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    return $templates;
}




 ?>
