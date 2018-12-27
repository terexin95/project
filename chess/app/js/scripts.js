
	var schedule__block = document.querySelectorAll('.block__schedule__block__two');
		schedule__block__h4 = document.querySelectorAll('.block__schedule__block__two__h4'),
		schedule__block__span = document.querySelectorAll('.block__schedule__block__two__span'),
		block__price = document.querySelectorAll('.block__price'),
		schedule__block__h5 = document.querySelectorAll('.block__schedule__block__two__h5');



	for (var i = 0; i < schedule__block.length; i++){
		if (schedule__block__h4[i].innerHTML == '') {
			schedule__block__h4[i].innerHTML = 'Нет занятия';
			schedule__block__h4[i].classList.add('grey-text');
			schedule__block__h5[i].classList.add('grey-text-h5');
			schedule__block__span[i].classList.add('hidden');
			block__price[i].style.display = 'none';
			block__price[i].classList.add('hidden');
			schedule__block__h4[i].classList.remove('block__h4__after__1');
		}
		
	};



	for (var i = 0; i < block__price.length; i++) {
		if (block__price[i].innerHTML == '') {
					schedule__block__h4[i].classList.remove('block__h4__after__1');
					schedule__block__h4[i].classList.remove('blue');
					schedule__block__h4[i].classList.remove('green');
					block__price[i].style.display = 'none';

			} else {
				schedule__block__h4[i].classList.add('block__h4__after__1');
			}
		
	}

	// if (block__price[7].innerHTML == ''){
	// 	block__price[7].style.display = 'none';
	// }

	
		


		

