jQuery(document).ready(function($){

    $(window).on('load', function(){
        myFunction();
    });

    $(window).on('scroll', function(){
        myFunction();
    });

    var $header = $("#header__menus"),
        sticky = $header.offset().top;

    function myFunction() {
        
        console.log( 'window.pageYOffset', window.pageYOffset );
        console.log( 'sticky', sticky );
        
        if (window.pageYOffset > sticky) {
            $('header.header').addClass('sticky');

            var logoWidth = $('.header__logoLink.logo__hidden').outerWidth(),
                langWidth = $('.header__langsWrap').innerWidth();

            var larger = langWidth>logoWidth ? langWidth : logoWidth;

            $('.header__nav').css({
                'padding-left': larger,
                'padding-right': larger,
            });

            if ( !$('body.home').length ) {
                $('.site__main').css({
                   'padding-top': $('.header__menus').innerHeight(),
                });
            }

        } else {
            $('header.header').removeClass("sticky");
            $('.header__nav').css({
                'padding-left': '',
                'padding-right': '',
            });

            if ( !$('body.home').length ) {
                $('.site__main').css({
                    'padding-top': '',
                });
            }
        }
    }


});