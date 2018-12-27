$(function() {
	var btnShop = document.querySelectorAll('.btn-shop'),
		closeModal = document.querySelector('.close-modal'),
		modal = document.querySelector('.modal');


	function modalUp(){
		for(var i = 0; i < btnShop.length; i++) {
			btnShop[i].addEventListener('click', function(){
				modal.style.display = 'block';
				document.body.style.overflow = 'hidden';
			});
		};
	};

	modalUp();

	closeModal.addEventListener('click', function(){
		modal.style.display = 'none';
		document.body.style.overflow = '';
	});

	$('button-callback').click(function(){
		modal.slideToggle('300');
	})
	

	$(function() {
		 $('.slider').slick({
		 	slidesToScroll: 1,
		 	autoplay: true,
  			autoplaySpeed: 4000,
  			arrows: false,
  			dots: true,
  			fade: true
		 });
		});
	$(function() {
		$('.autoplay').slick({
		  infinite: true,
  		  slidesToShow: 3,
		  slidesToScroll: 1,
		  arrows: true,

		});
	});


	$('.autoplay').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	});
	var menuTab = $('menu');

	var close = document.createElement('button');

	var title = document.createElement('h2');

	title.classList.add('title');

	title.textContent = 'Мастерская Художественной Ковки';

	close.textContent = 'x';

	close.style.outline = '0';

	close.classList.add('close');

	$('.mobile-menu').append(close);
	$('.mobile-menu').append(title);

	$('.close').click(function(){
		$('.mobile-menu').removeClass('fade');
	});

	


	var menuTab = $('menu');

	var cloneMenu = $('.nav-menu').clone();

	$('.mobile-menu').append(cloneMenu);

	

	$('.mobile-menu > .nav-menu > .menu').removeClass();

	$('.mobile-menu > .nav-menu > ul').addClass('mob');

	$('#toggleButton').click(function(){
		$('.mobile-menu').addClass('fade');
	});

	var mnuOne = $('.mnu-one').clone();
	$('.mobile-menu').append(mnuOne);

	var mnuthree = $('.mnu-three').clone();
	$('.mobile-menu').append(mnuthree);

	$('.mobile-menu > .mnu-one').removeClass();
	$('.mobile-menu > .mnu-three').removeClass();

	$('.mobile-menu > ul').addClass('mob');


		
});
