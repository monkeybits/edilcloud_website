<?php




function pix_templates_links(){
    $templates = array();

    // software

    $data = array();
    $data['name'] = __( 'Useful links Software', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/links/software-useful-links.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all links';
    $data['content']  = <<<CONTENT
[vc_row full_width="stretch_row" content_placement="middle" css=".vc_custom_1589854357711{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 25px !important;padding-bottom: 20px !important;background-color: #ffffff !important;border-top-color: #eaecef !important;border-top-style: solid !important;border-bottom-color: #eaecef !important;border-bottom-style: solid !important;}"][vc_column width="1/4"][pix_button btn_text="Contact us" btn_secondary_font="secondary-font" btn_style="link" btn_color="gray-4" btn_remove_padding="no-padding" btn_text_color="gray-4" btn_size="lg" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-up" btn_icon="pixicon-paper-plane-1" btn_anim_delay="200"][/vc_column][vc_column width="1/4"][pix_button btn_text="Documentation" btn_secondary_font="secondary-font" btn_style="link" btn_color="gray-4" btn_remove_padding="no-padding" btn_size="lg" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-up" btn_icon="pixicon-lifebelt" btn_anim_delay="400"][/vc_column][vc_column width="1/4"][pix_button btn_text="Start Free Trial" btn_secondary_font="secondary-font" btn_style="link" btn_color="gray-4" btn_size="lg" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-up" btn_icon="pixicon-folder-download" btn_anim_delay="600"][/vc_column][vc_column width="1/4" content_align="text-right"][pix-social-icons items="%5B%7B%22icon%22%3A%22pixicon-twitter%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22body-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-instagram2%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22body-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-pinterest2%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22body-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-dribbble%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22body-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-behance%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22body-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%5D" item_size="text-24" items_color="gray-4" items_style="fly-sm" position="text-right" item_padding="px-2" animation="fade-in-up" delay="200"][/vc_column][/vc_row]
CONTENT;

    array_push($templates, $data);

    // medical

    $data = array();
    $data['name'] = __( 'Useful links Medical', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/links/medical-links.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all links';
    $data['content']  = <<<CONTENT
[vc_row full_width="stretch_row" content_placement="middle" pix_bg_grdient="bg-gradient-primary" css=".vc_custom_1590554087741{padding-top: 35px !important;padding-bottom: 25px !important;background-color: #f8f9fa !important;}"][vc_column width="1/4"][pix_button btn_text="Contact us" btn_secondary_font="secondary-font" btn_style="link" btn_color="light-opacity-7" btn_remove_padding="no-padding" btn_text_color="gray-4" btn_size="lg" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-up" btn_icon="pixicon-paper-plane-1" btn_anim_delay="200"][/vc_column][vc_column width="1/4"][pix_button btn_text="Documentation" btn_secondary_font="secondary-font" btn_style="link" btn_color="light-opacity-7" btn_remove_padding="no-padding" btn_size="lg" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-up" btn_icon="pixicon-lifebelt" btn_anim_delay="400"][/vc_column][vc_column width="1/4"][pix_button btn_text="Start Free Trial" btn_secondary_font="secondary-font" btn_style="link" btn_color="light-opacity-7" btn_remove_padding="no-padding" btn_size="lg" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-up" btn_icon="pixicon-folder-download" btn_anim_delay="600"][/vc_column][vc_column width="1/4" content_align="text-right"][pix-social-icons items="%5B%7B%22icon%22%3A%22pixicon-twitter%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22body-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-instagram2%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22body-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-pinterest2%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22body-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-dribbble%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22body-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-behance%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22body-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%5D" item_size="text-24" items_color="light-opacity-7" items_style="fly-sm" position="text-right" item_padding="px-2" animation="fade-in-up" delay="200"][/vc_column][/vc_row]
CONTENT;

    array_push($templates, $data);

    // event

    $data = array();
    $data['name'] = __( 'Tweets Event', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/links/event-tweets.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all links';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="1" css=".vc_custom_1590812301077{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;}"][vc_row full_width="stretch_row" css=".vc_custom_1590465800917{padding-bottom: 40px !important;}"][vc_column content_align="text-center" offset="vc_col-md-offset-1 vc_col-md-10"][pix_badge bold="font-weight-bold" secondary_font="" text_color="white" bg_color="secondary" text_size="custom" style="" hover_effect="" add_hover_effect="" animation="fade-in-up" padding="" text="Create and Share Events" css=".vc_custom_1590468345759{margin-bottom: 15px !important;padding-top: 9px !important;padding-right: 15px !important;padding-bottom: 8px !important;padding-left: 15px !important;}" delay="300" text_custom_size="14px"][sliding-text bold="font-weight-bold" secondary_font="secondary-font" position="center" size="h2" text_color="heading-default"]Share with your Friends[/sliding-text][pix_text size="text-18" content_color="body-default" position="text-center" animation="fade-in-up" delay="600" max_width="600px"]Combine seamlessly fitting layouts, customize everything you want, switch components on the go using our page builder.[/pix_text][vc_tweetmeme el_class="d-inline-block"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][vc_raw_html]JTNDYmxvY2txdW90ZSUyMGNsYXNzJTNEJTIydHdpdHRlci10d2VldCUyMiUzRSUzQ3AlMjBsYW5nJTNEJTIyZW4lMjIlMjBkaXIlM0QlMjJsdHIlMjIlM0VUaGUlMjBtb3N0JTIwYWR2YW5jZWQlMjBXb3JkUHJlc3MlMjB0aGVtZSUyMG9mJTIwYWxsJTIwdGltZSUyMGlzJTIwY29taW5nJTIxJTNDYnIlM0VTdWJzY3JpYmUlMjB0b2RheSUyMGFuZCUyMGdldCUyMDUwJTI1JTIwZGlzY291bnQlMjB3aGVuJTIwd2UlMjByZWxlYXNlJTIwRXNzZW50aWFscyUyMFdvcmRQcmVzcyUyMFRoZW1lJTIwb24lMjBUaGVtZWZvcmVzdCUyMCVGMCU5RiVBNCVBOSUzQ2JyJTNFJUYwJTlGJTkxJTg5JTIwJTNDYSUyMGhyZWYlM0QlMjJodHRwcyUzQSUyRiUyRnQuY28lMkZZQkVZMjg1M0hhJTIyJTNFaHR0cHMlM0ElMkYlMkZ0LmNvJTJGWUJFWTI4NTNIYSUzQyUyRmElM0UlM0NiciUzRS4lM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGd29yZHByZXNzdGhlbWUlM0ZzcmMlM0RoYXNoJTI2YW1wJTNCcmVmX3NyYyUzRHR3c3JjJTI1NUV0ZnclMjIlM0UlMjN3b3JkcHJlc3N0aGVtZSUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGZGlzY291bnQlM0ZzcmMlM0RoYXNoJTI2YW1wJTNCcmVmX3NyYyUzRHR3c3JjJTI1NUV0ZnclMjIlM0UlMjNkaXNjb3VudCUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGc3Vic2NyaWJlJTNGc3JjJTNEaGFzaCUyNmFtcCUzQnJlZl9zcmMlM0R0d3NyYyUyNTVFdGZ3JTIyJTNFJTIzc3Vic2NyaWJlJTNDJTJGYSUzRSUyMCUzQ2ElMjBocmVmJTNEJTIyaHR0cHMlM0ElMkYlMkZ0d2l0dGVyLmNvbSUyRmhhc2h0YWclMkZlc3NlbnRpYWxzJTNGc3JjJTNEaGFzaCUyNmFtcCUzQnJlZl9zcmMlM0R0d3NyYyUyNTVFdGZ3JTIyJTNFJTIzZXNzZW50aWFscyUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGdGhlbWVmb3Jlc3QlM0ZzcmMlM0RoYXNoJTI2YW1wJTNCcmVmX3NyYyUzRHR3c3JjJTI1NUV0ZnclMjIlM0UlMjN0aGVtZWZvcmVzdCUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGZW52YXRvJTNGc3JjJTNEaGFzaCUyNmFtcCUzQnJlZl9zcmMlM0R0d3NyYyUyNTVFdGZ3JTIyJTNFJTIzZW52YXRvJTNDJTJGYSUzRSUyMCUzQ2ElMjBocmVmJTNEJTIyaHR0cHMlM0ElMkYlMkZ0d2l0dGVyLmNvbSUyRmhhc2h0YWclMkZib290c3RyYXAlM0ZzcmMlM0RoYXNoJTI2YW1wJTNCcmVmX3NyYyUzRHR3c3JjJTI1NUV0ZnclMjIlM0UlMjNib290c3RyYXAlM0MlMkZhJTNFJTIwJTNDYSUyMGhyZWYlM0QlMjJodHRwcyUzQSUyRiUyRnR3aXR0ZXIuY29tJTJGaGFzaHRhZyUyRndvcmRwcmVzcyUzRnNyYyUzRGhhc2glMjZhbXAlM0JyZWZfc3JjJTNEdHdzcmMlMjU1RXRmdyUyMiUzRSUyM3dvcmRwcmVzcyUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdC5jbyUyRlVtbHc3YVp2dTUlMjIlM0VwaWMudHdpdHRlci5jb20lMkZVbWx3N2FadnU1JTNDJTJGYSUzRSUzQyUyRnAlM0UlMjZtZGFzaCUzQiUyMFBpeEZvcnQlMjAlMjglNDBQaXhGb3J0JTI5JTIwJTNDYSUyMGhyZWYlM0QlMjJodHRwcyUzQSUyRiUyRnR3aXR0ZXIuY29tJTJGUGl4Rm9ydCUyRnN0YXR1cyUyRjEyMDg1NDI2NzY3MTY1Mjc2MTklM0ZyZWZfc3JjJTNEdHdzcmMlMjU1RXRmdyUyMiUzRURlY2VtYmVyJTIwMjIlMkMlMjAyMDE5JTNDJTJGYSUzRSUzQyUyRmJsb2NrcXVvdGUlM0UlMjAlM0NzY3JpcHQlMjBhc3luYyUyMHNyYyUzRCUyMmh0dHBzJTNBJTJGJTJGcGxhdGZvcm0udHdpdHRlci5jb20lMkZ3aWRnZXRzLmpzJTIyJTIwY2hhcnNldCUzRCUyMnV0Zi04JTIyJTNFJTNDJTJGc2NyaXB0JTNF[/vc_raw_html][/vc_column][vc_column width="1/3"][vc_raw_html]JTNDYmxvY2txdW90ZSUyMGNsYXNzJTNEJTIydHdpdHRlci10d2VldCUyMiUzRSUzQ3AlMjBsYW5nJTNEJTIyZW4lMjIlMjBkaXIlM0QlMjJsdHIlMjIlM0VUaGUlMjBtb3N0JTIwYWR2YW5jZWQlMjBXb3JkUHJlc3MlMjB0aGVtZSUyMG9mJTIwYWxsJTIwdGltZSUyMGlzJTIwY29taW5nJTIxJTNDYnIlM0VTdWJzY3JpYmUlMjB0b2RheSUyMGFuZCUyMGdldCUyMDUwJTI1JTIwZGlzY291bnQlMjB3aGVuJTIwd2UlMjByZWxlYXNlJTIwRXNzZW50aWFscyUyMFdvcmRQcmVzcyUyMFRoZW1lJTIwb24lMjBUaGVtZWZvcmVzdCUyMCVGMCU5RiVBNCVBOSUzQ2JyJTNFJUYwJTlGJTkxJTg5JTIwJTNDYSUyMGhyZWYlM0QlMjJodHRwcyUzQSUyRiUyRnQuY28lMkZZQkVZMjg1M0hhJTIyJTNFaHR0cHMlM0ElMkYlMkZ0LmNvJTJGWUJFWTI4NTNIYSUzQyUyRmElM0UlM0NiciUzRS4lM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGd29yZHByZXNzdGhlbWUlM0ZzcmMlM0RoYXNoJTI2YW1wJTNCcmVmX3NyYyUzRHR3c3JjJTI1NUV0ZnclMjIlM0UlMjN3b3JkcHJlc3N0aGVtZSUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGZGlzY291bnQlM0ZzcmMlM0RoYXNoJTI2YW1wJTNCcmVmX3NyYyUzRHR3c3JjJTI1NUV0ZnclMjIlM0UlMjNkaXNjb3VudCUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGc3Vic2NyaWJlJTNGc3JjJTNEaGFzaCUyNmFtcCUzQnJlZl9zcmMlM0R0d3NyYyUyNTVFdGZ3JTIyJTNFJTIzc3Vic2NyaWJlJTNDJTJGYSUzRSUyMCUzQ2ElMjBocmVmJTNEJTIyaHR0cHMlM0ElMkYlMkZ0d2l0dGVyLmNvbSUyRmhhc2h0YWclMkZlc3NlbnRpYWxzJTNGc3JjJTNEaGFzaCUyNmFtcCUzQnJlZl9zcmMlM0R0d3NyYyUyNTVFdGZ3JTIyJTNFJTIzZXNzZW50aWFscyUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGdGhlbWVmb3Jlc3QlM0ZzcmMlM0RoYXNoJTI2YW1wJTNCcmVmX3NyYyUzRHR3c3JjJTI1NUV0ZnclMjIlM0UlMjN0aGVtZWZvcmVzdCUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGZW52YXRvJTNGc3JjJTNEaGFzaCUyNmFtcCUzQnJlZl9zcmMlM0R0d3NyYyUyNTVFdGZ3JTIyJTNFJTIzZW52YXRvJTNDJTJGYSUzRSUyMCUzQ2ElMjBocmVmJTNEJTIyaHR0cHMlM0ElMkYlMkZ0d2l0dGVyLmNvbSUyRmhhc2h0YWclMkZib290c3RyYXAlM0ZzcmMlM0RoYXNoJTI2YW1wJTNCcmVmX3NyYyUzRHR3c3JjJTI1NUV0ZnclMjIlM0UlMjNib290c3RyYXAlM0MlMkZhJTNFJTIwJTNDYSUyMGhyZWYlM0QlMjJodHRwcyUzQSUyRiUyRnR3aXR0ZXIuY29tJTJGaGFzaHRhZyUyRndvcmRwcmVzcyUzRnNyYyUzRGhhc2glMjZhbXAlM0JyZWZfc3JjJTNEdHdzcmMlMjU1RXRmdyUyMiUzRSUyM3dvcmRwcmVzcyUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdC5jbyUyRjZjSWllTVg5dXAlMjIlM0VwaWMudHdpdHRlci5jb20lMkY2Y0lpZU1YOXVwJTNDJTJGYSUzRSUzQyUyRnAlM0UlMjZtZGFzaCUzQiUyMFBpeEZvcnQlMjAlMjglNDBQaXhGb3J0JTI5JTIwJTNDYSUyMGhyZWYlM0QlMjJodHRwcyUzQSUyRiUyRnR3aXR0ZXIuY29tJTJGUGl4Rm9ydCUyRnN0YXR1cyUyRjEyMDIwMDQ0Mjc1MDg0NjE1NjglM0ZyZWZfc3JjJTNEdHdzcmMlMjU1RXRmdyUyMiUzRURlY2VtYmVyJTIwMyUyQyUyMDIwMTklM0MlMkZhJTNFJTNDJTJGYmxvY2txdW90ZSUzRSUyMCUzQ3NjcmlwdCUyMGFzeW5jJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZwbGF0Zm9ybS50d2l0dGVyLmNvbSUyRndpZGdldHMuanMlMjIlMjBjaGFyc2V0JTNEJTIydXRmLTglMjIlM0UlM0MlMkZzY3JpcHQlM0U=[/vc_raw_html][/vc_column][vc_column width="1/3"][vc_raw_html]JTNDYmxvY2txdW90ZSUyMGNsYXNzJTNEJTIydHdpdHRlci10d2VldCUyMiUzRSUzQ3AlMjBsYW5nJTNEJTIyZW4lMjIlMjBkaXIlM0QlMjJsdHIlMjIlM0VTb21ldGhpbmclMjBCaWclMjBpcyUyMENvbWluZyUyMSUyMGdldCUyMGh1Z2UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdHdpdHRlci5jb20lMkZoYXNodGFnJTJGZGlzY291bnQlM0ZzcmMlM0RoYXNoJTI2YW1wJTNCcmVmX3NyYyUzRHR3c3JjJTI1NUV0ZnclMjIlM0UlMjNkaXNjb3VudCUzQyUyRmElM0UlMjB0b2RheSUzQ2JyJTNFJUYwJTlGJTkzJUE2JTIwRGlzY292ZXIlMjB3aGF0JUUyJTgwJTk5cyUyMGNvbWluZyUzQ2JyJTNFJUYwJTlGJTkxJTg5JTIwJTNDYSUyMGhyZWYlM0QlMjJodHRwcyUzQSUyRiUyRnQuY28lMkZZQkVZMjg1M0hhJTIyJTNFaHR0cHMlM0ElMkYlMkZ0LmNvJTJGWUJFWTI4NTNIYSUzQyUyRmElM0UlMjAlM0NhJTIwaHJlZiUzRCUyMmh0dHBzJTNBJTJGJTJGdC5jbyUyRk5hQXZxVmJ5YWklMjIlM0VwaWMudHdpdHRlci5jb20lMkZOYUF2cVZieWFpJTNDJTJGYSUzRSUzQyUyRnAlM0UlMjZtZGFzaCUzQiUyMFBpeEZvcnQlMjAlMjglNDBQaXhGb3J0JTI5JTIwJTNDYSUyMGhyZWYlM0QlMjJodHRwcyUzQSUyRiUyRnR3aXR0ZXIuY29tJTJGUGl4Rm9ydCUyRnN0YXR1cyUyRjExOTcyNzk4Mzk4MTM4NTMxODYlM0ZyZWZfc3JjJTNEdHdzcmMlMjU1RXRmdyUyMiUzRU5vdmVtYmVyJTIwMjAlMkMlMjAyMDE5JTNDJTJGYSUzRSUzQyUyRmJsb2NrcXVvdGUlM0UlMjAlM0NzY3JpcHQlMjBhc3luYyUyMHNyYyUzRCUyMmh0dHBzJTNBJTJGJTJGcGxhdGZvcm0udHdpdHRlci5jb20lMkZ3aWRnZXRzLmpzJTIyJTIwY2hhcnNldCUzRCUyMnV0Zi04JTIyJTNFJTNDJTJGc2NyaXB0JTNF[/vc_raw_html][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // ecommerce

    $data = array();
    $data['name'] = __( 'Links and social Ecommerce', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/links/ecommerce-useful-links.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all links';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1590117767787{background-color: #ffffff !important;}"][vc_row full_width="stretch_row" content_placement="middle" css=".vc_custom_1592616835121{padding-top: 40px !important;padding-bottom: 40px !important;}"][vc_column width="2/3"][pix_button btn_text="About" btn_target="true" btn_title_bold="" btn_style="link" btn_color="gray-5" btn_text_color="body-default" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_animation="fade-in-up" btn_link="#" btn_anim_delay="200" css=".vc_custom_1592616754884{padding-top: 20px !important;}"][pix_button btn_text="Contact" btn_target="true" btn_title_bold="" btn_style="link" btn_color="gray-5" btn_text_color="body-default" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_animation="fade-in-up" btn_link="#" btn_anim_delay="200" css=".vc_custom_1592616760605{padding-top: 20px !important;}"][pix_button btn_text="Refunds" btn_target="true" btn_title_bold="" btn_style="link" btn_color="gray-5" btn_text_color="body-default" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_animation="fade-in-up" btn_link="#" btn_anim_delay="200" css=".vc_custom_1592616765871{padding-top: 20px !important;}"][pix_button btn_text="Support" btn_target="true" btn_title_bold="" btn_style="link" btn_color="gray-5" btn_text_color="body-default" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_animation="fade-in-up" btn_link="#" btn_anim_delay="200" css=".vc_custom_1592616769682{padding-top: 20px !important;}"][/vc_column][vc_column width="1/3" content_align="text-right"][pix-social-icons items="%5B%7B%22icon%22%3A%22pixicon-facebook3%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22heading-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-twitter%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22heading-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-instagram2%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22heading-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%2C%7B%22icon%22%3A%22pixicon-dribbble%22%2C%22item_link%22%3A%22%23%22%2C%22item_color%22%3A%22heading-default%22%2C%22item_custom_color%22%3A%22%23333333%22%7D%5D" item_size="text-24" items_style="fly-sm" position="text-right" item_padding="px-2" animation="fade-in-up" delay="400"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // foundation

    $data = array();
    $data['name'] = __( 'Links foundation', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/links/foundation-links.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all links';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility=""][vc_row full_width="stretch_row" content_placement="middle" css=".vc_custom_1592659140181{padding-top: 20px !important;padding-bottom: 20px !important;background-color: #ffffff !important;}"][vc_column content_align="text-center"][pix_button btn_text="Company" btn_title_bold="" btn_style="underline" btn_text_color="body-default" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_animation="fade-in" btn_link="#" css=".vc_custom_1590633435119{padding-top: 5px !important;padding-bottom: 5px !important;}"][pix_button btn_text="Services" btn_title_bold="" btn_style="underline" btn_text_color="body-default" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_animation="fade-in" btn_link="#" css=".vc_custom_1590633441292{padding-top: 5px !important;padding-bottom: 5px !important;}"][pix_button btn_text="Terms of use" btn_title_bold="" btn_style="underline" btn_text_color="body-default" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_animation="fade-in" btn_link="#" css=".vc_custom_1590633454035{padding-top: 5px !important;padding-bottom: 5px !important;}"][pix_button btn_text="Press" btn_title_bold="" btn_style="underline" btn_text_color="body-default" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_animation="fade-in" btn_link="#" css=".vc_custom_1590633469080{padding-top: 5px !important;padding-bottom: 5px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // influencer

    $data = array();
    $data['name'] = __( 'Social buttons Influencer', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/links/influencer-social.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all links';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility=""][vc_row css=".vc_custom_1591577555539{padding-top: 40px !important;padding-bottom: 40px !important;}"][vc_column width="1/4"][pix_button btn_text="Facebook" btn_style="flat" btn_color="blue" btn_size="xl" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_full="true" btn_link="#" btn_icon="pixicon-facebook3"][/vc_column][vc_column width="1/4"][pix_button btn_text="Twitter" btn_style="flat" btn_color="cyan" btn_size="xl" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_full="true" btn_link="#" btn_icon="pixicon-twitter"][/vc_column][vc_column width="1/4"][pix_button btn_text="Instagram" btn_style="flat" btn_color="red" btn_size="xl" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_full="true" btn_link="#" btn_icon="pixicon-instagram2"][/vc_column][vc_column width="1/4"][pix_button btn_text="Snapchat" btn_style="flat" btn_color="yellow" btn_size="xl" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_full="true" btn_link="#" btn_icon="pixicon-snapchat"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);



    return $templates;
}




 ?>
