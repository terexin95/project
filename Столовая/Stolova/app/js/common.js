$(function() {

	var date = new Date,
		clock = document.querySelector('.clock_hours'),
		clock_min = document.querySelector('.clock_min'),
		clock_text = document.querySelector('.clock-text'),
		clock_s = document.querySelector('.clock_s');

		up = setInterval(up, 1000);

		function up(){
			var d = new Date,
				s = d.getSeconds(),
				h = d.getHours(),
				m = d.getMinutes();
			
			clock.innerHTML = h;
			clock_min.innerHTML = m;
			clock_s.innerHTML = s;

			if(m < 10) {
				clock_min.innerHTML = '0' + m;
			}

			if (h >= 20 && h < 24) {
				clock_text.innerHTML = 'Поздний ужин';
				} else if(h >= 6 && h < 11) {
					clock_text.innerHTML = 'Завтрак';
				} else if (h >= 12 && h < 14){
					clock_text.innerHTML = 'Обед';
				} else if (h >= 15 && h < 17){
					clock_text.innerHTML = 'Полдник';
				} else if (h >= 18 && h < 20){
					clock_text.innerHTML = 'Ужин';
				} else if (h >= 0 && h < 5) {
					clock_text.innerHTML = 'Время спать';
				}
				
		};
			

		
});
