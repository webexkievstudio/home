// scroll top
$('#upArr').click(function scroll() {
    $('html, body').animate({scrollTop: 0}, 1500);
});

$('#open-menu').click(function () {
    $('#uncol-menu').slideToggle();
});
$('#close-menu').click(function () {
    $('#uncol-menu').slideToggle();
});