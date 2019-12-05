<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/ContratoDAO.php';

    $nomeFuncionario = $_POST['nomeFuncionario'];
    $nomeProprietario = $_POST['nomeProprietario'];
    $nomeCliente = $_POST['nomeCliente'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $contratoDAO = new ContratoDAO();
    $contratoDAO->remover($nomeFuncionario, $nomeProprietario, $nomeCliente, $conexao);
	
	
?>
