<?php
    class FuncionarioDAO {
        function __construct() {}

        function salvar($funcionario, $conexao) {
            $sql = "INSERT INTO `funcionario`(`nome`, `cpf`, `nascimento`) VALUES ('".
                $funcionario->getNome()."','".
                $funcionario->getCpf()."','".
                $funcionario->getNascimento()."')";

            if ($conexao->query($sql) == TRUE) {
                echo "Funcionario salvo";
            } else {
                echo "Erro ao cadastrar o funcionario: <br>".$conexao->error;
            }
        }

        function consultarCPF($cpf, $conexao) {
            $sql = "SELECT * FROM `funcionario` WHERE cpf = ".$cpf;
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
 ?>
