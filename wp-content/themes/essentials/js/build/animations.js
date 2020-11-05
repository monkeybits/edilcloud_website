// animations
// v1.0
// By Firas ODEH

var piximations = (function() {

    var api = {
        test: 1,
        init: function() {
            initHeadline();
            initSlidingHeadling();
            return this;
        },
        update: function(){
            initHeadline();
            initSlidingHeadling();
        },
        play: function(el=false){
            playSlidingHeadling(el);
        }
    };


    async function playSlidingHeadling(el){
        if(!el){
            el = $('body');
        }
        el.find('.pix-sliding-headline').each(function(i, headline){
            var headling_text = $(headline).text();
            var words = headling_text.split(" ");
            var html = '';
            $.each(words, function(i, w){
                if(w&&w!=''){
                    html += '<span class="slide-in-container"><span class="d-inline-block group-animate-in text-gradient-primary">'+w+'</span></span> ';
                }
            });
            $(headline).html(html);
            var delay = 400;
            $(headline).find('.group-animate-in').each(function(i, elem){
                // Animate
                setTimeout(function() {
                    $(elem).addClass('animating').addClass('slide-in-up').removeClass('group-animate-in');
                }, delay);
                // On animation end
                $(elem).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                    // Clear animation
                    $(elem).removeClass('animating').removeClass('slide-in-up').addClass('animated');
                });
                delay+=150;
            });
        });
    }
    async function initSlidingHeadling(){

        $('.pix-sliding-headline').each(function(i, headline){
            var headling_text = $(headline).text();
            var words = headling_text.split(" ");
            var html = '';

            $.each(words, function(i, w){
                html += '<span class="slide-in-container"><span class="d-inline-block group-animate-in text-gradient-primary" >'+w+'</span></span> ';

            });

            $(headline).html(html);

            var waypoint = new Waypoint({
                element: headline,
                offset: '100%',
                triggerOnce: true,
                handler: function() {
                    var delay = 400;
                    $(headline).find('.group-animate-in').each(function(i, elem){
                        // Animate
                        setTimeout(function() {
                            $(elem).addClass('animating').addClass('slide-in-up').removeClass('group-animate-in');
                        }, delay);
                        // On animation end
                        $(elem).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                            // Clear animation
                            $(elem).removeClass('animating').removeClass('slide-in-up').addClass('animated');
                        });
                        delay+=150;
                    });
                    // trigger Once
                    this.destroy();
                }
            });
        });

    }





    // New Test
    var animationDelay = 2500,
    //loading bar effect
    barAnimationDelay = 3800,
    barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
    //letters effect
    lettersDelay = 50,
    //type effect
    typeLettersDelay = 150,
    selectionDuration = 500,
    typeAnimationDelay = selectionDuration + 800,
    //clip effect
    revealDuration = 600,
    revealAnimationDelay = 1500;

    async function initHeadline() {
        //insert <i> element for each letter of a changing word
        singleLetters($('.pix-headline.letters').find('span'));
        //initialise headline animation
        animateHeadline($('.pix-headline'));
    }

    function singleLetters($words) {
        $words.each(function(){
            var word = $(this),
            letters = word.text().split(''),
            selected = word.hasClass('is-visible');
            for (i in letters) {
                if(word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
                letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
            }
            var newLetters = letters.join('');
            word.html(newLetters).css('opacity', 1);
        });
    }

    function animateHeadline($headlines) {
        var duration = animationDelay;
        $headlines.each(function(){
            var headline = $(this);

            if(headline.hasClass('loading-bar')) {
                duration = barAnimationDelay;
                setTimeout(function(){ headline.find('.pix-words-wrapper').addClass('is-loading') }, barWaiting);
            } else if (headline.hasClass('clip')){
                var spanWrapper = headline.find('.pix-words-wrapper'),
                newWidth = spanWrapper.width() + 10
                spanWrapper.css('width', newWidth);
            } else if (!headline.hasClass('type') ) {
                //assign to .pix-words-wrapper the width of its longest word
                var words = headline.find('.pix-words-wrapper span'),
                width = 0;
                // words.each(function(){
                // 	var wordWidth = $(this).width();
                //     if (wordWidth > width) width = wordWidth;
                // });
                width = headline.find('.pix-words-wrapper span').first().width();
                var height = headline.find('.pix-words-wrapper span').first().height();
                // headline.find('.pix-words-wrapper').css('width', width);
                headline.find('.pix-words-wrapper').width(width);
                // headline.find('.pix-words-wrapper').css('height', height);
            };

            //trigger animation
            setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
        });
    }

    function hideWord($word) {
        var nextWord = takeNext($word);

        if($word.parents('.pix-headline').hasClass('type')) {
            var parentSpan = $word.parent('.pix-words-wrapper');
            parentSpan.addClass('selected').removeClass('waiting');
            setTimeout(function(){
                parentSpan.removeClass('selected');
                $word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
            }, selectionDuration);
            setTimeout(function(){ showWord(nextWord, typeLettersDelay) }, typeAnimationDelay);

        } else if($word.parents('.pix-headline').hasClass('letters')) {
            var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
            hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
            showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

        }  else if($word.parents('.pix-headline').hasClass('clip')) {
            $word.parents('.pix-words-wrapper').animate({ width : '2px' }, revealDuration, function(){
                switchWord($word, nextWord);
                showWord(nextWord);
            });

        } else if ($word.parents('.pix-headline').hasClass('loading-bar')){
            $word.parents('.pix-words-wrapper').removeClass('is-loading');
            switchWord($word, nextWord);
            setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay);
            setTimeout(function(){ $word.parents('.pix-words-wrapper').addClass('is-loading') }, barWaiting);

        } else {
            switchWord($word, nextWord);
            setTimeout(function(){ hideWord(nextWord) }, animationDelay);
        }
    }

    function showWord($word, $duration) {
        if($word.parents('.pix-headline').hasClass('type')) {
            showLetter($word.find('i').eq(0), $word, false, $duration);
            $word.addClass('is-visible').removeClass('is-hidden');
        }  else if($word.parents('.pix-headline').hasClass('clip')) {
            $word.parents('.pix-words-wrapper').animate({ 'width' : $word.width() + 10 }, revealDuration, function(){
                setTimeout(function(){ hideWord($word) }, revealAnimationDelay);
            });
        }
    }

    function hideLetter($letter, $word, $bool, $duration) {
        $letter.removeClass('in').addClass('out');

        if(!$letter.is(':last-child')) {
            setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);
        } else if($bool) {
            setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay);
        }

        if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
            var nextWord = takeNext($word);
            switchWord($word, nextWord);
        }
    }

    function showLetter($letter, $word, $bool, $duration) {
        $letter.addClass('in').removeClass('out');

        if(!$letter.is(':last-child')) {
            setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration);
        } else {
            if($word.parents('.pix-headline').hasClass('type')) { setTimeout(function(){ $word.parents('.pix-words-wrapper').addClass('waiting'); }, 200);}
            if(!$bool) { setTimeout(function(){ hideWord($word) }, animationDelay) }
        }
    }

    function takeNext($word) {
        return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
    }

    function takePrev($word) {
        return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
    }

    function switchWord($oldWord, $newWord) {
        $oldWord.removeClass('is-visible').addClass('is-hidden');
        var new_width = $newWord.width();
        if($oldWord.parents('.pix-headline').hasClass('rotate-1')) {
            // setTimeout(function(){ $oldWord.parents('.pix-words-wrapper').stop().animate({ width: new_width },{duration: 200})}, 600) ;
            $oldWord.parents('.pix-words-wrapper').width(new_width);
        }else{
            // $oldWord.parents('.pix-words-wrapper').stop().animate({ width: new_width },{duration: 400});
            $oldWord.parents('.pix-words-wrapper').width(new_width);
        }
        $newWord.removeClass('is-hidden').addClass('is-visible');


    }


    return api;

})();
