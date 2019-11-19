<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Imovel.php';
    include_once '../persistence/ImovelDAO.php';

    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $aluguel = $_POST['aluguel'];
    $idImovel = $_POST['idImovel'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $imovel = new Imovel($logradouro, $numero, $bairro, $aluguel, $idImovel);

    $imovelDAO = new ImovelDAO();
    $imovelDAO->salvar($imovel, $conexao);
?>
