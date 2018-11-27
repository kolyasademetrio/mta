jQuery(document).ready(function($) {

    function slickPartnersInit($that){
        $that.on('init', function(event, slick){

            var slickListWidth = $(this).find('.slick-list').width(),
                slickTrackWidth = $(this).find('.slick-track').width();

            /*if ( slickTrackWidth < slickListWidth ) {
                $(this).css({
                    'margin-left': 'auto',
                    'margin-right': 'auto',
                    'display': 'table',
                });
            }*/
        });

        var slidesToShow = 7,
            windowWidth = $(window).width(),
            slidesQty = $that.find('.partner__item').length;
        
        console.log( slidesQty );

        if ( windowWidth < 1200 && windowWidth > 767 ) {
            slidesToShow = 5;
        } else if ( windowWidth <= 767 && windowWidth >= 320 ) {
            slidesToShow = 3;
        }

        $that.slick({
            infinite: true,
            slidesToShow: slidesToShow,
            slidesToScroll: 1,
            dots: false,
            variableWidth: false,
            arrows: false,
            autoplay: false,
            centerMode: true,
            centerPadding: '0px',
        });
    }

    slickPartnersInit( $('.partners__list') );
});

