/**************
* marks the selected li element as active
***************/
$(document).ready(function(){
	//menu clicked

	var get_active = localStorage.getItem('menu');
	addActive(get_active);

	$(document).on("click", "#main-active", function(){
		localStorage.setItem('menu','1');
	});

	$(document).on("click", "#top-main-active", function(){
		localStorage.setItem('menu','1');
	});

	$(document).on("click", "#secound-active", function(){
		localStorage.setItem('menu','2');
	}); 	 	

	function addActive(get_active){
		if( get_active == 1 ){
			$('#main-active').addClass('active');
			removeActive(get_active);
		}
		if( get_active == 2 ){
			$('#secound-active').addClass('active');
			removeActive(get_active);
		}
	}

	function removeActive(remove){
		if( remove == 1 ){
			$('#secound-active').removeClass('active');
		}
		if( remove == 2 ){
			$('#main-active').removeClass('active');
		}
	}

});