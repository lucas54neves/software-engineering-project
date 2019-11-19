<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Inquilino.php';
    include_once '../persistence/InquilinoDAO.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $renda = $_POST['renda'];
    $imovelAlugado = $_POST['imovelAlugado'];
    $aluguel = $_POST['aluguel'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $inquilino = new Inquilino($nome, $cpf, $nascimento, $renda, $imovelAlugado, $aluguel);

    $inquilinoDAO = new InquilinoDAO();
    $inquilinoDAO->salvar($inquilino, $conexao);
?>
