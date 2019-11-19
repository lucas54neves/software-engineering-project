<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/ImovelDAO.php';

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $imovelDAO = new ImovelDAO();
    $resultado = $imovelDAO->consultarNaoAlugado($conexao);

    if ($resultado->num_rows > 0) {
        echo "
            <table>
                <tr>
                    <th>ID</th>
                    <th>CPF do Proprietário</th>
                    <th>Aluguel</th>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Bairro</th>
                </tr>";

        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo
                "<td>".$linha['idImovel']."</td>".
                "<td>".$linha['cpfProprietario']."</td>".
                "<td>".$linha['aluguel']."</td>".
                "<td>".$linha['logradouro']."</td>".
                "<td>".$linha['numero']."</td>".
                "<td>".$linha['bairro']."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<script>alert('Todos os imóveis foram alugados')</script>";
    }
?>
