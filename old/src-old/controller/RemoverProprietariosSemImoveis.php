<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/ProprietarioDAO.php';

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $proprietarioDAO = new ProprietarioDAO();
    $proprietariosSemImoveis = $proprietarioDAO->consultarSemImovel($conexao);

    if ($proprietariosSemImoveis->num_rows > 0) {
        $proprietarioDAO->removerProprietariosSemImoveis($conexao);
    } else {
        echo "<script>alert('Não tem cadastro de proprietários sem imóveis')</script>";
    }
?>
