<?php
    include_once '../Persistence/Connection.php';
    include_once '../Persistence/ClienteDAO.php';

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $clienteDAO = new ClienteDAO();
    $resultado = $clienteDAO->consultarTodosClientes($conexao);

    if ($resultado->num_rows > 0) {
        echo "
            <table>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Nascimento</th>
                    <th>Salário</th>
                </tr>";

        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo
                "<td>".$linha['cpf']."</td>".
                "<td>".$linha['nome']."</td>".
                "<td>".$linha['nascimento']."</td>".
                "<td>".$linha['salario']."</td><br>";
            echo "</tr>";
        }

        echo "</table>";
    }
?>