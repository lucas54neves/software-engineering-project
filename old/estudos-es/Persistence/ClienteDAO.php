<?php
    class ClienteDAO {
        function __construct() {}

        function salvar($cliente, $conexao) {
            $sql = "INSERT INTO `cliente`(`cpf`, `nome`, `nascimento`, `salario`) VALUES ('".
                $cliente->getCpf()."','".
                $cliente->getNome()."','".
                $cliente->getNascimento()."',".
                $cliente->getSalario().")";

            if ($conexao->query($sql) == TRUE) {
                echo "Cliente salvo";
            } else {
                echo "Erro no cadastramento: <br>".$conexao->error;
            }
        }

        function consultarTodosClientes($conexao) {
            $sql = "SELECT `cpf`, `nome`, `nascimento`, `salario` FROM `cliente`";
            $resultado = $conexao->query($sql);
            return $resultado;
        }

        function consultarCPF($cpf, $conexao) {
            $sql = "SELECT `cpf`, `nome`, `nascimento`, `salario` FROM `cliente` WHERE cpf = ".$cpf;
            $resultado = $conexao->query($sql);
            return $resultado;
        }

        function excluirCPF($cpf, $conexao) {
            $sql = "DELETE FROM `cliente` WHERE cpf = ".$cpf;
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
?>
