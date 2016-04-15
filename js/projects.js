$('#upArr').click(function skroll () {
	 $('html, body').animate({scrollTop: 0},500);
})

$(document).ready(function(){

        var $menu = $("header");

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 1 && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("shadow");
            } else if($(this).scrollTop() <= 1 && $menu.hasClass("shadow")) {
                $menu.removeClass("shadow").addClass("default");
            }
        });//scroll
    });

$('#open-menu').click(function () {
	$('#uncol-menu').slideToggle();
});
$('#close-menu').click(function () {
	$('#uncol-menu').slideToggle();
});
$('#proj-menu').draggable();