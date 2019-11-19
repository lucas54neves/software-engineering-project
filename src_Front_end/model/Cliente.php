<?php
    class Cliente {
        private $nome;
        private $cpf;
        private $nascimento;
        private $renda;

        function __construct($cpf, $nome, $nascimento, $renda) {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->nascimento = $nascimento;
            $this->renda = $renda;
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

        function getRenda() {
            return $this->renda;
        }
    }
?>
