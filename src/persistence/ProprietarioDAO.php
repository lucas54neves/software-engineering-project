<?php
    class ProprietarioDAO {
        function __construct() {}

        function salvar($proprietario, $conexao) {
            $sql = "INSERT INTO `proprietario`(`nome`, `cpf`, `nascimento`) VALUES ('".
                $proprietario->getNome()."','".
                $proprietario->getCpf()."','".
                $proprietario->getNascimento()."')";

            if ($conexao->query($sql) == TRUE) {
                echo "Proprietario salvo";
            } else {
                echo "Erro ao cadastrar o proprietario: <br>".$conexao->error;
            }
        }
    }
 ?>