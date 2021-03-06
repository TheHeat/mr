/**
 * Galleria marcrees Theme 2012-08-08
 * http://galleria.io
 *
 * Licensed under the MIT license
 * https://raw.github.com/aino/galleria/master/LICENSE
 *
 */

(function($) {

/*global window, jQuery, Galleria */

Galleria.addTheme({
    name: 'marcrees',
    author: 'Galleria',
    css: 'galleria.marcrees.css',
    defaults: {
        
        imageCrop: true,
        carousel: false,
        thumbnails: false,
        transition: 'slide',
        responsive: true,
        autoplay: 7000,
        pauseOnInteraction: false,
        vimeo: {
            title: 0,
            byline: 0,
            portrait: 0,
            api: 1,
            },

        // set this to false if you want to show the caption all the time:
        _toggleInfo: false
    },
    init: function(options) {

        Galleria.requires(1.28, 'This version of marcrees theme requires Galleria 1.2.8 or later');

        // add play & pause
        this.addElement('image-nav-play', 'image-nav-pause');
        this.append({
            'image-nav' : ['image-nav-play','image-nav-pause']
        });


        this.$('image-nav-play').hide();




       // cache some stuff
        var info = this.$('info-text'),
            playbutton = this.$('image-nav-play,image-nav-pause'),
            touch = Galleria.TOUCH,
            click = touch ? 'touchstart' : 'click';

        // show loader & counter with opacity
        this.$('loader,counter').show().css('opacity', 0.4);


        // Toggle play/pause buttons
        this.$('image-nav-pause,image-nav-play').click(function(){
            $('.galleria').data('galleria').playToggle();
            playbutton.toggle();
        });

        // some stuff for non-touch browsers
        if (! touch ) {
            this.addIdleState( this.get('image-nav'), { opacity:0 });
            this.addIdleState( this.get('counter'), { opacity:0 });
        }

        // bind some stuff
        this.bind('thumbnail', function(e) {

            if (! touch ) {
                // fade thumbnails
                $(e.thumbTarget).css('opacity', 0.6).parent().hover(function() {
                    $(this).not('.active').children().stop().fadeTo(100, 1);
                }, function() {
                    $(this).not('.active').children().stop().fadeTo(400, 0.6);
                });

                if ( e.index === this.getIndex() ) {
                    $(e.thumbTarget).css('opacity',1);
                }
            } else {
                $(e.thumbTarget).css('opacity', this.getIndex() ? 1 : 0.6).click( function() {
                    $(this).css( 'opacity', 1 ).parent().siblings().children().css('opacity', 0.6);
                });
            }
        });

        var activate = function(e) {
            $(e.thumbTarget).css('opacity',1).parent().siblings().children().css('opacity', 0.6);
        };

        this.bind('loadstart', function(e) {
            if (!e.cached) {
                this.$('loader').show().fadeTo(200, 0.4);
            }
            window.setTimeout(function() {
                activate(e);
            }, touch ? 300 : 0);
            this.$('info').toggle( this.hasInfo() );
        });

        this.bind('loadfinish', function(e) {
            this.$('loader').fadeOut(200);
        });
    }
});

}(jQuery));
