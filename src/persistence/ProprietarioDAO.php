<?php
    class ProprietarioDAO {
        function __construct() {}

        function salvar($proprietario, $conexao) {
            $sql = "INSERT INTO `Proprietario`(`cpf`, `nome`, `email`, `nascimento`, `senha`) VALUES ('".
                $proprietario->getCpf()."','".
                $proprietario->getNome()."','".
                $proprietario->getEmail()."','".
                $proprietario->getNascimento()."','".
                $proprietario->getSenha()."')";

            if ($conexao->query($sql) == TRUE) {
                echo "<script>alert('Proprietario salvo')</script>";
            } else {
                echo "Erro ao cadastrar o proprietario: <br>".$conexao->error;
            }
        }

        function consultar($cpf, $conexao) {
            $sql = "SELECT * FROM `Proprietario` WHERE cpf = '" . $cpf . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
 ?>
