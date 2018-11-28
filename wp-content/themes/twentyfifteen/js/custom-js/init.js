jQuery(document).ready(function($) {

    // header__humburger
    $('.header__humburger').magnificPopup({
        type:'inline',
        removalDelay: 500,
        mainClass: 'mfp-fade popup_inline',
        showCloseBtn: true,
        closeMarkup: '<div class="mfp-close">&times;</div>',
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: true,
        alignTop: false,
        fixedContentPos: true,
        callbacks: {
            open: function() {
            },
            close: function() {

            },
            beforeOpen: function() {
                var $triggerEl = $(this.st.el),
                    newClass = 'meinMenu__popup';
                this.st.mainClass = this.st.mainClass + ' ' + newClass;
            }
        }
    });

    $(document).on('click', '.meinMenu__popup .menu-item>a', function(){
        setTimeout(function(){
            $.magnificPopup.close();
        }, 1000);

    });

    (function(){
        var slidesToShow = 7,
            windowWidth = $(window).width();

        if ( windowWidth < 1200 && windowWidth > 767 ) {
            slidesToShow = 5;
        } else if ( windowWidth <= 767 && windowWidth >= 320 ) {
            slidesToShow = 3;
        }

        $('.partners__list').owlCarousel({
            center: true,
            loop: true,
            items: slidesToShow,
            autoplay: true,
            autoplayTimeout:3000
        });
    })();


    new WOW().init();

});

