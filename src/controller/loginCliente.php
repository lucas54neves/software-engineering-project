<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/ClienteDAO.php';
	
	//inicia sessões
	session_start();

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
	
	$conexao = new Connection();
    $conexao = $conexao->getConnection();
	
	$clienteDAO = new ClienteDAO();
	$resultado = $clienteDAO->consultar($cpf , $conexao);
	
	$linha = $resultado->fetch_assoc();

	if($cpf == $linha['cpf'] and $senha == $linha['senha']){
		$_SESSION['cpfcliente'] = $linha['cpf'];
		$_SESSION['nomecliente'] = $linha['nome'];
		header('Location: ../view/AreaCliente.php');
		exit;
		
	}
	else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('CPF ou Senha incorreto!')
				window.location.href='../view/LoginCliente.php';
				</SCRIPT>");
		
		exit;
		
	}
	
?>
