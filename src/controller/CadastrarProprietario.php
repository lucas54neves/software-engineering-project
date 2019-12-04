<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Proprietario.php';
    include_once '../persistence/ProprietarioDAO.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nascimento = $_POST['nascimento'];
    $senha = $_POST['senha'];

    $proprietario = new Proprietario($cpf, $nome, $email, $nascimento, $senha);

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $proprietarioDAO = new ProprietarioDAO();
    $proprietarioDAO->salvar($proprietario, $conexao);
	
	header('Location: ../index.html');
?>
