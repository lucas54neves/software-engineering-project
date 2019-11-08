<?php
    include_once '../Persistence/Connection.php';
    include_once '../Model/Cliente.php';
    include_once '../Persistence/ClienteDAO.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $salario = $_POST['salario'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $cliente = new Cliente($cpf, $nome, $nascimento, $salario);

    $clienteDAO = new ClienteDAO();
    $clienteDAO->salvar($cliente, $conexao);
?>
