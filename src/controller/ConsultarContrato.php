<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/ContratoDAO.php';

    $idContrato = $_POST['idContrato'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $contratoDAO = new ContratoDAO();
    $resultado = $contratoDAO->consultar($idContrato, $conexao);

    if ($resultado->num_rows > 0) {
        echo "
            <table>
                <tr>
                    <th>Nome do Cliente</th>
                    <th>CPF do Cliente</th>
                    <th>Nome do Proprietário</th>
                    <th>CPF do Proprietário</th>
                    <th>ID do Imóvel</th>
                </tr>";
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo
                "<td>".$linha['nomeCliente']."</td>".
                "<td>".$linha['cpfCliente']."</td>".
                "<td>".$linha['nomeProprietario']."</td>".
                "<td>".$linha['cpfProprietario']."</td>".
                "<td>".$linha['idImovel']."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<script>alert('Não tem contrato cadastrado com esse ID')</script>";
    }
 ?>
