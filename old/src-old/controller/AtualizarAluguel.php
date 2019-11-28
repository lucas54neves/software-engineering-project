<?php
    include_once '../persistence/Connection.php';
    include_once '../persistence/InquilinoDAO.php';
    include_once '../persistence/ImovelDAO.php';

    $cpf = $_POST['cpf'];
    $novoAluguel = $_POST['novoAluguel'];

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $inquilinoDAO = new InquilinoDAO();
    $inquilino = $inquilinoDAO->consultarCPF($cpf, $conexao);

    if ($inquilino->num_rows > 0) {
        $imovelDAO = new ImovelDAO();
        $imovel = $imovelDAO->consultarCPF($cpf, $conexao);

        if ($imovel->num_rows > 0) {
            $resultado = $inquilinoDAO->atualizarAluguel($cpf, $novoAluguel, $conexao);
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
            }
        } else {
            echo "<script>alert('Não existe imóvel com esse CPF')</script>";
        }
    } else {
        echo "<script>alert('Não existe inquilino com esse CPF')</script>";
    }
?>
