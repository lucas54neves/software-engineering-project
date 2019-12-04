<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/FuncionarioDAO.php';
	
	//inicia sessões
	session_start();

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
	
	$conexao = new Connection();
    $conexao = $conexao->getConnection();
	
	$funcionarioDAO = new FuncionarioDAO();
	$resultado = $funcionarioDAO->consultar($cpf , $conexao);
	
	$linha = $resultado->fetch_assoc();

	if($cpf == $linha['cpf'] and $senha == $linha['senha']){
		$_SESSION['cpffuncionario'] = $linha['cpf'];
		$_SESSION['nomefuncionario'] = $linha['nome'];
		header('Location: ../view/AreaFuncionario.php');
		exit;
		
	}
	else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('CPF ou Senha incorreto!')
				window.location.href='../view/LoginFuncionario.php';
				</SCRIPT>");
		
		exit;
		
	}
	
?>
