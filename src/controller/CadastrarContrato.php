<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/ImovelDAO.php';
    include_once '../persistence/ClienteDAO.php';
    include_once '../persistence/ProprietarioDAO.php';
    include_once '../persistence/FuncionarioDAO.php';
    include_once '../persistence/ContratoDAO.php';
    include_once '../model/Contrato.php';

    $idContrato = $_POST['idContrato'];
    $aluguelContrato = $_POST['aluguelContrato'];
    $idImovel = $_POST['idImovel'];
    $cpfProprietario = $_POST['cpfProprietario'];
    $cpfFuncionario = $_SESSION['cpffuncionario'];
    $cpfCliente = $_POST['cpfCliente'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $clienteDAO = new ClienteDAO();
    $resultado = $clienteDAO->consultar($cpfCliente, $conexao);

    if ($resultado->num_rows > 0) {
        $funcionarioDAO = new FuncionarioDAO();
        $resultado = $funcionarioDAO->consultar($cpfFuncionario, $conexao);
        if ($resultado->num_rows > 0) {
            $proprietarioDAO = new ProprietarioDAO();
            $resultado = $proprietarioDAO->consultar($cpfProprietario, $conexao);
            if ($resultado->num_rows > 0) {
                $imovelDAO = new ImovelDAO();
                $resultado = $imovelDAO->consultarID($idImovel, $conexao);
                if ($resultado->num_rows > 0) {
                    $contrato = new Contrato($idContrato, $aluguelContrato, $idImovel, $cpfProprietario, $cpfFuncionario, $cpfCliente);

                    $contratoDAO = new ContratoDAO();
                    $contratoDAO->salvar($contrato, $conexao);
                } else {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('Não existe um imóvel cadastrado com esse ID!')
							window.location.href='../view/AreaFuncionario.php';
							</SCRIPT>");
                }
            } else {
                echo("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('Não existe um proprietário cadastrado com esse CPF!')
							window.location.href='../view/AreaFuncionario.php';
							</SCRIPT>");
            }
        } else {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('Não existe um funcionário cadastrado com esse CPF!')
							window.location.href='../view/AreaFuncionario.php';
							</SCRIPT>");
        }
    } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('Não existe um cliente cadastrado com esse CPF!')
							window.location.href='../view/AreaFuncionario.php';
							</SCRIPT>");
    }
 ?>
