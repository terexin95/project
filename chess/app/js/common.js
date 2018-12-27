$(function() {
		$("a.scrollto").click(function() {
	    var elementClick = $(this).attr("href")
	    var destination = $(elementClick).offset().top;
	    jQuery("html:not(:animated),body:not(:animated)").animate({
	      scrollTop: destination
	    }, 800);
	    return false;
	  });

	$(function() {
		$('.multiple-items').slick({
			slidesToShow: 2,
			prevArrow: '<button type="button" class="slick-prev"><img src="../img/left.png"></button>',
			nextArrow: '<button type="button" class="slick-next"><img src="../img/right.png"></button>',
			dots: true
		});
	});

	$(function() {
		$('.multiple-items-2').slick({
			slidesToShow: 3,
			slidesToScroll: 3,
			prevArrow: '<button type="button" class="slick-prev"><img src="../img/left.png"></button>',
			nextArrow: '<button type="button" class="slick-next"><img src="../img/right.png"></button>',
			dots: true
		});
	});

	var slickPrevOtz = document.getElementsByClassName('slick-prev');
		slickPrevOtz.innerHTML = '123';
		console.log(slickPrevOtz);

	

	function tabSlide() {
		var rowTabs = document.createElement('div'),
			tabSlideClass = document.querySelector('.tab_slide'),
			tabSlideRow = tabSlideClass.querySelector('.row'),
			caruselItem = document.querySelectorAll('.carousel-item');
			rowTabs.classList.add('row');
			tabSlideRow.appendChild(rowTabs);
			console.log(tabSlideRow);

			
		// for (var i = 0; i < .)
		$('.carousel-item').clone().appendTo(rowTabs);
		var caruselItemRow = rowTabs.querySelectorAll('.carousel-item');
				caruselItemRow[0].classList.remove('active');
			for (var i = 0; i < caruselItemRow.length; i++) {
				caruselItemRow[i].classList.remove('carousel-item');
				caruselItemRow[i].classList.add('col-lg-3');
				caruselItemRow[i].classList.add('teacher');
				

			}
			console.log(caruselItemRow);
			console.log(rowTabs)
		$('.teacher > .row').removeClass().addClass('block__slide');
		$('.teacher > .block__slide > .col-md-8 > p').remove();
		$('.teacher > .block__slide > .col-md-2').removeClass();
		$('.teacher > .block__slide > .col-md-6').removeClass();
		$('.teacher > .row').removeClass();
		$('.tab_slide > .container > .row').removeClass();
		var blockSlide = document.querySelectorAll('.block__slide');
		console.log(blockSlide[1])
			function sas() {
				for(var i = 0; i < blockSlide.length; i++) {
					if (caruselItem[i].classList.contains('active')) {
					blockSlide[i].classList.add('active-sl');
	
					} else {
						
						blockSlide[i].classList.remove('active-sl');
					}
				}
				
			}

			setInterval(function() {
				sas();

			}, 10);
			sas();

	}

	tabSlide();
	// var mql = window.matchMedia('all and (max-width: 992px)');
	// 	if (mql.matches < 992) {
	// 		var imgBlock = document.querySelectorAll('.block-img');
	// 		for (var i = 0; i < imgBlock.length; i+=2 ){
	// 			var imgBlock = document.querySelectorAll('.block-img')[i];
	// 			var rowReverse = imgBlock.querySelector('.row');	
	// 		}
			
	// 		for (var i = 0; i < imgBlock.length; i++) {
	// 			var imgBlock = document.querySelectorAll('.block-img')[i];
	// 				imgBlock.style.flexDirection = '';
	// 		}
			
			

	// 		rowReverse.style.flexDirection = 'row-reverse';
			
	// 	}

	$('.block-img > .row:eq(3)').css({'flex-direction' : 'row-reverse'});
	$('.block-img > .row:eq(2)').css({'flex-direction' : 'row-reverse'});

	$('.nav').clone().appendTo('.mob-menu');
	var menuClass = document.querySelectorAll('.menu')[1],
		m_menu = document.querySelectorAll('.m-menu')[1],
		nav = document.querySelectorAll('.nav')[1],
		m_menu_ul = document.querySelectorAll('.m-menu-ul')[1];
		menuClass.classList.remove('menu');
		menuClass.classList.add('menu-mob');
		m_menu.classList.remove('m-menu');
		m_menu.classList.add('m-menu-mob');
		m_menu_ul.classList.remove('m-menu-ul');
		m_menu_ul.classList.add('m-menu-ul-mob');
		nav.classList.remove('nav');
	console.log(menuClass);

	$('.m-menu-mob').click(function(){
		$('.m-menu-ul-mob').slideToggle();
	});

	$('.close').click(function(){
		$('.mob-menu').removeClass('ml');
	})

	$('.bars').click(function(){
		$('.mob-menu').addClass('ml');
	})

});
