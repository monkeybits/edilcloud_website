jQuery( window ).on( 'elementor/frontend/init', () => {

   const addHandler = ( $element ) => {
       pix_sliders();
       pix_animation_display($element);
       piximations.init();
   };

   elementorFrontend.hooks.addAction( 'frontend/element_ready/pix-slider.default', addHandler );
} );
