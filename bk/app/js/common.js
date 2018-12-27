$(function() {

	var blockNews = document.querySelectorAll('#blockNews')[0],
		blockNewsTwo = document.querySelectorAll('#blockNews')[1],
		newsOne = document.querySelectorAll('.pattern')[0],
		newsTwo = document.querySelectorAll('.pattern')[1],
		newsThree = document.querySelectorAll('.pattern')[2],
		newsFour = document.querySelectorAll('.pattern')[3],
		newsFive = document.querySelectorAll('.pattern')[4],
		newsSix = document.querySelectorAll('.pattern')[5],
		row_2 = document.createElement('div'),
		col8_2 = document.createElement('div'),
		col4_2 = document.createElement('div'),
		row = document.createElement('div'),
		col8 = document.createElement('div'),
		col4 = document.createElement('div');

	row.classList.add('row');
	col8.classList.add('col-lg-8');
	col8.classList.add('p0');
	col4.classList.add('col-lg-4');
	col4.classList.add('p0');
	blockNews.appendChild(row);
	row.appendChild(col8);
	row.appendChild(col4);
	col8.appendChild(newsOne);
	col4.appendChild(newsTwo);
	col4.appendChild(newsThree);

	row_2.classList.add('row');
	col8_2.classList.add('col-lg-8');
	col8_2.classList.add('p0');
	col4_2.classList.add('col-lg-4');
	col4_2.classList.add('p0');
	blockNewsTwo.appendChild(row_2);
	row_2.appendChild(col8_2);
	row_2.appendChild(col4_2);
	col8_2.appendChild(newsFour);
	col4_2.appendChild(newsFive);
	col4_2.appendChild(newsSix);
	
		console.log(row_2);	
		console.log(newsOne);	


	var menuTab = $('menu');

	var close = document.createElement('div');

	close.textContent = 'x';

	close.classList.add('close');

	$('.mobile-menu').append(close);

	var cloneMenu = $('.menu').clone();

	$('.mobile-menu').append(cloneMenu);

	$('.mobile-menu > .menu').removeClass();

	$('.mobile-menu > div').addClass('mob-btn-menu');

	$('#toggleButton').click(function(){
		$('.mob-btn-menu').slideToggle(300).toggleClass('activeBtn');
	});

	

});
