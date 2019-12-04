<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Funcionario.php';
    include_once '../persistence/FuncionarioDAO.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $funcionario = new Funcionario($cpf, $nome, $nascimento, $email, $senha);

    $funcionarioDAO = new FuncionarioDAO();
    $funcionarioDAO->salvar($funcionario, $conexao);
	
	header('Location: ../index.php');
?>
