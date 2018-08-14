$(function() {

	$('#button').click(function () {
			yaCounter39784930.reachGoal('button ');
      console.log('цель 1');
		});

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "https://xn-----6kcblpac0axipliegtchlfqdd5nsdycc.xn--90ais/wp-content/themes/Cave/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#form").trigger("reset");
		});
		return false;
	});

	
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
