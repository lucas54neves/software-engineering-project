<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/ClienteDAO.php';

    $cpf = $_POST['cpf'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $clienteDAO = new ClienteDAO();
    $resultado = $clienteDAO->consultarCPF($cpf, $conexao);

    if ($resultado->num_rows > 0) {
        echo "
            <table>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Nascimento</th>
                    <th>Renda</th>
                </tr>";

        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo
                "<td>".$linha['cpf']."</td>".
                "<td>".$linha['nome']."</td>".
                "<td>".$linha['nascimento']."</td>".
                "<td>".$linha['renda']."</td><br>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<script>alert('CPF não cadastrado')</script>";
    }
?>
