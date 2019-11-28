<?php
    class Cliente {
        private $cpf;
        private $nome;
        private $email;
        private $renda;
        private $nascimento;
        private $senha;

        function __construct($cpf, $nome, $email, $renda, $nascimento, $senha) {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->email = $email;
            $this->renda = $renda;
            $this->nascimento = $nascimento;
            $this->senha = $senha;
        }

        function getCpf() {
            return $this->cpf;
        }

        function getNome() {
            return $this->nome;
        }

        function getEmail() {
            return $this->email;
        }

        function getRenda() {
            return $this->renda;
        }

        function getNascimento() {
            return $this->nascimento;
        }

        function getSenha() {
            return $this->senha;
        }
    }
?>
