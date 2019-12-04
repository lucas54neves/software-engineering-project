<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Imovel.php';
    include_once '../persistence/ImovelDAO.php';

    $id = $_POST['idImovel'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $imovelDAO = new ImovelDAO();
    $imovelDAO->remover($conexao, $id);
?>
