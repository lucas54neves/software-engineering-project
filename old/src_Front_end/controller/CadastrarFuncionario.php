<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Funcionario.php';
    include_once '../persistence/FuncionarioDAO.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $funcionario = new Funcionario($nome, $cpf, $nascimento);

    $funcionarioDAO = new FuncionarioDAO();
    $funcionarioDAO->salvar($funcionario, $conexao);
?>
