var docReady = setInterval(function() {
	if (document.readyState !== 'complete') {
		return;
	}
	clearInterval(docReady);
	document.getElementByClassName('btn')[0].addEventListener('click' , createNewCategory);
} , 100);

function createNewCategory(event)
{
	event.preventDefault();
	var name = event.target.previousElementSibling.value;
	if(name.length == 0){
		alert('Please Enter a valid Category Name ');
		return;
	}
	ajax('POST' , '/admin/blog/category/create' , 'name=' + name , newCategoryCreated , [name]);
}

function newCategoryCreated(parans , success , responseObj) {
	location.reload();
}

function ajax(method, url , parans , callback , callbackParans ) {
	var http;

	if(window.XMLHttpRequest) {
		http = new XMLHttpRequest();
	} else {
		http = new ActiveXObject('Microsoft.XMLHTTP')
	}

	http.onreadystatechange = function () {
		if(http.readyState == XMLHttpRequest.DONE) {
			if(http.status == 200) {
				var obj = JSON.parse(http.responseText);
				callback(callbackParans , true , obj) ;
			} else if (http.status == 400) {
				alert('Category Could not be saved . Please try again');
				callback(callbackParans , false);
			} else {
				var obj = JSON.parse(http.responseText);
				if(obj.message) {
					alert(obj.message);
				} else {
					alert('Please Check the name ');
				}
			}
		}
	}
	http.open(method , baseUrl + url , true);
	http.setRequestHeader('Content-Type' , 'application/x-www-form-urlencoded');
	http.setRequestHeader('X-Requested-With' , 'XMLHttpRequest');
	http.send(parans + "&_token=" + token);
}