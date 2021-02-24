document.addEventListener('DOMContentLoaded', () => {
    if ($('.result-slider').length) {
        $(document).ready(function () {
            $('.result-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: true,
                nextArrow: '<button class="slick-next-small slick-arrow"></button>',
                prevArrow: '<button class="slick-prev-small slick-arrow"></button>'
            });
        });
    }

    if ($('.packages-wrapper').length) {
        if (window.screen.width < 850) {
            $(document).ready(function () {
            $('.packages-wrapper').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: true,
                nextArrow: '<button class="slick-next-small slick-arrow"></button>',
                prevArrow: '<button class="slick-prev-small slick-arrow"></button>',
            });
        });
        }
    }
});




            