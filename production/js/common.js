$(document).ready(function() {
	
	$(".fancybox").fancybox({
		maxWidth	: 700,
		maxHeight	: 500,		
		openEffect	: 'none',
		closeEffect	: 'none'
	});	
	
	// Открытие формы
	document.querySelector('#modal').onclick = function() {
		document.querySelector('#form').setAttribute('class', 'active_form');
	};
	document.querySelector('.close__form').onmouseenter = function() {
		document.querySelector('#form').setAttribute('style', '-webkit-filter:opacity(0.5)');
	};
	document.querySelector('.close__form').onmouseleave= function() {
		document.querySelector('#form').removeAttribute('style');
	}
	document.querySelector('.close__form').onclick = function() {
		document.querySelector('#form').setAttribute('class', 'not_active_form');
	}
	document.querySelector('.close__form').removeAttribute('style');
	//Цели для Яндекс.Метрики и Google Analytics
	// $(".count_element").on("click", (function() {
	// 	ga("send", "event", "goal", "goal");
	// 	yaCounterXXXXXXXX.reachGoal("goal");
	// 	return true;
	// }));

	//$('#app').on('click',function() {
    //
	//});
	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$("#application").submit(function() {
		var data = {
			name : document.querySelector('#application input[name="name"]').value,
			email : document.querySelector('#application input[name="email"]').value,
			telephone : document.querySelector('#application input[name="telephone"]').value,
		}
		$.ajax({
			type: "POST",
			url: "http://mindpro-video.kz/wp-content/themes/mindpro_video_theme/mail.php",
			data: data,
		}).done(function( value ) {
			$('#mail')[0].innerHTML = value;
			$('#mail').removeClass('not_visible_mail');
			
			setTimeout(function() {
				$("#form").trigger("reset");
			}, 1000);
			
			setTimeout(function () {
				$('#mail')[0].innerHTML = ' ';
				$('#mail').addClass('not_visible_mail');
			}, 3000);
			
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});
