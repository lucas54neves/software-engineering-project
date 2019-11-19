<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Imovel.php';
    include_once '../persistence/ImovelDAO.php';

    $idImovel = $_POST['idImovel'];
    $cpfProprietario = $_POST['cpfProprietario'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $aluguel = $_POST['aluguel'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $imovel = new Imovel($idImovel, $cpfProprietario, $logradouro, $numero, $bairro, $aluguel);

    $imovelDAO = new ImovelDAO();
    $imovelDAO->salvar($imovel, $conexao);
?>
