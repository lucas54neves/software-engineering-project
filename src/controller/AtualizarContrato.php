<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/ContratoDAO.php';

    $idContrato = $_POST['idContrato'];
    $novoAluguel = $_POST['novoAluguel'];
    $cpfNovoCliente = $_POST['cpfNovoCliente'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $contratoDAO = new ContratoDAO();
    $contratoDAO->atualizar($idContrato, $novoAluguel, $cpfNovoCliente, $conexao);
?>
