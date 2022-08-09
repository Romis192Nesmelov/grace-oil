function getCookie(name) {
	var cookie = " " + document.cookie;
	var search = " " + name + "=";
	var setStr = null;
	var offset = 0;
	var end = 0;
	if (cookie.length > 0) {
		offset = cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = cookie.indexOf(";", offset)
			if (end == -1) {
				end = cookie.length;
			}
			setStr = unescape(cookie.substring(offset, end));
		}
	}
	return(setStr);
}

function setCookie (name, value, expires, path, domain, secure) {
	if(expires){
		var date = new Date();
   		date.setTime(date.getTime()+(expires*1000));
   		expires = "; expires="+date.toGMTString();
	}
      document.cookie = name + "=" + escape(value) +
        ((expires) ? "; expires=" + expires : "") +
        ((path) ? "; path=" + path : "") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
}

if(!getCookie('googtrans'))
    setCookie('googtrans', '/ru/en');
    
    
var waitAPI = setInterval(function(){
    
    if(typeof google != 'undefined' && typeof google.translate != 'undefined' && typeof  google.translate.TranslateElement == 'function'){
        clearInterval(waitAPI);
        
        setTimeout(function(){
            // Инициализируем виджет с языком по умолчанию
            new google.translate.TranslateElement({
                pageLanguage: 'ru',
            });
        }, 200);
    }
    
}, 300);
