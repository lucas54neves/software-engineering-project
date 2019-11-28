<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Cliente.php';
    include_once '../persistence/ClienteDAO.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $renda = $_POST['renda'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $cliente = new Cliente($cpf, $nome, $nascimento, $renda);

    $clienteDAO = new ClienteDAO();
    $clienteDAO->salvar($cliente, $conexao);
?>
