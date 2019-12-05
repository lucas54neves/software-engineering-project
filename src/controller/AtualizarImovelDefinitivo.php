<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Imovel.php';
    include_once '../persistence/ImovelDAO.php';

    $id = $_POST['idImovel'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $aluguel = $_POST['aluguel'];
    $cpfProprietario = $_POST['cpfProprietario'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $imovelDAO = new ImovelDAO();
    $imovelDAO->atualizar($conexao, $id, $logradouro, $numero, $bairro, $aluguel, $cpfProprietario);
?>