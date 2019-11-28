<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/ImovelDAO.php';

    $bairro = $_POST['bairro'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $imovelDAO = new ImovelDAO();
    $resultado = $imovelDAO->consultar($bairro, $conexao);

    if ($resultado->num_rows > 0) {
        echo "
            <table>
                <tr>
                    <th>ID</th>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Bairro</th>
                    <th>Aluguel</th>
                    <th>CPF do proprietário</th>
                </tr>";
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo
                "<td>".$linha['id']."</td>".
                "<td>".$linha['logradouro']."</td>".
                "<td>".$linha['numero']."</td>".
                "<td>".$linha['bairro']."</td>".
                "<td>".$linha['aluguel']."</td>".
                "<td>".$linha['cpfProprietario']."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<script>alert('Não tem imóvel desse bairro cadastrado')</script>";
    }
?>
