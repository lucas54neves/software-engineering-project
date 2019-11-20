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

        function consultarCPF($cpf, $conexao) {
            $sql = "SELECT * FROM `inquilino` WHERE cpf = ".$cpf;
            $resultado = $conexao->query($sql);
            return $resultado;
        }

        function atualizarAluguel($cpf, $novoAluguel, $conexao) {
            $sql = "UPDATE inquilino SET aluguel = " . $novoAluguel . " WHERE cpf = " . $cpf;
            $conexao->query($sql);
            return $this->consultarCPF($cpf, $conexao);
        }
    }

 ?>
