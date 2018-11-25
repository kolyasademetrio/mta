jQuery(document).ready(function($){

    $(window).on('load', function(){
        myFunction();
    });

    $(window).on('scroll', function(){
        myFunction();
    });

     var sticky = $("#header__menus"),
         stickyTop = $("#header__menus").offset().top;

    function myFunction() {

        var scroll = $(window).scrollTop();

        if (scroll >= stickyTop) {
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
            $('header.header').removeClass('sticky');

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