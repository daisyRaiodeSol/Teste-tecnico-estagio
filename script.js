function validarFormulario(){
	var nome = document.getElementById("nome").value;
	var email = document.getElementById("email").value;
	var senha = document.getElementById("senha").value;
	
	if(nome == "" || email == "" || senha == ""){
		alert("Erro: Por favor, preencha todos os campos.");
		return false;
	}
	else{
		//alert("Formulario enviado com sucesso!");
		return true;
	}
}