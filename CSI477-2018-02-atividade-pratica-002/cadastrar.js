$(document).ready(function(){

	$("#cadastro").on('submit',function(){
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!filter.test($("#c-email").val())){
			window.alert("Digite um e-mail válido!");
			return false;
		}
		if(!$("#c-nome").val()){
			window.alert("Digite um nome válido!");
			return false;
		}
		if (!$("#c-senha").val()) {
			window.alert("Digite uma senha válida!");
			return false;
		}
	})

});