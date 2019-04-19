jQuery(document).ready(function () {

    /*
    jQuery('.slide-testimonio').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    */
});



jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() < 5) {
            jQuery('.Logo-two').removeClass('remove');
            jQuery('.dinamic').removeClass('add');
            jQuery('.button-movil-container').removeClass('add-mov');
            jQuery('.Logo-one').removeClass('size');
            jQuery('.Logo-two').removeClass('size');
            jQuery('header').removeClass('header-size');


        } else {
            jQuery('header').addClass('header-size');
            jQuery('.Logo-one').addClass('size');
            jQuery('.Logo-two').addClass('size');
            jQuery('.Logo-two').addClass('remove');
            jQuery('.dinamic').addClass('add');
            jQuery('.button-movil-container').addClass('add-mov');
        }
    });
    //When click in btn "ver programas" animate to down
    jQuery(".header-button,.movil-button").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery("#form").offset().top - 90
        }, 500);
    });
});