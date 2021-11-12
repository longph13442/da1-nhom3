$(document).ready(function () {
    $('.image-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: `<button type='button' class='slick-prev slick-arrow pull-left'><ion-icon name="arrow-back-outline"></ion-icon></button>`,
        nextArrow: `<button type='button' class='slick-next slick-arrow pull-right'><ion-icon name="arrow-forward-outline"></ion-icon></button>`,
        autoplay: true,
        autoplaySpeed: 1000,
        dots: true,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,

                }
            },
            {
                breakpoint: 780,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});