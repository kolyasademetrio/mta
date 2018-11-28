jQuery(document).ready(function($){

    /* ------------------------>>> setStickyHeader <<<------------------------------------------------- */
    (function(){
        var sticky = $("#header__menus"),
            stickyTop = $("#header__menus").offset().top,
            headerHeight = $('header.header').innerHeight(),
            headerMenusHeight = $('.header__menus').innerHeight();

        function setStickyHeader() {
            var scroll = $(window).scrollTop(),
                $site__main = $('.site__main'),
                $header = $('header.header'),
                $header__nav = $('.header__nav');

            if (scroll >= stickyTop) {
                $header.addClass('sticky');

                var logoWidth = $('.header__logoLink.logo__hidden').outerWidth(),
                    langWidth = $('.header__langsWrap').innerWidth(),
                    larger = langWidth>logoWidth ? langWidth : logoWidth;

                $header__nav.css({
                    'padding-left': larger,
                    'padding-right': larger,
                });

                if ( !$('body.home').length ) {
                    $site__main.css({
                        'padding-top': $('.header__menus').innerHeight(),
                    });
                }
            } else {
                $header.removeClass('sticky');

                $header__nav.css({
                    'padding-left': '',
                    'padding-right': '',
                });

                if ( !$('body.home').length ) {
                    $site__main.css({
                        'padding-top': '',
                    });
                }
            }
        }

        function setStickyheaderMobile(){
            if ( $('body').hasClass('homePage') ) {
                var scroll = $(window).scrollTop(),
                    $site__main = $('.site__main'),
                    $header = $('header.header');

                if (scroll >= 10) {
                    $header.css({
                        'padding-top': headerMenusHeight,
                    });

                    $header.addClass('sticky__mobile');
                } else {
                    $header.removeClass('sticky__mobile');

                    $header.css({
                        'padding-top': '',
                    });
                }
            }
        }

        $(window).on('load', function(){
            if ( $(window).width() >= 768 ) {
                if ( !$('body.error404').length ) {
                    setStickyHeader();
                }
            } else {
                setStickyheaderMobile();
            }
        });

        $(window).on('scroll', function(){
            if ( $(window).width() >= 768 ) {
                if ( !$('body.error404').length ) {
                    setStickyHeader();
                }
            } else {
                setStickyheaderMobile();
            }
        });
    })();
    /* ------------------------>>> setStickyHeader End <<<--------------------------------------------- */


    /* ------------------------>>> Якоря меню <<<------------------------------------------------------ */
    function ancor ($ancor) {
        $ancor.on('click', function(e){
            
            console.log( $(this) );
            
            var thisHREF = $(this).attr('href');
            if ( thisHREF.startsWith('#') ) {
                var $goal = $(thisHREF),
                    headerHeight = $('.header__menus').innerHeight();

                if ( $goal.length ) {
                    $('html,body').stop().animate({scrollTop: $goal.offset().top - headerHeight}, 1000);
                    e.preventDefault();
                } else {
                    var homeURL = window.location.protocol + "//" + window.location.host + "/",
                        redirectURL = homeURL + thisHREF;

                    window.location.href = redirectURL;
                }
            }
        });
    }
    ancor( $('li.menu-item>a') );
    /* ------------------------>>> Якоря меню End <<<-------------------------------------------------- */


    /* ------------------------>>> Анимация скролла при переходе на якорь с Внутренней страницы <<<----- */
    function animationScrollWithHash(){
        if (window.location.hash != '') {
            var hash = window.location.hash;
            $('html,body').stop().animate({scrollTop: $(hash).offset().top - $('.header__menus').innerHeight()}, 1000);
        }
    }
    animationScrollWithHash();
    /* ------------------------>>> Анимация скролла при переходе на якорь с Внутренней страницы End <<<- */


    /* ------------------------>>> about__readMore <<<------------------------------------------------- */
    (function(){
        if ( $('.about__readMore').length ) {
            $(document).on('click', '.about__readMore', function(){
                
                console.log( $(this).attr('opentext') );
                console.log( $(this).attr('closetext') );

                if ( $(this).closest('.section__content').hasClass('open') ) {
                    $(this).closest('.section__content').children('p:nth-child(n+4)').slideUp();
                    $(this).closest('.section__content').removeClass('open');
                    $(this).html($(this).attr('opentext'));
                } else {
                    $(this).closest('.section__content').children('p:nth-child(n+4)').slideDown();
                    $(this).closest('.section__content').addClass('open');
                    $(this).html($(this).attr('closetext'));
                }
            });
        }
    })();
    /* ------------------------>>> about__readMore End <<<---------------------------------------------- */


    /* ------------------------>>> Прижать футер к низу <<<------------------------------------------------- */
    (function(){
        $(window).load(function(){
            footer();
        });

        $(window).resize(function() {
            footer();
        });

        function footer() {
            var docHeight = $(window).height(),
                footerHeight = $('footer.footer').outerHeight(),
                footerBottom = $('footer.footer').position().top + footerHeight;

            if (footerBottom < docHeight) {
                $('footer.footer').css('margin-top', (docHeight - footerBottom) + 'px');
            }
        }
    })();
    /* ------------------------>>> Прижать футер к низу End <<<--------------------------------------------- */


    /* ------------------------>>> Animations <<<----------------------------------------------------- */
    $('.header__logoLink').addClass('animated zoomIn');

    if ( !$('.header__humburger').is(':visible') ) {
        $('.header__menu>li:first-child').addClass('wow slideInLeft');
        $('.header__menu>li:nth-child(2)').addClass('wow slideInLeft');
        $('.header__menu>li:nth-child(3)').addClass('wow slideInRight');
        $('.header__menu>li:nth-child(4)').addClass('wow slideInRight');
    }


    $('.section__titleWrap.left_line').addClass('wow slideInLeft');
    $('.section__titleWrap.right_line').addClass('wow slideInRight');

    /* ------------------------>>> Animations End <<<------------------------------------------------- */

});