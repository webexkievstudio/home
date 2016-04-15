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

    $('#menu').on('click', "a[href^='#']", function (e) {
        e.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 500),
            function () {
                window.location.hash = hash;
            };
    });
    
    $('#upArr').click(function scroll() {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });


    $('#open-menu, #close-menu, #uncol-menu li').on('click', function () {
        $('#uncol-menu').toggle();
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

    $('#phoneUsClientPhone, #writeUsClientPhone').mask("+00 (000) 000-00-00");

    $('#phoneUs').on('submit', function () {
        var formData = new FormData($('#phoneUs')[0]);
        var $this = $(this);
        sendForm($this, formData);
        return false;
    });

    $('#writeUs').on('submit', function () {
        var formData = new FormData($('#writeUs')[0]);
        var $this = $(this);
        sendForm($this, formData);
        return false;
    });
});
