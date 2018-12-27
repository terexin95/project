$(function() {

	var menuTab = $('menu');

	console.log(menuTab);

	var cloneMenu = $('.menu').clone();

	$('.mobile-menu').append(cloneMenu);

	

	$('.mobile-menu > .menu').removeClass();

	$('.mobile-menu > div').addClass('mob-btn-menu');

	$('#toggleButton').click(function(){
		$('.mob-btn-menu').slideToggle(300).toggleClass('activeBtn');
	});

	

});
