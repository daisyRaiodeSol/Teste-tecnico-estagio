<?php

	$nome = $_POST["nome"] ?? "";
	$email = $_POST["email"] ?? "";
	$senha = $_POST["senha"] ?? "";

	
	
	if($nome == "" || $email == "" || $senha == "") {
		echo "Erro: Por favor, preencha todos os campos.";
	} else {
		echo "Formulario enviado com sucesso!<br><br>";
		echo "Nome: " . $nome. "<br>";
		echo "E-mail: " . $email. "<br>";
		echo "Senha: " . $senha;
	}
?>