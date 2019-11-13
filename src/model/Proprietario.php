<?php
    class Proprietario {
        private $nome;
        private $cpf;
        private $nascimento;

        function __construct($nome, $cpf, $nascimento) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->nascimento = $nascimento;
        }

        function getNome() {
            return $this->nome;
        }

        function getCpf() {
            return $this->cpf;
        }

        function getNascimento() {
            return $this->nascimento;
        }
    }
?>
