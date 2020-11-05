<?php




function pix_templates_numbers(){
    $templates = array();

    // creative

    $data = array();
    $data['name'] = __( 'Numbers Creative', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/numbers/creative-numbers.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all numbers content';
    $data['content']  = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1592516746321{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;}"][vc_column content_align="text-center" offset="vc_col-md-offset-2 vc_col-md-8"][pix_icon media_type="duo_icon" pix_duo_icon="flower-2" icon_color="gradient-primary" content_align="inline" style="" hover_effect="" add_hover_effect="6" css=".vc_custom_1590890332252{padding-right: 20px !important;}"][pix_icon media_type="duo_icon" pix_duo_icon="chair-1" icon_color="gradient-primary" content_align="inline" style="" hover_effect="" add_hover_effect="6" css=".vc_custom_1590890340735{padding-right: 20px !important;}"][pix_icon media_type="duo_icon" pix_duo_icon="earth" icon_color="gradient-primary" content_align="inline" style="" hover_effect="" add_hover_effect="6"][heading title_color="heading-default" title_size="h2" title="Make beautiful and great looking pages with Essentials" css=".vc_custom_1592351900926{padding-top: 40px !important;}"][pix_text size="text-20" content_color="body-default" animation="fade-in-up" delay="200" css=".vc_custom_1588796015442{padding-top: 10px !important;}"]We design and develop world-class websites and applications, design better and spend less time without restricting creative freedom.[/pix_text][vc_row_inner css=".vc_custom_1589321720499{padding-top: 20px !important;padding-bottom: 40px !important;}"][vc_column_inner width="1/3"][pix_numbers numbers_style="numbers-stack" duration="1500" title_color="gradient-primary" title_size="h1" content_color="heading-default" content_position="text-center" text_before="+" number="100"]Team members[/pix_numbers][/vc_column_inner][vc_column_inner width="1/3"][pix_numbers numbers_style="numbers-stack" duration="1500" title_color="gradient-primary" title_size="h1" content_color="heading-default" content_position="text-center" text_before="+" number="28"]Nationalities[/pix_numbers][/vc_column_inner][vc_column_inner width="1/3"][pix_numbers numbers_style="numbers-stack" duration="1500" title_color="gradient-primary" title_size="h1" content_color="heading-default" content_position="text-center" text_before="+" number="13"]Spoken languages[/pix_numbers][/vc_column_inner][/vc_row_inner][pix_badge bold="font-weight-bold" secondary_font="secondary-font" rounded="badge-pill" text_color="heading-default" bg_color="transparent" style="" hover_effect="" add_hover_effect="" element_div="text-center" padding="" text="Made with Love in France" css=".vc_custom_1589320865201{margin-top: 20px !important;margin-bottom: 20px !important;border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 18px !important;padding-right: 30px !important;padding-bottom: 18px !important;padding-left: 30px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][/vc_column][/vc_row]
CONTENT;

    array_push($templates, $data);

    // landing

    $data = array();
    $data['name'] = __( 'Numbers Landing', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/numbers/landing-numbers.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all numbers content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1592436511696{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #f8f5ff !important;}"][vc_row][vc_column][sliding-text bold="font-weight-bold" secondary_font="secondary-font" position="center" size="h2" text_color="heading-default" css=".vc_custom_1592435648311{padding-top: 40px !important;}" max_width="600px"]Next-generation applications[/sliding-text][pix_text size="text-20" content_color="body-default" position="text-center" animation="fade-in-up" delay="500" css=".vc_custom_1592436405007{padding-bottom: 10px !important;}" max_width="600px"]Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.[/pix_text][/vc_column][/vc_row][vc_row][vc_column width="1/3" content_align="text-center"][pix_icon media_type="icon" icon_size="48" content_align="center" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" icon="pixicon-basket-up" css=".vc_custom_1592434859612{padding-top: 20px !important;}"][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_position="text-center" text_before="+" number="200" text_after="%" css=".vc_custom_1592434874530{padding-top: 10px !important;padding-bottom: 20px !important;}"]Conversion rate increased[/pix_numbers][/vc_column][vc_column width="1/3"][pix_icon media_type="icon" icon_size="48" content_align="center" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" icon="pixicon-users-2" css=".vc_custom_1592434920580{padding-top: 20px !important;}"][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_position="text-center" text_before="+" number="16" text_after="K" css=".vc_custom_1592434939256{padding-top: 10px !important;padding-bottom: 20px !important;}"]Happy pixfort customers[/pix_numbers][/vc_column][vc_column width="1/3"][pix_icon media_type="icon" icon_size="48" content_align="center" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" icon="pixicon-money2" css=".vc_custom_1592434956344{padding-top: 20px !important;}"][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_position="text-center" text_before="+" number="40" text_after="M" css=".vc_custom_1592434996518{padding-top: 10px !important;padding-bottom: 20px !important;}"]Amount of investments in 2020[/pix_numbers][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    $data = array();
    $data['name'] = __( 'Numbers x2 Landing', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/numbers/landing-numbers-x2.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all numbers content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1592436511696{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #f8f5ff !important;}"][vc_row][vc_column][sliding-text bold="font-weight-bold" secondary_font="secondary-font" position="center" size="h2" text_color="heading-default" css=".vc_custom_1592435648311{padding-top: 40px !important;}" max_width="600px"]Next-generation applications[/sliding-text][pix_text size="text-20" content_color="body-default" position="text-center" animation="fade-in-up" delay="500" css=".vc_custom_1592436405007{padding-bottom: 10px !important;}" max_width="600px"]Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.[/pix_text][/vc_column][/vc_row][vc_row][vc_column content_align="text-center" offset="vc_col-md-offset-2 vc_col-md-8"][vc_row_inner][vc_column_inner width="1/2"][pix_icon media_type="icon" icon_size="48" content_align="center" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" icon="pixicon-basket-up" css=".vc_custom_1592434859612{padding-top: 20px !important;}"][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_position="text-center" text_before="+" number="200" text_after="%" css=".vc_custom_1592434874530{padding-top: 10px !important;padding-bottom: 20px !important;}"]Conversion rate increased[/pix_numbers][/vc_column_inner][vc_column_inner width="1/2"][pix_icon media_type="icon" icon_size="48" content_align="center" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" icon="pixicon-users-2" css=".vc_custom_1592434920580{padding-top: 20px !important;}"][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_position="text-center" text_before="+" number="16" text_after="K" css=".vc_custom_1592434939256{padding-top: 10px !important;padding-bottom: 20px !important;}"]Happy pixfort customers[/pix_numbers][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // foundation

    $data = array();
    $data['name'] = __( 'Numbers Foundation', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/numbers/foundation-numbers.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all numbers content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" pix_visibility="1" bottom_divider_color="" css=".vc_custom_1591079669328{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}"][vc_row][vc_column][heading title_color="heading-default" title_size="h6" animation="fade-in-up" content_color="body-default" title="Let the numbers talk!" delay="200" css=".vc_custom_1591079728473{padding-top: 10px !important;padding-bottom: 10px !important;}"][pix_text content_color="body-default" position="text-center" animation="fade-in-up" delay="600" css=".vc_custom_1591079767563{padding-bottom: 10px !important;}"]We provide support for more than +15.000 people.[/pix_text][/vc_column][/vc_row][vc_row][vc_column width="1/4"][pix_numbers numbers_style="numbers-stack" title_color="primary" title_size="h1" title_display="display-3" content_color="heading-default" text_before="+" number="60" text_after="K"]Donations Every Year[/pix_numbers][/vc_column][vc_column width="1/4"][pix_numbers numbers_style="numbers-stack" title_color="primary" title_size="h1" title_display="display-3" content_color="heading-default" text_before="+" number="150"]Available volunteers[/pix_numbers][/vc_column][vc_column width="1/4"][pix_numbers numbers_style="numbers-stack" title_color="primary" title_size="h1" title_display="display-3" content_color="heading-default" text_before="+" number="46" text_after="M"]Donations in 2020[/pix_numbers][/vc_column][vc_column width="1/4"][pix_numbers numbers_style="numbers-stack" title_color="primary" title_size="h1" title_display="display-3" content_color="heading-default" text_before="+" number="265"]Staff members in Europe[/pix_numbers][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // influencer

    $data = array();
    $data['name'] = __( 'Numbers Influencer', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/numbers/influencer-numbers.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all numbers content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" pix_visibility="1" css=".vc_custom_1592838814309{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;}"][vc_row content_placement="middle" css=".vc_custom_1591575274475{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column width="1/4" content_align="text-center"][pix_icon media_type="icon" icon_color="dark-opacity-1" icon_size="64" content_align="center" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" icon="pixicon-instagram2"][pix_numbers duration="1000" title_color="gradient-primary" title_size="h2" content_color="heading-default" text_before="+" number="4" text_after="M"]Followers on Instagram[/pix_numbers][/vc_column][vc_column width="1/4"][pix_icon media_type="icon" icon_color="dark-opacity-1" icon_size="64" content_align="center" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" icon="pixicon-facebook3"][pix_numbers duration="1000" title_color="gradient-primary" title_size="h2" content_color="heading-default" text_before="+" number="2" text_after="M"]Followers on Facebook[/pix_numbers][/vc_column][vc_column width="1/4"][pix_icon media_type="icon" icon_color="dark-opacity-1" icon_size="64" content_align="center" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" icon="pixicon-snapchat"][pix_numbers duration="1000" title_color="gradient-primary" title_size="h2" content_color="heading-default" text_before="+" number="15" text_after="M"]Views on Snapchat[/pix_numbers][/vc_column][vc_column width="1/4"][pix_icon media_type="icon" icon_color="dark-opacity-1" icon_size="64" content_align="center" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" icon="pixicon-twitter"][pix_numbers duration="1000" title_color="gradient-primary" title_size="h2" content_color="heading-default" text_before="+" number="15" text_after="M"]Followers on Twitter[/pix_numbers][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // agency

    $data = array();
    $data['name'] = __( '4 Numbers Agency', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/numbers/agency-numbers-4.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all numbers content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1591763816790{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;}"][vc_row content_placement="middle"][vc_column content_align="text-center" css=".vc_custom_1590551193189{padding-right: 30px !important;padding-left: 30px !important;}"][sliding-text bold="font-weight-bold" secondary_font="secondary-font" position="center" size="h2" text_color="heading-default" css=".vc_custom_1591762130341{padding-top: 20px !important;}"]Our Agency in Numbers[/sliding-text][pix_text size="text-18" content_color="body-default" position="text-center" animation="fade-in-up" delay="900" css=".vc_custom_1591757124339{padding-bottom: 10px !important;}" max_width="500px"]This is just a simple text made for this unique and awesome template, you can replace it with any text.[/pix_text][/vc_column][/vc_row][vc_row][vc_column offset="vc_col-md-offset-2 vc_col-md-8"][vc_row_inner content_placement="middle"][vc_column_inner width="1/2"][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_size="h5" content_position="text-center" text_before="+" number="60" text_after="K" css=".vc_custom_1591762546344{padding-top: 60px !important;padding-bottom: 60px !important;}"]Happy customers[/pix_numbers][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="secondary" title_size="h1" title_display="display-3" content_color="heading-default" content_size="h5" content_position="text-center" number="99" text_after="%" css=".vc_custom_1591762432508{padding-top: 60px !important;padding-bottom: 60px !important;}"]Projects completed[/pix_numbers][/vc_column_inner][vc_column_inner width="1/2"][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="primary" title_size="h1" title_display="display-3" content_color="heading-default" content_size="h5" content_position="text-center" text_before="+" number="150" css=".vc_custom_1591762550009{padding-top: 60px !important;padding-bottom: 60px !important;}"]Team members[/pix_numbers][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_size="h5" content_position="text-center" text_before="+" number="23" text_after="K" css=".vc_custom_1591762553527{padding-top: 60px !important;padding-bottom: 60px !important;}"]Tickets resolved[/pix_numbers][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    $data = array();
    $data['name'] = __( '6 Numbers Agency', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/numbers/agency-numbers-6.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all numbers content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1591763816790{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;}"][vc_row content_placement="middle"][vc_column content_align="text-center" css=".vc_custom_1590551193189{padding-right: 30px !important;padding-left: 30px !important;}"][sliding-text bold="font-weight-bold" secondary_font="secondary-font" position="center" size="h2" text_color="heading-default" css=".vc_custom_1591762130341{padding-top: 20px !important;}"]Our Agency in Numbers[/sliding-text][pix_text size="text-18" content_color="body-default" position="text-center" animation="fade-in-up" delay="900" css=".vc_custom_1591757124339{padding-bottom: 10px !important;}" max_width="500px"]This is just a simple text made for this unique and awesome template, you can replace it with any text.[/pix_text][/vc_column][/vc_row][vc_row][vc_column width="1/3"][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_size="h5" content_position="text-center" text_before="+" number="60" text_after="K" css=".vc_custom_1591762546344{padding-top: 60px !important;padding-bottom: 60px !important;}"]Happy customers[/pix_numbers][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="secondary" title_size="h1" title_display="display-3" content_color="heading-default" content_size="h5" content_position="text-center" number="99" text_after="%" css=".vc_custom_1591762432508{padding-top: 60px !important;padding-bottom: 60px !important;}"]Projects completed[/pix_numbers][/vc_column][vc_column width="1/3"][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="primary" title_size="h1" title_display="display-3" content_color="heading-default" content_size="h5" content_position="text-center" text_before="+" number="150" css=".vc_custom_1591762550009{padding-top: 60px !important;padding-bottom: 60px !important;}"]Team members[/pix_numbers][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_size="h5" content_position="text-center" text_before="+" number="23" text_after="K" css=".vc_custom_1591762553527{padding-top: 60px !important;padding-bottom: 60px !important;}"]Tickets resolved[/pix_numbers][/vc_column][vc_column width="1/3"][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_size="h5" content_position="text-center" text_before="+" number="71" text_after="K" css=".vc_custom_1592879606321{padding-top: 60px !important;padding-bottom: 60px !important;}"]Tickets resolved[/pix_numbers][pix_numbers numbers_style="numbers-stack" duration="1000" title_color="heading-default" title_size="h1" title_display="display-3" content_color="heading-default" content_size="h5" content_position="text-center" text_before="+" number="84" text_after="K" css=".vc_custom_1592879618803{padding-top: 60px !important;padding-bottom: 60px !important;}"]Happy customers[/pix_numbers][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // original

    $data = array();
    $data['name'] = __( 'Numbers Main Original', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/numbers/original-main-numbers.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all numbers content';
    $data['content']  = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1593042247521{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column width="1/4"][pix_icon media_type="duo_icon" pix_duo_icon="smile" icon_color="gray-5" has_icon_bg="true" icon_bg_color="gray-1" content_align="center" style="" hover_effect="" add_hover_effect="" css=".vc_custom_1587617042626{margin-bottom: 20px !important;}"][pix_numbers numbers_style="numbers-stack" before_secondary_font="secondary-font" number_secondary_font="secondary-font" duration="2000" after_secondary_font="secondary-font" content_secondary_font="secondary-font" title_color="gradient-primary" title_size="h2" content_color="body-default" content_position="text-center" content_econdary_font="secondary-font" after_econdary_font="secondary-font" number="15" text_before="+" text_after="K"]Happy customers[/pix_numbers][/vc_column][vc_column width="1/4"][pix_icon media_type="duo_icon" pix_duo_icon="layout-arrange" icon_color="gray-5" has_icon_bg="true" icon_bg_color="gray-1" content_align="center" style="" hover_effect="" add_hover_effect="" css=".vc_custom_1587617078731{margin-bottom: 20px !important;}"][pix_numbers numbers_style="numbers-stack" before_secondary_font="secondary-font" number_secondary_font="secondary-font" duration="2000" after_secondary_font="secondary-font" content_secondary_font="secondary-font" title_color="gradient-primary" title_size="h2" content_color="body-default" content_position="text-center" content_econdary_font="secondary-font" after_econdary_font="secondary-font" number="30" text_before="+"]Complete demos[/pix_numbers][/vc_column][vc_column width="1/4"][pix_icon media_type="duo_icon" pix_duo_icon="coffee-1" icon_color="gray-5" has_icon_bg="true" icon_bg_color="gray-1" content_align="center" style="" hover_effect="" add_hover_effect="" css=".vc_custom_1587617120395{margin-bottom: 20px !important;}"][pix_numbers numbers_style="numbers-stack" before_secondary_font="secondary-font" number_secondary_font="secondary-font" duration="2000" after_secondary_font="secondary-font" content_secondary_font="secondary-font" title_color="gradient-primary" title_size="h2" content_color="body-default" content_position="text-center" content_econdary_font="secondary-font" after_econdary_font="secondary-font" number="5000" text_before="+"]Working hours[/pix_numbers][/vc_column][vc_column width="1/4"][pix_icon media_type="duo_icon" pix_duo_icon="layers" icon_color="gray-5" has_icon_bg="true" icon_bg_color="gray-1" content_align="center" style="" hover_effect="" add_hover_effect="" css=".vc_custom_1587617164962{margin-bottom: 20px !important;}"][pix_numbers numbers_style="numbers-stack" before_secondary_font="secondary-font" number_secondary_font="secondary-font" duration="2000" after_secondary_font="secondary-font" content_secondary_font="secondary-font" title_color="gradient-primary" title_size="h2" content_color="body-default" content_position="text-center" content_econdary_font="secondary-font" after_econdary_font="secondary-font" number="300" text_before="+"]PixFort templates[/pix_numbers][/vc_column][/vc_row]
CONTENT;

    array_push($templates, $data);

    return $templates;
}




 ?>
