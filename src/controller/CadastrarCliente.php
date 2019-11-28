<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Cliente.php';
    include_once '../persistence/ClienteDAO.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $renda = $_POST['renda'];
    $nascimento = $_POST['nascimento'];
    $senha = $_POST['senha'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $cliente = new Cliente($cpf, $nome, $email, $renda, $nascimento, $senha);

    $clienteDAO = new ClienteDAO();
    $clienteDAO->salvar($cliente, $conexao);
?>
