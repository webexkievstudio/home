 //making square
function make_sqrt () {
	// making photo
		var photo = document.getElementById('oleg');
		var computedStylePhoto = getComputedStyle(photo);
		var newHight = parseInt(computedStylePhoto.width)*1.3333;
		var photoArr = document.getElementsByClassName('photo');
		for(var i = 0 ; i<photoArr.length; i++){
			photoArr[i].style.height = newHight+"px";
		}
};

$(document).ready = make_sqrt();
$(document).ready(function(){

 $('.carousel').carousel();
// skroll top
$('#upArr').click(function skroll () {
	 $('html, body').animate({scrollTop: 0},1500);
})

$('#open-menu').click(function () {
	$('#uncol-menu').slideToggle();
});
$('#close-menu').click(function () {
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