(function ( $ ) {
	'use strict';

    // This name is defined automatically (InlineShortcodeView_you, for Frontend editor only
    window.InlineShortcodeView_pix_video_slider = window.InlineShortcodeView.extend({
    	// Render called every time when some of attributes changed.
    	render: function () {
            // console && console.log('InlineShortcodeView_test_element: render called.');
    		window.InlineShortcodeView_pix_video_slider.__super__.render.call(this); // it is recommended to call parent method to avoid new versions problems.
            this.pix_update();
    		return this;
    	},
    	pix_update: function () {
    		// var $i = this.model.settings; // shortcode settings from VC_MAP! also available in global variable "vc_mapper"
    		// var str = '';
    		// _.each($i, function (settings, key) {
    		// 	var obj = {};
    		// 	obj[key] = settings;
    		// 	str += JSON.stringify(obj) + '<br>';
    		// }, this);
    		// jQuery('<div>Green background will be visible only in fronteditor mode and css is stored in assets/front_enqueue_iframe_css.css <br/><br/> This json styled info was created "on the fly" from available settings: <br/>' + str + '</div>').appendTo(this.$el);
            var that = this;

			// window.vc.frame_window.pix_sliders();
			
			setTimeout(function(){
				window.vc.frame_window.pix_main_slider(this.$el);
			}, 500);
			setTimeout(function(){
				vc.frame_window.pix_cb_fn(function(){
					var effects	=	[
			            'fade-in-Img',
			            'fade-in-down',
			            'fade-in-left',
			            'fade-in-up',
			            'fade-in-up-big',
			            'fade-in-right-big',
			            'fade-in-left-big',
			            'slide-in-up'
			        ];
					that.$el.find('.animate-in:not(.animating)').each(function(i, elem){

			            var	type = $(elem).attr('data-anim-type'),
			            delay = $(elem).attr('data-anim-delay');
			            $(elem).addClass('pix-waiting');

						// Animate
						setTimeout(function() {
							$(elem).addClass('animating').addClass(type).removeClass('animate-in');
						}, delay);

						// On animation end
						$(elem).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
							// Clear animation
							$(elem).removeClass('animating').removeClass(effects.join(' ')).addClass('animated');
						});

			        });
				});
				if(that.$el.hasClass('flickity-enabled')){
					that.$el.find('.pix-main-slider').flickity('resize');
				}
			}, 500);
    	},
    	updated: function () {
            // console && console.log('InlineShortcodeView_test_element: updated called.');
    		window.InlineShortcodeView_pix_video_slider.__super__.updated.call(this);
            this.pix_update();
            return this;
    	},
    	parentChanged: function () {
            // console && console.log('InlineShortcodeView_test_element: parentChanged called.');
    		window.InlineShortcodeView_pix_video_slider.__super__.parentChanged.call(this);
    	}

    });


})( window.jQuery );
