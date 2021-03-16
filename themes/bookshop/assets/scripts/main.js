$(document).ready(function () {
    $('#toggleMenu').click(function(){
        $('.ss-menu').toggleClass('active');
        $('body').toggleClass('active');
        $('.bg-black').toggleClass('active');
        $(this).toggleClass('active');
    });

    var swiperBanner = new Swiper('.swiper-banner', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        speed: 700,
        autoplay: {
            delay: 3000,
        },
        loop: true,
    });
    var swiperBlog = new Swiper('.swiper-blog', {
        slidesPerView: 2,
        spaceBetween: 30,
        autoplay: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loop: true,
        breakpoints: {
            576: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
        }
    });
});