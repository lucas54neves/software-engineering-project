<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Proprietario.php';
    include_once '../persistence/ProprietarioDAO.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $proprietario = new Proprietario($nome, $cpf, $nascimento);

    $proprietarioDAO = new ProprietarioDAO();
    $proprietarioDAO->salvar($proprietario, $conexao);
?>
