<?php
    class FuncionarioDAO {
        function __construct() {}

        function salvar($funcionario, $conexao) {
            $sql = "INSERT INTO `Funcionario`(`cpf`, `nome`, `nascimento`, `email`, `senha`) VALUES ('".
                $funcionario->getCpf()."','".
                $funcionario->getNome()."','".
                $funcionario->getNascimento()."','".
                $funcionario->getEmail()."','".
                $funcionario->getSenha()."')";

            if ($conexao->query($sql) == TRUE) {
                echo "<script>alert('Funcionario salvo')</script>";
            } else {
                echo "Erro ao cadastrar o funcionario: <br>".$conexao->error;
            }
        }

        function consultar($cpf, $conexao) {
            $sql = "SELECT * FROM `Funcionario` WHERE cpf = '" . $cpf . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
 ?>
