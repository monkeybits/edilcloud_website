// (function ( $ ) {
// 	'use strict';
// 	window.InlineShortcodeView_vc_section = window.InlineShortcodeViewContainer.extend( {
// 		controls_selector: '#vc_controls-template-container',
// 		initialize: function () {
// 			_.bindAll( this, 'checkSectionWidth' );
// 			window.InlineShortcodeView_vc_section.__super__.initialize.call( this );
// 			vc.frame_window.jQuery( vc.frame_window.document ).off( 'vc-full-width-row-single', this.checkSectionWidth );
// 			vc.frame_window.jQuery( vc.frame_window.document ).on( 'vc-full-width-row-single', this.checkSectionWidth );
// 		},
// 		checkSectionWidth: function ( e, data ) {
// 			if ( data.el.hasClass( 'vc_section' ) && data.el.attr( 'data-vc-stretch-content' ) ) {
// 				data.el.siblings( '.vc_controls' ).find( '.vc_controls-out-tl' ).css( { left: data.offset - 17 } );
// 			}
// 		},
// 		render: function () {
// 			var $content = this.content();
// 			if ( $content && $content.hasClass( 'vc_row-has-fill' ) ) {
// 				$content.removeClass( 'vc_row-has-fill' );
// 				this.$el.addClass( 'vc_row-has-fill' );
// 			}
//
//
//
//
// 			return window.InlineShortcodeView_vc_section.__super__.render.call( this );
// 		}
// 	} );
// })( window.jQuery );


(function () {
	'use strict';
	window.InlineShortcodeView_vc_section = window.InlineShortcodeViewContainer.extend( {
		controls_selector: '#vc_controls-template-container',
		initialize: function () {
			_.bindAll( this, 'checkSectionWidth' );
			window.InlineShortcodeView_vc_section.__super__.initialize.call( this );
			vc.frame_window.jQuery( vc.frame_window.document ).off( 'vc-full-width-row-single', this.checkSectionWidth );
			vc.frame_window.jQuery( vc.frame_window.document ).on( 'vc-full-width-row-single', this.checkSectionWidth );
		},
		checkSectionWidth: function ( e, data ) {
			if ( data.el.hasClass( 'vc_section' ) && data.el.attr( 'data-vc-stretch-content' ) ) {
				data.el.siblings( '.vc_controls' ).find( '.vc_controls-out-tl' ).css( { left: data.offset - 17 } );
			}
		},
		render: function () {
			var $content = this.content();
			if ( $content && $content.hasClass( 'vc_row-has-fill' ) ) {
				$content.removeClass( 'vc_row-has-fill' );
				this.$el.addClass( 'vc_row-has-fill' );
			}

			// pixfort code
			var self = this;
			vc.frame_window.pix_cb_fn(function(){
				self.$el.find('.pix_element_overlay.pix-loaded').remove();
				self.$el.find('.pix_element_overlay').addClass('pix-loaded');

				self.$el.find('.fullpage-container.pix-loaded').remove();
				self.$el.find('.fullpage-container').addClass('pix-loaded');

				self.$el.find("div[id^='jarallax-container'].pix-loaded").remove();
				self.$el.find("div[id^='jarallax-container']").addClass('pix-loaded');

				$content.find('> .pix-divider.pix-loaded').remove();
            	$content.find('> .pix-divider').addClass('pix-loaded');

				// self.$el.find('*[data-jarallax-video]').each(function(elem){
				// 	$(elem).jarallax();
				// });



				// self.$el.find('*[data-jarallax-video]').each(function(){
		        //     let src = $(this).attr('data-jarallax-video');
				// 	console.log(src);
		        //     $(this).jarallax({
		        //         speed: 0.4,
		        //         videoSrc: src
		        //     });
		        // });
			});
			vc.frame_window.pixBgVideo(this.$el);

			setTimeout(function(){
				window.vc.frame_window.pix_sliders();
			}, 1000);
			// ====================================


			return window.InlineShortcodeView_vc_section.__super__.render.call( this );
		}
	} );
})();
