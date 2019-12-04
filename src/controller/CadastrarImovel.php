<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Imovel.php';
    include_once '../persistence/ImovelDAO.php';
	
    $id = $_POST['idImovel'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $aluguel = $_POST['aluguel'];
    $cpfProprietario = $_SESSION['cpfproprietario'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $imovel = new Imovel($id, $logradouro, $numero, $bairro, $aluguel, $cpfProprietario);

    $imovelDAO = new ImovelDAO();
    $imovelDAO->salvar($imovel, $conexao);
	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Imóvel cadastrado com Sucesso!')
    				window.location.href='../view/AreaProprietario.php';
    				</SCRIPT>");
?>
