(function($){

    "use strict";
    // $(document).ready(function(){
    jQuery(document).ready(function($) {
        // add this code
        Flickity.prototype._createResizeClass = function() {
          this.element.classList.add('flickity-resize');
        };

        Flickity.createMethods.push('_createResizeClass');

        var resize = Flickity.prototype.resize;
        Flickity.prototype.resize = function() {
          this.element.classList.remove('flickity-resize');
          resize.call( this );
          this.element.classList.add('flickity-resize');
        };


        // console.log("main pix_init_sliders");
        pix_init_sliders();
    });


async function pix_init_sliders(){
    // console.log("pix_init_sliders");
    var $onMobileBrowser = navigator.userAgent.match(/(Android|iPod|iPhone|iPad|BlackBerry|IEMobile|Opera Mini)/);


    var $pixSliders = [];
    $('.0:not(.pix-loaded)').each(function(i) {
        pix_init_slider(this, i, false);
    });

}

window.pix_resize_slider = async function(el){
    if(!el){
        el = $('body');
    }
    $('.pix-slider').flickity({
        draggable: true,
        // cellAlign: 'left',
        adaptiveHeight: true,
        wrapAround: true,
        // autoPlay: true,
        prevNextButtons: false,
        imagesLoaded: true,
        contain: true,
        ready: function(){
            $('.pix-slider').flickity('resize');
            setTimeout(function() {
                $('.pix-slider').flickity('resize');
            }, 900);
        },
        on: {
            ready: function() {
                // $('.jarallax-slider').jarallax({
                //     speed: 0.4
                // });
                $('.pix-slider').flickity('resize');
                setTimeout(function() {
                    $('.pix-slider').flickity('resize');
                }, 900);
            }
        }
    });

    if(el.find('.pix-slider').length){
        el.find('.pix-slider').each(function(i, elem){
            $(elem).flickity('resize');
        });

    }
}

window.pix_init_slider2 = async function(i, editor, el){
    if(!el){
        el = $('body');
    }
    el.find('.pix-slider-effect-1:not(.pix-loaded)').each(function(c, elem) {


        pix_init_slider(this, i, false);
    });
}
async function pix_init_slider(elem, i, editor){


    if(editor){
        // console.log(elem);
        // console.log($(elem));
        // console.log($(elem).parent());
        if(elem.find('.pix-slider-effect-1')[0]){
            elem.find('.pix-slider-effect-1').addClass('instance-' + i);
            elem.find('.pix-slider-effect-1').addClass('pix-loaded');
        }
    }else{
        $(elem).addClass('instance-' + i);
        $(elem).addClass('pix-loaded');
    }

    var html = $('<div>').append($(elem).clone()).html();
    $(elem).replaceWith(html);

    var opts = {
        draggable: true,
        lazyLoad: false,
        prevNextButtons: true,
        imagesLoaded: true,
        wrapAround: true,

        // autoPlay: true,
        // autoPlay: true,
        // groupCells: true,
        cellAlign: 'left',

    };
    // console.log("----------------------2");
    // console.log(i);
    // console.log($('.pix-slider-effect-1.instance-' + i));
    // $('.pix-slider-effect-1.instance-' + i).flickity('destroy');

    // $('.pix-slider-effect-1.instance-' + i).on( 'ready.flickity', function() {
    //   console.log('Flickity ready');
    //   // $('.pix-slider-effect-1.instance-' + i).flickity('resize');
    //   $('.pix-slider-effect-1.instance-' + i).flickity('resize');
    //
    // });

    var the_slider = new Flickity('.pix-slider-effect-1.instance-' + i, {
        draggable: true,
        lazyLoad: false,
        prevNextButtons: true,
        imagesLoaded: true,
        wrapAround: true,
        cellAlign: 'left',
        // arrowShape: 'M53.4643559,86 C51.8039722,86 50.4756652,85.3376492 49.1473582,84.344123 L0,42.9471983 L49.1473582,1.55027364 C51.8039722,-0.767954144 56.1209698,-0.436778747 58.445507,2.21262443 C60.7700443,4.86202761 60.4379675,9.16730778 57.7813536,11.4855356 L20.5887582,42.9471983 L57.7813536,74.4088611 C60.4379675,76.7270889 60.7700443,81.032369 58.445507,83.6817722 C57.1172001,85.3376492 55.1247396,86 53.4643559,86 Z',
        on: {
            ready: function() {
              // console.log('Flickity ready');
              // console.log($(this));
              $(this).resize();
            }
          }
    });


    // console.log("Effect-1");
    // $('.pix-slider-effect-1.instance-' + i).flickity();

    // var name = '.pix-slider-effect-1.instance-' + i;
    // var the_slider = $(name).flickity(opts);

    the_slider.on('scroll', function(e, progress ) {
        var el = $('.pix-slider-effect-1.instance-' + i + ' .flickity-viewport');
        var el_width = el.width();
        var el_left = el.offset().left;
        // console.log("Left = "+el_left);
        var slideWidth = el.find('.carousel-cell').width();
        // the_slider.resize();

        the_slider.slides.forEach(function(slide, j) {
            // console.log(j);
            var flkInstanceSlide = $('.pix-slider-effect-1.instance-' + i + ' .carousel-cell:nth-child(' + (j + 1) + ')');
            var slide_offset = $(slide.cells[0].element).offset().left;
            // var slideWidth = $(slide.cells[0].element).width();

            var op = 1;

            // if(j==0||true){
            // slide_offset-=30;
            var local_offset = 0;
            var rotate = 0;
            var translate = 0;
            var scale = 1;
            var depth = 0;
            var index = 10;
            if(slide_offset - el_left < 0 ){
                // op = 1 + ((slide_offset - el_left) / el_width);

                local_offset = slide_offset - el_left;
                op = 1 + ( local_offset / slideWidth);
                // rotate = local_offset / slideWidth;
                if(op<0){op=0;}
                if(op>1){op=1;}
                rotate = (1-op)*20;

                // translate = (1-op)*1.8*slideWidth;
                // translate =   (slide_offset / slideWidth);
                translate =  1.3 * ( -1 * slide_offset + el_left );
                // if(j==0){
                //     console.log({slide_offset});
                //     console.log({el_left});
                //     // console.log({translate});
                //     // console.log(local_offset);
                // }
                // depth = -1*(1-op)*slideWidth;
                // depth = slide_offset + el_left;
                depth = -100 * ( (el_left-slide_offset) / slideWidth);
                index = -1;

                scale = 1- ((1 - op)*0.1);
                if(op<0.9) op = op - (op/4);
                if(op<0.2) op = 0;

            }
            else if(slide_offset  > el_left + el_width - slideWidth){
                // op = 1 - ((slide_offset - el_left) / el_width);
                // op = 1 - ((slide_offset - el_left) / el_width);
                local_offset = el_left  + el_width - slide_offset;
                op =  local_offset / slideWidth;
                // rotate = local_offset / slideWidth;
                if(op<0){op=0;}
                if(op>1){op=1;}
                rotate = -1 * (1-op)*20;
                translate = -1*(1-op)*1.8*slideWidth;
                depth = -1*(1-op)*slideWidth;
                index = -1;

                scale = 1- ((1 - op)*0.1);
                if(op<0.9) op = op - (op/4);
                if(op<0.2) op = 0;
            }



            flkInstanceSlide.find('.slide-inner').css({
                // 'transform': 'scale(' + scale + ') translateZ(0)'
                // 'transform': 'perspective(800px) scale(' + scale + ') translateX(' + translate + 'px) rotateY(' + rotate + 'deg) translateZ( '+depth+'px)',
                // 'transform': 'perspective(800px) scale(' + scale + ') translateX(' + translate + 'px) rotateY(' + rotate + 'deg) translateZ( '+depth+'px)'
                'transform': 'perspective('+slideWidth+'px) translateX(' + translate + 'px) rotateY(' + rotate + 'deg) translateZ( '+depth+'px)'

            });

            flkInstanceSlide.css({
                'opacity': op,
                'z-index': index
            });

        });
    });











}


})(jQuery);
