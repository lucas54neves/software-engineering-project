<?php
    include_once '../Persistence/Connection.php';
    include_once '../Persistence/ClienteDAO.php';

    $cpf = $_POST['cpf'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $clienteDAO = new ClienteDAO();
    $resultado = $clienteDAO->consultarCPF($cpf, $conexao);

    if ($resultado->num_rows == 1) {
        $registro = $resultado->fetch_assoc();

        echo
            "<!DOCTYPE html>
            <html lang='pt' dir='ltr'>
                <head>
                    <meta charset='utf-8'>
                    <link rel='stylesheet' type='text/css' href='estilo.css'>
                    <title></title>
                </head>
                <body>
                    <h2>Cadastro de Cliente</h2>
                    <form action='..\Controller\ExcluirClienteDefinitivo.php' method='post'>
                        CPF: <input type='text' name='cpf' value='".$registro['cpf']."'><br><br>
                        Nome: <input type='text' name='nome' value='".$registro['nome']."'><br><br>
                        Nascimento: <input type='date' name='nascimento' value='".$registro['nascimento']."'><br><br>
                        Salário: <input type='text' name='salario' value='".$registro['salario']."'><br><br>
                        <input type='submit' value='Excluir'>
                        <input type='reset' value='Limpar'>
                    </form>
                </body>
            </html>";
    }
?>
