$(document).ready(function () {

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
        $('#uncol-menu').slideToggle(0);
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

    $('#phoneUsClientPhone').mask("+00 (000) 000-00-00");
    $('#writeUsClientPhone').mask("+00 (000) 000-00-00");


    $('#sendFormPhoneUs').on('click', function () {
        var formData = new FormData($('#phoneUs')[0]);
        var $this = $(this);
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            url: '',
            data: formData,
            success: function () {
                $this.remove();
                $('#phoneUsControl').append("<div class=\"form-group success\">");
                $('#phoneUsControl > .success').append("<p>Мы перезвоним вам в ближайшее время</p>");
                $('#phoneUsControl').append("</div>");
            },
            error: function () {
                $this.remove();
                $('#phoneUsControl').append("<div class=\"form-group error\">");
                $('#phoneUsControl > .error').append("<p>Что-то пошло не так... Попробуйте еще раз</p>");
                $('#phoneUsControl').append("</div>");

            }
        });
    });
    $('#sendFormWriteUs').on('click', function () {
        var formData = new FormData($('#writeUs')[0]);
        var $this = $(this);
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            url: '',
            data: formData,
            success: function () {
                $this.remove();
                $('#writeUsControl').append("<div class=\"form-group success\">");
                $('#writeUsControl > .success').append("<p>Письмо успешно отправлено</p>");
                $('#writeUsControl').append("</div>");
            },
            error: function () {
                $this.remove();
                $('#writeUsControl').append("<div class=\"form-group error\">");
                $('#writeUsControl > .error').append("<p>Что-то пошло не так... Попробуйте заполнить поля еще раз</p>");
                $('#writeUsControl').append("</div>");

            }
        });
    });
});
