<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/InquilinoDAO.php';
    include_once '../persistence/ImovelDAO.php';

    $cpf = $_POST['cpf'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $inquilinoDAO = new InquilinoDAO();
    $inquilino = $inquilinoDAO->consultarCPF($cpf, $conexao);

    if ($inquilino->num_rows > 0) {
        $imovelDAO = new ImovelDAO();
        $imovel = $imovelDAO->consultarCPF($cpf, $conexao);

        if ($imovel->num_rows > 0) {
            echo "
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Aluguel</th>
                        <th>Logradouro</th>
                        <th>Número</th>
                        <th>Bairro</th>
                    </tr>";

            while ($linha = $imovel->fetch_assoc()) {
                echo "<tr>";
                echo
                    "<td>".$linha['idImovel']."</td>".
                    "<td>".$linha['aluguel']."</td>".
                    "<td>".$linha['logradouro']."</td>".
                    "<td>".$linha['numero']."</td>".
                    "<td>".$linha['bairro']."</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<script>alert('Imóvel não cadastrado com esse CPF')</script>";
        }
    } else {
        echo "<script>alert('CPF não cadastrado')</script>";
    }
?>
