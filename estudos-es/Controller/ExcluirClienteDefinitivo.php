<?php
    include_once '../Persistence/Connection.php';
    include_once '../Persistence/ClienteDAO.php';

    $cpf = $_POST['cpf'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $clienteDAO = new ClienteDAO();
    $resultado = $clienteDAO->excluirCPF($cpf, $conexao);

    if ($resultado == TRUE) {
        echo "Excluído com sucesso";
    } else {
        echo 'Erro na exclusão: '.$conexao->error;
    }
?>
