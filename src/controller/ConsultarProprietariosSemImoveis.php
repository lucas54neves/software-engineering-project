<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/ProprietarioDAO.php';

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $proprietarioDAO = new ProprietarioDAO();
    $proprietariosSemImoveis = $proprietarioDAO->consultarSemImovel($conexao);

    if ($proprietariosSemImoveis->num_rows > 0) {
        $resultado = $proprietarioDAO->consultarSemImovel($conexao);

        if ($resultado->num_rows > 0) {
            echo "
                <table>
                    <tr>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Nascimento</th>
                    </tr>";

            while ($linha = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo
                    "<td>".$linha['cpf']."</td>".
                    "<td>".$linha['nome']."</td>".
                    "<td>".$linha['nascimento']."</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    } else {
        echo "<script>alert('Não tem cadastro de proprietários sem imóveis')</script>";
    }
?>
