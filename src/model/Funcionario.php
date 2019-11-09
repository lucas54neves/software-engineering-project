<?php
    class Funcionario {
        private $nome;
        private $cpf;
        private $nascimento;

        function __construct($nome, $cpf, $nascimento) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->$nascimento = $$nascimento;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumero() {
            return $this->cpf;
        }

        function getNascimento() {
            return $this->$nascimento;
        }
    }
?>
