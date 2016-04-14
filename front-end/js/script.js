$(document).ready(function () {

    $('#upArr').click(function scroll() {
        $('html, body').animate({scrollTop: 0}, 1500);
    });

    $('#open-menu, #close-menu').click(function () {
        $('#uncol-menu').slideToggle();
    });

    var mySwiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        spaceBetween: 60,
        loop: true
    });
});