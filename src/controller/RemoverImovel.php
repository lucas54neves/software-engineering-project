<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Imovel.php';
    include_once '../persistence/ImovelDAO.php';

    $bairro = $_POST['bairro'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $imovelDAO = new ImovelDAO();
    $imovelDAO->remover($conexao, $bairro);
?>
