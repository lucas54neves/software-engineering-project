<?php
    class InquilinoDAO {
        function __construct() {}

        function salvar($inquilino, $conexao) {
            $sql = "INSERT INTO `inquilino`(`cpf`, `nome`, `nascimento`, `renda`, `imovelAlugado`, `aluguel`) VALUES ('".
                $inquilino->getCpf()."','".
                $inquilino->getNome()."','".
                $inquilino->getNascimento()."',".
                $inquilino->getRenda().",'".
                $inquilino->getImovelAlugado()."','".
                $inquilino->getAluguel()."')";

            if ($conexao->query($sql) == TRUE) {
                echo "Inquilino salvo";
            } else {
                echo "Erro ao cadastrar o inquilino: <br>".$conexao->error;
            }
        }
    }

 ?>
