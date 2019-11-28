<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/InquilinoDAO.php';

    $cpf = $_POST['cpf'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $inquilinoDAO = new InquilinoDAO();
    $resultado = $inquilinoDAO->consultarCPF($cpf, $conexao);

    if ($resultado->num_rows > 0) {
        echo "
            <table>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Nascimento</th>
                    <th>Renda</th>
                    <th>Imovel Alugado</th>
                    <th>Aluguel</th>
                </tr>";

        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo
                "<td>".$linha['cpf']."</td>".
                "<td>".$linha['nome']."</td>".
                "<td>".$linha['nascimento']."</td>".
                "<td>".$linha['renda']."</td>".
                "<td>".$linha['imovelAlugado']."</td>".
                "<td>".$linha['aluguel']."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<script>alert('CPF não cadastrado')</script>";
    }
?>
