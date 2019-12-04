<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Proprietario.php';
    include_once '../persistence/ProprietarioDAO.php';
	
	//inicia sessões
	session_start();

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
	
	$conexao = new Connection();
    $conexao = $conexao->getConnection();
	
	$proprietarioDAO = new ProprietarioDAO();
	$resultado = $proprietarioDAO->consultar($cpf , $conexao);
	
	$linha = $resultado->fetch_assoc();

	if($cpf == $linha['cpf'] and $senha == $linha['senha']){
		$_SESSION['cpfproprietario'] = $linha['cpf'];
		$_SESSION['nomeproprietario'] = $linha['nome'];
		
		header('Location: ../view/AreaProprietario.php');
		exit;
		
	}
	else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('CPF ou Senha incorreto!')
				window.location.href='../view/LoginProprietario.php';
				</SCRIPT>");
		
		exit;
		
	}
	
?>
