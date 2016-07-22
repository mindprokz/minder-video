/*
	@DONE Сделать отрисовку фильтрующегося массива
	@DONE Переключение пунктов меню
	@TODO Переписать объект в конструктор, а методы в прототип
	@DONE Добавить анимацию к отрисовке массива
	@TODO Переписать masonry на нативный js вместо jquery
*/

// Объявление переменных и функций, конструкторов

var request_arr = {
	content: null, // Когда данные приходят, это свойство становиться массивом объектов
	active_elem_number: null,
	filter_content: null,
	masonry: null
};

// XmlHttpReq обернутый в функцию
function req(query){
	
	// 1. Создаём новый объект XMLHttpRequest
	var xhr = new XMLHttpRequest();
	
	// 2. Конфигурируем его: GET-запрос на URL
	xhr.open('GET', query, true);
	
	// 3. Отсылаем запрос
	xhr.send();

	xhr.onreadystatechange = function() { // (3)
	  if (xhr.readyState != 4) return;

	  if (xhr.status != 200) {
		  // обработать ошибку
		  alert( xhr.status + ': ' + xhr.statusText ); // пример вывода: 404: Not Found
	  } else {
		  // распарсить результат 
		  requestParsing(xhr, callbackForParsing);
	  }
	
	}
	
}


// Распарсивание объекта полученного с сервера, для использования на фронтенде
// callback нужен для вызова события, когда уже весь объект будет распарсен
// что бы узнать есть ли якорь
function requestParsing(xhr_, callback) {
	var _arr = [];
	_arr = JSON.parse(xhr_.responseText).posts;
	
	request_arr.content = _arr.map(function (item) {
		var _object = {};
			  
		_object.header = item.custom_fields['wpcf-header'][0];
		_object.subheader = item.custom_fields['wpcf-subheader'][0];
		_object.url = item.custom_fields['wpcf-url'][0];
		_object.size = item.custom_fields['wpcf-size_thumb'][0];
		_object.content = item.custom_fields.hasOwnProperty('wpcf-content') ? item.custom_fields['wpcf-content'][0] : '';  
		_object.category = item.categories.map(function (item) { return item.slug }).join(', ');
		_object.thumbnail = item.thumbnail_images.full.url;
		return _object;
	});
		
	callback();	
}


// callback для проверки якоря
function callbackForParsing () {
	switch (location.hash) {
		
		case '#all':
			filterClick(0, 'all');
		break;
		
	  case '#short':
	  	filterClick(1, 'short');	
	  break;
	  
	  case '#long':
	  	filterClick(2, 'long');
	  break;
	  
	  case '#insta':
	  	filterClick(3, 'insta');
	  break;	
	  
	  case '#smm':
	  	filterClick(4, 'smm');
	  break;
	    
	  case '#sale':
	  	filterClick(5, 'sale');
	  break;	
	  
	  default:
			filterClick(0, 'all');
	  break;		
	}
}

// Для фильтрации массива по категориям
function filterRequest(magicWord) {
	request_arr.filter_content = request_arr.content.filter(function (item) {
		if (magicWord === 'all'){
			return true;
		}	
		
		if (item.category.indexOf(magicWord) > -1){
			return true;
		}	else {
			return false;
		}
			
	});
}

// Событие клика на фильтр, используется в атрибуте onclick
function filterClick(active_elem_number, category_word) {
	if (active_elem_number === request_arr.active_elem_number ) return 

	// Перерисовка masonry сетки
	if (!request_arr.masonry) {
		request_arr.masonry = $('.works_blocks .content').masonry({
	    itemSelector : '.masonry'
	  });
  }
	
	filterRequest(category_word);
	drawDomElem();
	changeActiveElem(active_elem_number);
  
	request_arr.active_elem_number = active_elem_number;
}

// Смена активного элемента в разметке
function changeActiveElem(item) {
	try {
		document.querySelector('.filter.active').classList.remove('active');
	} catch (err) {}	
	document.querySelectorAll('.filter')[item].classList.add('active');
}

// Отрисовка отфильтрованных элементов
function drawDomElem() {
	// Удаление всех элементов сетки на странице
			
	request_arr.masonry
		.masonry('remove', document.querySelectorAll('.works_blocks .content .masonry') )
		.masonry('layout');		
	
	// Добавление нужных элементов сетки на страницу
	request_arr.filter_content.forEach(function (itemWithInfo) {
		createGridElem(itemWithInfo)
	});  

	// обновление masonry layout
	request_arr.masonry.masonry('layout');	
}

// Создание элемента для отрисовки
function createGridElem(item) {
// 	Создание ссылки обертки
	var wrapHref = document.createElement('a');
	wrapHref.setAttribute('href', item.url);
	wrapHref.classList.add('item_grid');
	wrapHref.classList.add('fancybox');
	wrapHref.classList.add('fancybox.iframe');
	wrapHref.classList.add(item.size === 'big' ? 'col-sm-6' : 'col-sm-3');
	wrapHref.classList.add('masonry');
	
//  Создание родительского блока с информацией
	var parentElemForInfo = document.createElement('div');
	parentElemForInfo.classList.add('work_block'); 	
	parentElemForInfo.classList.add(item.size === 'big' ? 'big' : 'small');
	wrapHref.appendChild(parentElemForInfo);
	
// 	Загрузка фоновой картинки для записи
	var thumbnail = new Image();
	thumbnail.src = item.thumbnail;
	parentElemForInfo.appendChild(thumbnail);
	thumbnail.onload = function () {
		// добавлять анимацию элементу сетки
	}
	
// создание кнопки play
	var play_btn = new Image();
	play_btn.src = 'http://mindpro-video.kz/wp-content/themes/mindpro_video_theme/img/play_button.png';
	play_btn.classList.add('play');
	parentElemForInfo.appendChild(play_btn);

// создание блока обортки для текстовой информации
	var parentTextInfo = document.createElement('div');
	parentTextInfo.classList.add('hover_eff');	
	parentElemForInfo.appendChild(parentTextInfo);
	
// Создание заголовка 
	var header = document.createElement('h3');
	header.textContent = item.header;
	parentTextInfo.appendChild(header);
	
// 	Создание заголовка второго уровня
	var subHeader = document.createElement('h5');
	subHeader.textContent = item.subheader;
	parentTextInfo.appendChild(subHeader);

// Создание белой линии под заголовками
	var white_line = document.createElement('div');
	white_line.classList.add('white_line');
	parentTextInfo.appendChild(white_line);

// Создание текстового контента
	var content = document.createElement('p');
	content.textContent = item.content;
	parentTextInfo.appendChild(content);
	
	request_arr.masonry.prepend( wrapHref ).masonry('addItems', wrapHref );
}

req('http://mindpro-video.kz/?json=get_category_posts&slug=video&post_type=video&count=-1');


