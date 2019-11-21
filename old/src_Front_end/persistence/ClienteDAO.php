<?php
    class ClienteDAO {
        function __construct() {}

        function salvar($cliente, $conexao) {
            $sql = "INSERT INTO `cliente`(`nome`, `cpf`, `nascimento`, `renda`) VALUES ('".
                $cliente->getNome()."','".
                $cliente->getCpf()."','".
                $cliente->getNascimento()."',".
                $cliente->getRenda().")";

            if ($conexao->query($sql) == TRUE) {
                echo "Cliente salvo";
            } else {
                echo "Erro ao cadastrar o cliente: <br>".$conexao->error;
            }
        }
    }

 ?>
