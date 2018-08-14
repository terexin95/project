$(function() {

	
	$(".navbar a, .top, .linea-item-right a").mPageScroll2id();
    

	$(document).ready(function(){
		  $(function(){
		 $('.autoplay').slick({
		 	slidesToShow: 3,
		  	slidesToScroll: 1,
		  	autoplay: true,
		  	autoplaySpeed: 1500,
		  	dots: false,
		  	prevArrow: '<button class="arrow-btn"><i class="left-arrow-btn fas fa-angle-left"></i></button>',
		  	nextArrow: '<button class="arrow-btn fl-r" ><i class="right-arrow-btn fas fa-angle-right"></i></button>'
		 });
		});
});


});
