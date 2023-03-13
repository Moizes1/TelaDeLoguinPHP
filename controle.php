<?php 

	// Variavel que verifica se a autenticação foi realizada
	$usuario_autenticado = false;
	
	// Criação de usuario e senha de forma estatica
	// Pra testar o script use o email e senha abaixo 
	$usuario = array(
		array('email' => 'user@teste.com.br', 'senha' => '12345')
	);

	foreach ($usuario as $user) {
		
		// Verificação da autenticação de usuario e senha
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
		}
	}

	// Direcionamento baseado na autenticação do usuario e senha
	if ($usuario_autenticado) {
		header('Location: login.php');
	} else {
		header('Location: index.php?login=error');
	}

 ?>
