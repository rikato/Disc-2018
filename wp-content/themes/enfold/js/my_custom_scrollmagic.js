(function( $ ) {
    "use strict";

    $(function() {
        //init scrollMagic
        var controller = new ScrollMagic.Controller();


        //par scene
        //build scene
        var imacParScene = new ScrollMagic.Scene({
            triggerElement: '.imac-holder',
            triggerHook: 1,
            duration: '100%'
        })
            .setTween(TweenMax.from('#what-intro .slider-items p img', 1, {y: '-70%', ease:Power0.easeNone}))
            // .addIndicators()
        .addTo(controller);

        var whatIntroBackground = new ScrollMagic.Scene({
            triggerElement: '#what-intro',
            triggerHook: 1,
            duration: '45%'
        })
        .setTween(TweenMax.fromTo('.background-svg', 1, {backgroundSize: '275vh', ease:Power0.easeNone}, {backgroundSize: '175vh', ease:Power0.easeNone}))
        // .addIndicators()
            // .reverse(false)
        .addTo(controller);

        var whatIntroBackground2 = new ScrollMagic.Scene({
            triggerElement: '#what-intro .imac-holder',
            triggerHook: 0,
            duration: '50%'
        })
            .setTween(TweenMax.fromTo('.background-svg', 1, {backgroundSize: '175vh', ease:Power0.easeNone}, {backgroundSize: '575vh', ease:Power0.easeNone}))
            .addIndicators()
            // .reverse(false)
            .addTo(controller);

        //build scene
        var whatTextLeft = new ScrollMagic.Scene({
            triggerElement: '#what-intro .imac-holder',
            triggerHook: 0.7
        })
        .setClassToggle('#what-intro .what-we-do_text', 'fade-in')
        .addTo(controller);


        $('.what-we-do_right-text section').each(function (index) {
            //build scene
            var ourScene = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 0.7
            })
            .setClassToggle(this, 'fade-in')
            // .addIndicators({
            //     name: 'fade scene',
            //     colorTrigger: 'black',
            //     colorStart: '#75C695',
            //     colorEnd: 'pink'
            // })
            .addTo(controller);
        });

    });

}(jQuery)); 