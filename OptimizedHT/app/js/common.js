$(function() {

	var mobMenu = document.createElement('div'),
		menu = document.querySelector('.menu'),
		iconsMob = document.createElement('i');
		iconsMob.classList.add('fas');
		iconsMob.innerHTML = ' Меню';
		iconsMob.classList.add('fa-bars');
		mobMenu.classList.add('mob-menu');
		mobMenu.classList.add('show-md');
		mobMenu.appendChild(iconsMob);
		menu.appendChild(mobMenu);

		$('.menu > ul').clone().appendTo('.mob-menu-container').removeClass('hidden-md').addClass('mob-menu-list');
		
		$('.mob-menu-container > .close').click(function(){
			$('.mob-menu-container').slideUp(600);
		})
		$('.mob-menu').click(function(){
			$('.mob-menu-container').slideToggle(600);
		});


	console.log(mobMenu)

});
