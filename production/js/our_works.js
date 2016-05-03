/*
	@TODO Сделать отрисовку фильтрующегося массива
	@TODO Переключение пунктов меню
	@TODO Переписать объект в конструктор, а методы в прототип
*/

// Объявление переменных и функций, конструкторов

var request_arr = {
	content: null,
	active_elem_number: 0,
	filter_content: null
};

// Распарсивание объекта полученного с сервера, для использования на фронтенде
function requestParsing(xhr_) {
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
		return _object;
	});
	console.log(request_arr.content);
		
}

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
		  // вернуть распарсенный результат 
		  requestParsing(xhr);
	  }
	
	}
	
}

// Для фильтрации массива по категориям
function filterRequest(magicWord) {
	request_arr.filter_content = request_arr.content.filter(function (item) {
		if (magicWord === 'all') return true;
		
		if (item.category.indexOf(magicWord) > -1) return true;
		else return false;
	});
}

function filterClick(active_elem_number, category_word) {
	if (active_elem_number == request_arr.active_elem_number ) return 
	
	filterRequest(category_word);
	console.log(request_arr.filter_content);
	
}

req('http://xn--e1aybc.kz/mind/?json=get_category_posts&slug=video&post_type=video&count=-1');