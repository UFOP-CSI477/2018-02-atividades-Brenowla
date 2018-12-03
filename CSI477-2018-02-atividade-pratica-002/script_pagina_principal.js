$(document).ready(function(){

	$("#login").on('submit',function(){
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!filter.test($("#email").val())){
			window.alert("Digite um e-mail válido");
			return false;
		}
		if (!$("#senha").val()) {
			window.alert("Digite uma senha");
			return false;
		}
	})

});