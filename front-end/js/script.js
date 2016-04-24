$(document).ready(function () {

    function sendForm($this, formData) {
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            url: '',
            data: formData,
            success: function () {
                $this.hide();
                $this.after('<div class="form-group success"><p>Письмо успешно отправлено</p></div>');
            },
            error: function () {
                $this.hide();
                $this.after('<div class="form-group error"><p>Что-то пошло не так... Попробуйте заполнить поля еще раз</p></div>');
            }
        });
    }

    $("#menu").on('click', "a[href^='#']", function (e) {
        e.preventDefault();
        var hash = this.hash;
        $("html, body").animate({
                scrollTop: $(hash).offset().top
            }, 500,
            function () {
                window.location.hash = hash;
            });
    });

    $("#upArr").click(function scroll() {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
    });


    $("#open-menu, #close-menu, #uncol-menu li").on('click', function () {
        $('#uncol-menu').toggle();
    });

    new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
    });
    new Swiper('.services-page .swiper-container', {
         pagination: '.swiper-pagination',
        slidesPerView: 'auto',
                 centeredSlides: true,
        paginationClickable: true,
        spaceBetween: -30,
          grabCursor: true
    });

    $("#phoneUsClientPhone, #writeUsClientPhone").mask("+00 (000) 000-00-00");

    $("#phoneUs, #writeUs").on('submit', function () {
        var $this = $(this);
        var formData = new FormData($this);
        sendForm($this, formData);
        return false;
    });
});
